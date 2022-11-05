<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductSaveRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function updateOrSave(Product $product, ProductSaveRequest $request)
    {
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->category_id = $request->input('category_id');
        $product->description = $request->input('description');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        $product->sku = $request->input('sku');
        $product->user_id = auth()->id();
        $product->save();

        if ($request->hasFile('image')) {
            $product->media()->delete();
            $product->addMedia($request->file('image'))->toMediaCollection();
        }
    }

    public function index(Request $request)
    {
        $input = $request->input('sort', 'id');
        $sort = Product::orderBy($input, 'desc');
        $q = '';
        if ($request->has('q')) {
            $q = $request->q;
            $sort->where('name', 'LIKE', '%' . $q . '%')
                ->orWhere('description', 'LIKE', '%' . $q . '%');
        }
        $products = $sort->paginate(15);

        return view('dashboard.product.productIndex', compact('products' , 'q'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('dashboard.product.productForm', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductSaveRequest $request)
    {
        $product = new Product();
        $this->updateOrSave($product, $request);
        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $category = Category::all();
        return view('dashboard.product.productForm', compact('category', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Product $product, ProductSaveRequest $request)
    {
        //
        $this->updateOrSave($product, $request);
        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }

    public function bulk(Request $request)
    {

        switch ($request->status) {
            case 'del':
                Product::whereIn('slug', $request->bulk)->delete();
                break;
            case 'out':
                Product::whereIn('slug', $request->bulk)->update(['quantity' => -1]);
                break;
            case 'runOut':
                Product::whereIn('slug', $request->bulk)->update(['quantity' => 0]);
        }
        return redirect()->back();
    }


}
