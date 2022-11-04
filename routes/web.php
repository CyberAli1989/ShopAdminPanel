<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('admin')->name('admin.')->group(
    function () {
        Route::group(
            ['middleware' => ['auth']],
            function () {
                Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');
                Route::prefix('users.')->name('user.')->group(
                    function () {
                        Route::get('/', [\App\Http\Controllers\admin\UserController::class, 'index'])->name('index');
                        Route::get('/delete/{user}', [\App\Http\Controllers\admin\UserController::class, 'destroy'])->name('delete');
                        Route::post('/bulk', [\App\Http\Controllers\admin\UserController::class, 'bulk'])->name('bulk');
                        Route::get('/create', [\App\Http\Controllers\admin\UserController::class, 'create'])->name('create');
                        Route::post('/store', [\App\Http\Controllers\admin\UserController::class, 'store'])->name('store');
                        Route::get('/edit/{user}', [\App\Http\Controllers\admin\UserController::class, 'edit'])->name('edit');
                        Route::post('/update/{user}', [\App\Http\Controllers\admin\UserController::class, 'update'])->name('update');
                    }
                );
                Route::prefix('products.')->name('product.')->group(
                    function () {
                        Route::get('/', [\App\Http\Controllers\admin\ProductController::class, 'index'])->name('index');
                        Route::get('/delete/{product}', [\App\Http\Controllers\admin\ProductController::class, 'destroy'])->name('delete');
                        Route::get('/create', [\App\Http\Controllers\admin\ProductController::class, 'create'])->name('create');
                        Route::post('/store', [\App\Http\Controllers\admin\ProductController::class, 'store'])->name('store');
                        Route::get('/edit/{product}', [\App\Http\Controllers\admin\ProductController::class, 'edit'])->name('edit');
                        Route::post('/update/{product}', [\App\Http\Controllers\admin\ProductController::class, 'update'])->name('update');
                        Route::post('/bulk', [\App\Http\Controllers\admin\ProductController::class, 'bulk'])->name('bulk');

                    }
                );
                Route::prefix('invoices.')->name('invoice.')->group(
                    function () {
                        Route::get('/', [\App\Http\Controllers\admin\InvoiceController::class, 'index'])->name('index');
                        Route::get('/delete/{invoice}', [\App\Http\Controllers\admin\InvoiceController::class, 'destroy'])->name('delete');
                        Route::get('/create', [\App\Http\Controllers\admin\InvoiceController::class, 'create'])->name('create');
                        Route::post('/store', [\App\Http\Controllers\admin\InvoiceController::class, 'store'])->name('store');
                        Route::get('/edit/{invoice}', [\App\Http\Controllers\admin\InvoiceController::class, 'edit'])->name('edit');
                        Route::post('/update/{invoice}', [\App\Http\Controllers\admin\InvoiceController::class, 'update'])->name('update');
                    }
                );
                Route::prefix('customers.')->name('customer.')->group(
                    function () {
                        Route::get('/', [\App\Http\Controllers\admin\CustomerController::class, 'index'])->name('index');
                        Route::get('/delete/{customer}', [\App\Http\Controllers\admin\CustomerController::class, 'destroy'])->name('delete');
                        Route::get('/create', [\App\Http\Controllers\admin\CustomerController::class, 'create'])->name('create');
                        Route::post('/store', [\App\Http\Controllers\admin\CustomerController::class, 'store'])->name('store');
                        Route::get('/edit/{customer}', [\App\Http\Controllers\admin\CustomerController::class, 'edit'])->name('edit');
                        Route::post('/update/{customer}', [\App\Http\Controllers\admin\CustomerController::class, 'update'])->name('update');
                    }
                );
                Route::prefix('categories.')->name('category.')->group(
                    function () {
                        Route::get('/', [\App\Http\Controllers\admin\CategoryController::class, 'index'])->name('index');
                        Route::get('/delete/{category}', [\App\Http\Controllers\admin\CategoryController::class, 'destroy'])->name('delete');
                        Route::get('/create', [\App\Http\Controllers\admin\CategoryController::class, 'create'])->name('create');
                        Route::post('/store', [\App\Http\Controllers\admin\CategoryController::class, 'store'])->name('store');
                        Route::get('/edit/{category}', [\App\Http\Controllers\admin\CategoryController::class, 'edit'])->name('edit');
                        Route::post('/update/{category}', [\App\Http\Controllers\admin\CategoryController::class, 'update'])->name('update');
                    }
                );
                Route::prefix('posts.')->name('post.')->group(
                    function () {
                        Route::get('/', [\App\Http\Controllers\admin\PostController::class, 'index'])->name('index');
                        Route::get('/delete/{post}', [\App\Http\Controllers\admin\PostController::class, 'destroy'])->name('delete');
                        Route::get('/create', [\App\Http\Controllers\admin\PostController::class, 'create'])->name('create');
                        Route::post('/store', [\App\Http\Controllers\admin\PostController::class, 'store'])->name('store');
                        Route::get('/edit/{post}', [\App\Http\Controllers\admin\PostController::class, 'edit'])->name('edit');
                        Route::post('/update/{post}', [\App\Http\Controllers\admin\PostController::class, 'update'])->name('update');
                    }
                );
                Route::prefix('comments.')->name('comment.')->group(
                    function () {
                        Route::get('/', [\App\Http\Controllers\admin\CommentsController::class, 'index'])->name('index');
//                        Route::get('/delete/{comment}', [\App\Http\Controllers\admin\CommentsController::class ,'destroy'])->name('delete');
//                        Route::get('/create', [\App\Http\Controllers\admin\CommentsController::class ,'create'])->name('create');
//                        Route::post('/store', [\App\Http\Controllers\admin\CommentsController::class ,'store'])->name('store');
//                        Route::get('/edit/{comment}', [\App\Http\Controllers\admin\CommentsController::class ,'edit'])->name('edit');
//                        Route::post('/update/{comment}', [\App\Http\Controllers\admin\CommentsController::class ,'update'])->name('update');
                    }
                );
            }
        );
    }
);
