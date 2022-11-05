@extends('dashboard.adminlayout')

@section('content')
    <div class="container">
        <form method="get" class="container my-3">
            <div class="input-group">
                <input type="search" class="form-control" name="q" value="{{$q}}">
                <button class="btn btn-primary">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </form>
        <form method="post" action="{{route('admin.product.bulk')}}">
            @csrf
            <table class="table align-middle text-center table-bordered table-hover">
                <thead>
                <tr>
                    <th><input type="checkbox" class="checkall"></th>
                    <th><a class="list-group-item" href="?&q={{$q}}"><span class="fa fa-chevron-down"></span> #</a></th>
                    <th>
                        {{__("image")}}
                    </th>

                    <th>
                        <a class="list-group-item" href="?sort=name&q={{$q}}">
                            <span class="fa fa-chevron-down"></span>
                            {{__("name")}}
                        </a>
                    </th>
                    <th>
                        <a class="list-group-item" href="?sort=price&q={{$q}}">
                            <span class="fa fa-chevron-down"></span>
                            {{__("price")}}
                        </a>
                    </th>
                    <th>
                        <a class="list-group-item" href="?sort=user_id&q={{$q}}">{{__("Author")}}</a>
                    </th>
                    <th>
                        <a class="list-group-item" href="?sort=category_id&q={{$q}}">{{__("Category")}}</a>
                    </th>
                    <th>
                        <a class="list-group-item" href="?sort=view&q={{$q}}">{{__("view")}}</a>
                    </th>
                    <th>
                        <a class="list-group-item" href="?sort=quantity&q={{$q}}">{{__("quantity")}}</a>
                    </th>
                    <th>
                        <a class="list-group-item" href="?sort=sell_count&q={{$q}}">{{__("sell count")}}</a>
                    </th>
                    <th>-</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $item)
                    <tr>
                        <td>
                            <input type="checkbox" name="bulk[]" value="{{$item->slug}}">
                        </td>
                        <td>
                            {{$item->id}}
                        </td>
                        <td>
                            <a target="_blank" href="{{$item->imgO()}}">
                                <img class="img-thumbnail" src="{{$item->imgS()}}" alt="{{$item->slug}}">
                            </a>
                        </td>
                        <td>
                            {{$item->name}}
                        </td>
                        <td>
                            <price val="{{$item->showPrice()}}"></price>
                        </td>
                        <td>
                            {{$item->user->name}}
                        </td>
                        <td>
                            {{$item->category->title}}
                        </td>
                        <td>
                            {{$item->view}}
                        </td>
                        <td>
                            {!! $item->getQuantity()!!}
                        </td>
                        <td>
                            {{$item->sell_count}}
                        </td>
                        <td>
                            <a class="btn btn-danger btn-sm my-2 delete-confirm"
                               href="{{route('admin.product.delete', $item->slug)}}"><span
                                    class="fa fa-trash"></span></a>
                            <a class="btn btn-warning btn-sm my-2"
                               href="{{route('admin.product.edit', $item->slug)}}"><span
                                    class="fa fa-edit"></span></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6">
                    {{$products->appends($_GET)->links()}}
                </div>
                <div class="col-md-6 text-end">
                    <div class="input-group">
                        <select class="form-control" name="status">
                            <option value="del"> {{__("Delete")}}</option>
                            <option value="out"> {{__("Out Of Sold")}}</option>
                            <option value="runOut"> {{__("Run Out Of ...")}}</option>
                        </select>
                        <input type="submit" class="btn btn-danger btn-sm delete-confirm"
                               value="{{__("Submit")}}">
                    </div>
                </div>
            </div>

        </form>
    </div>


@endsection
