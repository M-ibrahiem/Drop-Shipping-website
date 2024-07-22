@extends('custom_layouts.all_front.app')

@section('content')
    <section class="sign sec_form">
        <div class="form_container">
            <p class="title">Welcome Back</p>
            <form class="form" method="POST" action="{{ route('register') }}">
                @csrf

                <input id="name" name="name" type="text" placeholder="Name" value="{{ old('name') }}">
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror

                <input id="email" name="email" type="email" placeholder="Email" value="{{ old('email') }}">
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror

                <input id="password" name="password" type="password" placeholder="Password" value="{{ old('password') }}">
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror

                <input id="password_confirmation" name="password_confirmation" type="password"
                    placeholder="Confirm Password" value="{{ old('password_confirmation') }}">
                @error('password_confirmation')
                    <span class="error">{{ $message }}</span>
                @enderror

                <button class="form-btn">Sign Up</button>
            </form>

            <p class="sign-up-label">
                Have an account? <a href="{{ route('login') }}" class="sign-up-link">Login</a>
            </p>

            <div class="buttons-container">
                <div class="apple-login-buuton">
                    <i class="fa-brands fa-apple"></i>
                    <span>Sign Up with Apple</span>
                </div>

                <div class="google-login-button">
                    <i class="fa-brands fa-google"></i>
                    <span>Sign Up with Google</span>
                </div>
            </div>
        </div>
    </section>
@endsection
