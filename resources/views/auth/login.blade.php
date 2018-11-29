@extends('layouts.ahuse')

@section('title', 'Ahuse - Sign In')

@section('body-content')
<div class="container-fluid normal login-form-container">
    <div class="row noMarginRow">
        <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-4 col-lg-offset-4">
            <div class="login-form">
                <h1 class="text-center">{{ __('Sign In') }}</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row noMarginRow input-container">
                        <div class="col-sm-12">
                            @if ($errors->has('email'))
                                <div class="alert alert-danger">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </div>
                            @else
                                <div class="alert alert-normal">Sign in with your credentials below</div>
                            @endif
                        </div>
                    </div>
                    <div class="row noMarginRow input-container">
                        <div class="col-sm-12">
                            <input id="email" type="email" class="form-control input-lg" name="email" value="{{ old('email') }}" placeholder="{{ 'example@example.com' }}" required autofocus>
                        </div>
                    </div>
                    <div class="row noMarginRow input-container">
                        <div class="col-sm-12">
                            <input id="password" type="password" class="form-control input-lg" name="password" placeholder="Password" required>
                        </div>
                    </div>

                    <div class="row noMarginRow input-container add-more-divide">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-lg btn-primary btn-block">
                                {{ __('Sign In') }}
                            </button>
                        </div>
                    </div>
                    <div class="row noMarginRow input-container">
                        <div class="col-md-12">
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            <div class="remember-box pull-right">
                                <input class="inline check" type="checkbox" name="remember" id="_remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="_remember" class="inline">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-xs-12 register-info-container">
            <div class="register-info row noMarginRow">
                <div class="col-sm-12 col-md-8 col-md-offset-1 col-lg-6 col-lg-offset-2">
                    <div class="heading text-center-xs">Don't have an account?</div>
                </div>
                <div class="col-sm-12 col-md-8 col-md-offset-1 col-lg-6 col-lg-offset-2 hidden-xs">
                    <div class="content">
                        You can register for free and you can use many more features like "search history", "saved searches", "favourite properties", "property notifications" and many more.
                    </div>
                </div>
                <div class="col-sm-12 col-md-2 register-btn-container">
                    <br/>
                    <a href="{{ route('register') }}" class="btn btn-success btn-block btn-lg register-btn">Register Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
