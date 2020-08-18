@extends('Layout.mainAdmin')
@section('content')
    <div class="pattern">
        <span class="red"></span>
        <span class="indigo"></span>
        <span class="blue"></span>
        <span class="green"></span>
        <span class="orange"></span>
    </div>
    <div class="auth-main particles_js">
        <div class="auth_div vivify popIn">
            <div class="auth_brand">
                <a class="navbar-brand" href="javascript:void(0);"><img src="{{asset('assets/mainAdmin/images/icon.svg')}}" width="30" height="30" class="d-inline-block align-top mr-2" alt="">برگو</a>
            </div>
            <div class="card">
                <div class="body">
                    <p class="lead">وارد حساب کاربری خود شوید</p>
                    <form class="form-auth-small m-t-20" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="signin-email" class="control-label sr-only">ایمیل</label>
                            <input type="email" class="form-control round" name="email" id="signin-email" placeholder="ایمیل">
                        </div>
                        <div class="form-group">
                            <label for="signin-password" class="control-label sr-only">رمزعبور</label>
                            <input type="password" class="form-control round" name="password" id="signin-password"  placeholder="رمزعبور">
                        </div>
                        <div class="form-group clearfix">
                            <label class="fancy-checkbox element-left">
                                <input type="checkbox">
                                <span>مرا به خاطر بسپار</span>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-round btn-block">ورود</button>
                        <div class="bottom">
                            <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">رمز عبور را فراموش کرده اید؟</a></span>
                            <span>حساب کاربری ندارید؟ <a href="page-register.html">ثبت نام</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </div>
@endsection

















{{--@extends('Layout.main')--}}
{{--@section('content')--}}
{{--    <div--}}
{{--        style="margin: 40px auto;width: 70%;height: 300px;background: #252440;border-radius: 20px;padding: 20px 60px;cursor: pointer">--}}
{{--        <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}
{{--            <div class="form-group row">--}}
{{--                <label for="email" class="col-form-label text-md-right">{{ __('آدرس ایمیل') }}</label>--}}

{{--                <div class="col-md-11">--}}
{{--                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"--}}
{{--                           name="email" value="{{ old('email') }}" required autofocus--}}
{{--                           style="height: 40px;cursor: pointer;">--}}

{{--                    @error('email')--}}
{{--                    <span class="invalid-feedback" role="alert">--}}
{{--                                                 <strong>{{ $message }}</strong>--}}
{{--                                             </span>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="form-group row">--}}
{{--                <label for="password" class=" col-form-label text-md-right">{{ __('رمز عبور') }}</label>--}}

{{--                <div class="col-md-11">--}}
{{--                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"--}}
{{--                           name="password" required autocomplete="current-password"--}}
{{--                           style="height: 40px;cursor: pointer;">--}}

{{--                    @error('password')--}}
{{--                    <span class="invalid-feedback" role="alert">--}}
{{--                                                    <strong>{{ $message }}</strong>--}}
{{--                                                </span>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="form-group row" style="margin: 30px;">--}}
{{--                <div class="col-md-4 ">--}}
{{--                    <div class="form-check">--}}
{{--                        <input class="form-check-input" type="checkbox" name="remember"--}}
{{--                               id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                        <label class="form-check-label" for="remember">--}}
{{--                            {{ __('مرا بخاطر بسپار') }}--}}
{{--                        </label>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-8 ">--}}
{{--                    <button type="submit" class="btn btn-primary">--}}
{{--                        {{ __('Login') }}--}}
{{--                    </button>--}}

{{--                    @if (Route::has('password.request'))--}}
{{--                        <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                            {{ __('فراموشی رمز عبور') }}--}}
{{--                        </a>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}

{{--@endsection--}}


{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
