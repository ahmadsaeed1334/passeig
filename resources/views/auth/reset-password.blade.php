@extends('layouts.login')
@section('content')
<div class="container">
    <div class="content-login">
        <div class="signup-container" style="margin-top: 200px;">
            <div class="btn-container text-end">
                <a href="{{ route('home') }}" class="btn boder text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </a>
            </div>
            <h1 class="text-start">Reset Password</h1>
            <p class="text-start">Please enter your new password</p>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div class="center">
                    <div class="custom-input-container">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $request->email) }}" required>
                    </div>
                    <div class="custom-input-container">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <div class="custom-input-container">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primarys">Reset Password</button>
            </form>
        </div>
    </div>
</div>
@endsection
