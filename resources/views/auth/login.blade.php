@extends('custom_layouts.all_front.app')
@section('title', 'LOgin')

@section('content')
    <section class="sign sec_form">
        <div class="form_container">
            <p class="title">welcom back</p>
            <form class="form" method="POST" action="{{ route('login') }}">
                @csrf

                <input type="name" id="us_em" name="us_em" placeholder="us_em" value="{{ old('us_em') }}">
                @error('us_em')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <input id="password" name="password" type="password" placeholder="password">
                
                <p class="page-link">
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="page-link-label">Forgot Password?</a>
                    @endif
                </p>

                <button class="form-btn"> {{ __('Log in') }}</button>


            </form>

            <p class="sign-up-label">
                Don`t have an account? <a href="{{ route('register') }}" class="sign-up-link">sign up </a>
            </p>

            <div class="buttons-container">
                <div class="apple-login-buuton">
                    <i class="fa-brands fa-apple"></i>
                    <span>Login with Apple</span>
                </div>

                <div class="google-login-button">
                    <i class="fa-brands fa-google"></i>
                    <span>Login with Google</span>
                </div>
            </div>

        </div>
    </section>
@endsection
