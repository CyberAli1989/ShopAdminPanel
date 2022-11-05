@extends('auth.authLayout')


@section('content')
    <div id="app">
        <div id="login" class="container-fluid">
            <div class="row">
                <div id="login-form" class="col-md-4 p-0">
                    <form class="" method="post" action="{{route('login')}}">
                        @csrf

                        <div class="row">
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
                                    <label for="password">
                                        {{__('Password')}}
                                    </label>
                                    <input name="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror"
                                           placeholder="{{__('Password')}}"
                                           value="{{old('password',$user->password??null)}}"/>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3 text-end">
                                @if (Route::has('password.request'))
                                    <a class="alert-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password ?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="col-md-12 mt-3 text-end">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember"
                                           id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label> &nbsp; </label>
                                <input name="" type="submit" class="btn btn-primary btn-sm w-100 mt-2"
                                       value="{{__('Login')}}"/>
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
