@extends('auth.authLayout')



@section('content')
    <div id="app">
        <div id="Register" class="container-fluid">
            <div class="row">
                <div id="register-form" class="col-md-4 p-0">
                    <form class="login-register-form" method="post" action="{{route('register')}}">
                        @csrf

                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label for="name">
                                        {{__('Name')}}
                                    </label>
                                    <input name="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror"
                                           placeholder="{{__('Name')}}" value="{{old('name',$user->name??null)}}"/>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label for="username">
                                        {{__('Username')}}
                                    </label>
                                    <input name="username" type="text"
                                           class="form-control @error('username') is-invalid @enderror"
                                           placeholder="{{__('Username')}}" value="{{old('username',$user->username??null)}}"/>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label for="email">
                                        {{__('Email')}}
                                    </label>
                                    <input name="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           placeholder="{{__('Email')}}" value="{{old('email',$user->email??null)}}"/>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label for="email">
                                        {{__('Mobile')}}
                                    </label>
                                    <input name="mobile" type="text"
                                           class="form-control @error('mobile') is-invalid @enderror"
                                           placeholder="{{__('Mobile')}}" value="{{old('mobile',$user->mobile??null)}}"/>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="password">
                                        {{__('Password')}}
                                    </label>
                                    <input name="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror"
                                           placeholder="{{__('Password')}}"
                                           value="{{old('password',$user->password??null)}}"/>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="password_confirmation">
                                        {{__('confirm password')}}
                                    </label>
                                    <input name="password_confirmation" type="password"
                                           class="form-control @error('password_confirmation') is-invalid @enderror"
                                           placeholder="{{__('confirm password')}}"
                                           value="{{old('password_confirmation',$user->password_confirmation??null)}}"/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label> &nbsp; </label>
                                <input name="" type="submit" class="btn btn-primary w-100 mt-2" value="{{__('Register')}}"/>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-8 p-0">
                    <img class="img-fluid" src="https://picsum.photos/1600/1200" alt="">
                </div>
            </div>
        </div>
    </div>

@endsection
