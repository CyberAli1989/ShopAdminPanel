@extends('dashboard.adminlayout')

@section('content')
    <form class="container" method="post" action="">
        @csrf

        <div class="row">
            <div class="col-md-6 mt-3">
                <div class="form-group">
                    <label for="name">
                        {{__('Name')}}
                    </label>
                    <input name="name" type="undefined" class="form-control @error('name') is-invalid @enderror" placeholder="{{__('Name')}}" value="{{old('name',$product->name??null)}}"  />
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="form-group">
                    <label for="category_id">
                        {{__('category')}}
                    </label>
                    <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror"   >
                        @foreach($category as $cat )
                            <option  value="{{ $cat->id }}"  @if (old('category_id',$item->category_id??null) == $cat->title ) selected @endif > {{$cat->title}} </option>
                        @endforeach
                    </select>			 </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="form-group">
                    <label for="price">
                        {{__('Price')}}
                    </label>
                    <input name="price" type="text" class="form-control @error('price') is-invalid @enderror" placeholder="{{__('Price')}}" value="{{old('price',$product->price??null)}}"  />
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="form-group">
                    <label for="quantity">
                        {{__('Quantity')}}
                    </label>
                    <input name="quantity" type="text" class="form-control @error('quantity') is-invalid @enderror" placeholder="{{__('Quantity')}}" value="{{old('quantity',$product->quantity??null)}}"  />
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="form-group">
                    <label for="sku">
                        {{__('SKU code')}}
                    </label>
                    <input name="sku" type="text" class="form-control @error('sku') is-invalid @enderror" placeholder="{{__('SKU code')}}" value="{{old('sku',$product->sku??null)}}"  />
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="form-group">
                    <label for="slug">
                        {{__('Slug')}}
                    </label>
                    <input name="slug" type="text" class="form-control @error('slug') is-invalid @enderror" placeholder="{{__('Slug')}}" value="{{old('slug',$product->slug??null)}}"  />
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <div class="form-group">
                    <label for="description">
                        {{__('Description')}}
                    </label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="{{__('Description')}}" rows="7" >{{old('description',$product->description??null)}}</textarea>
                </div>
            </div>
            <div class="col-md-12">
                <label> &nbsp; </label>
                <input name="" type="submit" class="btn btn-primary mt-2" value="{{__('Save')}}"   />
            </div>
        </div>
    </form>

@endsection
