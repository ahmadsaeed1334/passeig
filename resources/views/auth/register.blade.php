@extends('layouts.login')

@section('content')
<div class="container">

    <div class="content-login body-width-signup">
        <div class="signup-container">
            <div class="btn-container">
                <a href="{{ route('login') }}" class="btn btn-boder boder text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                    </svg>
                </a>
            </div>
            <h1>Sign up</h1>
            <p>Please enter the details to create your account</p>
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="profile-container">
                    <div class="profile-circle" id="profileCircle"></div>
                    <label for="fileUpload" class="upload-text">Upload Profile Photo</label>
                    <input type="file" id="fileUpload" name="profile_photo" accept="image/*">
                </div>
                <div class="custom-input-container">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <input type="text" name="name" class="form-control form-input" placeholder="Full Name" required>
                <input type="tel" name="phone" class="form-control form-input" placeholder="Phone Number" required>
                <div class="password-container">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <i class="bi bi-eye-slash" id="togglePassword"></i>
                </div>
                <div class="password-container">
                    <input type="password" name="password_confirmation" class="form-control" id="confirmPassword" placeholder="Confirm Password" required>
                    <i class="bi bi-eye-slash" id="toggleConfirmPassword"></i>
                </div>
                <div class="form-check mb-3 text-start">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primarys">Sign up</button>
                <p class="mt-3">Already have an account? <a href="{{ route('login') }}">Sign in</a></p>
            </form>
        </div>
    </div>
</div>
@endsection
