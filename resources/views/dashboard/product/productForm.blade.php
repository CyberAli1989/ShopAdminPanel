@extends('dashboard.adminlayout')

@section('content')


    @if( isset($product))
        <div class="container">
            <div class="main-img position-relative">
                <img class="img-fluid" src="{{$product->imgO()}}" alt="">
                <span class="fa fa-close position-absolute top-0"></span>
            </div>
        </div>
    @endif
    <form class="container" enctype="multipart/form-data" method="post"
          @if(isset($product))
          action="{{route('admin.product.update' , $product->slug)}}"

          @else
          action="{{route('admin.product.store')}}"
        @endif

    >

        @csrf

        <div class="row">
            <div class="col-md-6 mt-3">
                <div class="form-group">
                    <label for="name">
                        {{__('Name')}}
                    </label>
                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                           placeholder="{{__('Name')}}" value="{{old('name',$product->name??null)}}"/>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="form-group">
                    <label for="category_id">
                        {{__('category')}}
                    </label>
{{--                    <v-select label="title"  :value="id" :options="{{$category}}">--}}

{{--                    </v-select>--}}
                    <select name="category_id" id="category_id"
                            class="form-control @error('category_id') is-invalid @enderror">
                        @foreach($category as $cat )
                            <option value="{{ $cat->id }}"
                                    @if (old('category_id',$item->category_id??null) == $cat->title ) selected @endif > {{$cat->title}} </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="form-group">
                    <label for="price">
                        {{__('Price')}}
                    </label>
                    {{--                    <input name="price" type="text" class="form-control @error('price') is-invalid @enderror"--}}
                    {{--                           placeholder="{{__('Price')}}" value="{{old('price',$product->price??null)}}"/>--}}
                    <comfy myname="price" place="{{__('Price')}}" val="{{old('price',$product->price??null)}}"></comfy>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="form-group">
                    <label for="quantity">
                        {{__('Quantity')}}
                    </label>
                    <input name="quantity" type="text" class="form-control @error('quantity') is-invalid @enderror"
                           placeholder="{{__('Quantity')}}" value="{{old('quantity',$product->quantity??null)}}"/>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="form-group">
                    <label for="sku">
                        {{__('SKU code')}}
                    </label>
                    <input name="sku" type="text" class="form-control @error('sku') is-invalid @enderror"
                           placeholder="{{__('SKU code')}}" value="{{old('sku',$product->sku??null)}}"/>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="form-group">
                    <label for="slug">
                        {{__('Slug')}}
                    </label>
                    <input name="slug" type="text" class="form-control @error('slug') is-invalid @enderror"
                           placeholder="{{__('Slug')}}" value="{{old('slug',$product->slug??null)}}"/>
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <div class="form-group">
                    <label for="description">
                        {{__('Description')}}
                    </label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                              placeholder="{{__('Description')}}"
                              rows="7">{{old('description',$product->description??null)}}</textarea>
                </div>
            </div>
            <div class="col-md-12">
                <input accept="image/*" name="image" type="file" class="form-control chose-img my-3">
            </div>
            <div class="col-md-12">
                <label> &nbsp; </label>
                <input name="" type="submit" class="btn btn-primary mt-2" value="{{__('Save')}}"/>
            </div>
        </div>
    </form>

@endsection
<script>
    import Comfy from "../../../js/components/ComfyComponent";

    export default {
        components: {Comfy}
    }
</script>
