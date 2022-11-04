@extends('dashboard.adminlayout')

@section('content')
    <div class="container">
        <form method="post" action="{{route('admin.user.bulk')}}">
            @csrf
            <table class="table align-middle text-center table-bordered table-hover">
                <thead>
                <tr>
                    <th><input type="checkbox" class="checkall"></th>
                    <th><a class="list-group-item" href="?"><span class="fa fa-chevron-down"></span> #</a></th>
                    <th><a class="list-group-item" href="?sort=name"><span
                                class="fa fa-chevron-down"></span> {{__("name")}}</th>
                    <th><a class="list-group-item" href="?sort=username"><span
                                class="fa fa-chevron-down"></span> {{__("username")}}</a></th>
                    <th><a class="list-group-item" href="?sort=email"><span
                                class="fa fa-chevron-down"></span> {{__("email")}}</a></th>
                    <th><a class="list-group-item" href="?sort=mobile"><span
                                class="fa fa-chevron-downn"></span> {{__("mobile")}}</a></th>
                    <th>{{__("status")}}</th>
                    <th>-</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $item)
                    <tr>
                        <td>
                            <input type="checkbox" name="bulk[]" value="{{$item->id}}">
                        </td>
                        <td>
                            {{$item->id}}
                        </td>
                        <td>
                            {{$item->name}}
                        </td>
                        <td>
                            {{$item->username}}
                        </td>
                        <td>
                            {{$item->email}}
                        </td>
                        <td>
                            {{$item->mobile}}
                        </td>
                        <td>
                            <span class="fa fa-circle"></span>
                        </td>
                        <td>
                            <a class="btn btn-danger btn-sm mx-2 delete-confirm"
                               href="{{route('admin.user.delete', $item->id)}}"><span
                                    class="fa fa-trash"></span></a>
                            <a class="btn btn-warning btn-sm mx-2" href="{{route('admin.user.edit', $item->id)}}"><span
                                    class="fa fa-edit"></span></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6">
                    {{$users->appends($_GET)->links()}}
                </div>
                <div class="col-md-6 text-end">
                    <input type="submit" class="btn btn-danger delete-confirm" value="{{__("Delete selected users")}}">
                </div>
            </div>

        </form>
    </div>



@endsection
