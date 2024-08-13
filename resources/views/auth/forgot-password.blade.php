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
            <h1 class="text-start">Forgot Password</h1>
            <p class="text-start">Please enter your email to reset your password</p>
             @if (session('status'))
                        <div class="alert alert-success rounded-0 mb-3" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="center">
                    <div class="custom-input-container">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primarys">Send Password Reset Link</button>
                
            </form>
        </div>
    </div>
</div>
@endsection
