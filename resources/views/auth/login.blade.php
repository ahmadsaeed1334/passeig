@extends('layouts.login')
@section('content')
<div class="container">
    <div class="content-login">
        <div class="signup-container" style="margin-top: 200px;">
            <div class="btn-container text-end">
                <a href="{{ route('home-page') }}" class="btn boder text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                    </svg>
                </a>
            </div>
            <h1 class="text-start">Sign in</h1>
            <p class="text-start">Please enter the details to log in to your account</p>
            <form method="POST" action="{{ route('login.post') }}">
                @csrf
                <div class="center">
                    <div class="custom-input-container">
                        <label for="email_or_phone">Email or Phone</label>
                        <input type="text" id="email_or_phone" name="email_or_phone" class="form-control" placeholder="Email or Phone" required>
                        @error('email_or_phone') <span class="text-danger">{{ $message }}</span> @enderror

                    </div>
                    <div class="password-container">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <p class="mb-3"><a href="{{ route('password.request') }}" class="text-dark">Forgot Password?</a></p>
                </div>
                <button type="submit" class="btn btn-primarys">Sign in</button>
                <div class="divider mt-3">or</div>
                <div class="d-flex justify-content-center">
                    <a href="#" class="google-btn text-dark">Sign in with Google &nbsp;&nbsp;
                        <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" alt="Google logo" width="15px">
                    </a>
                </div>
                <p class="mt-3">Don’t have an account? <a href="{{ route('register') }}">Sign up</a></p>
            </form>
        </div>
    </div>
</div>
@endsection
