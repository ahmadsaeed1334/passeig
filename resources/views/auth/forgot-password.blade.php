@extends('layouts.login')

@section('content')

<div class="container-login100" style="background-image: url('{{ asset('assets/images/background/bg-3.jpg') }}');">
    <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
        <div class="btn-container text-end mb-4">
            <a href="{{ route('home') }}" class="btn text-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </a>
        </div>

        <span class="login100-form-title p-b-53">
            Forgot Password
        </span>

        <p class="text-start mb-4">Please enter your email to reset your password</p>

        @if (session('status'))
        <div class="alert alert-success rounded-0 mb-3" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="wrap-input100 validate-input mb-3" data-validate="Valid email is required">
                <input class="input100" type="email" id="email" name="email" placeholder="Email" required>
                <span class="focus-input100"></span>
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="container-login100-form-btn m-t-17">
                <button type="submit" class="login100-form-btn">
                    Send Password Reset Link
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
