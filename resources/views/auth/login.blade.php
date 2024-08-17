@extends('layouts.login')
@section('content')

<div class="container-login100" style="background-image: url('{{ asset('assets/images/background/bg-3.jpg') }}');">
    <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">

        <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('login.post') }}">
            <span class="login100-form-title p-b-53">
                Sign In With
            </span>

            @csrf
            <a href="#" class="btn-face m-b-20">
                <i class="fa fa-facebook-official"></i>
                Facebook
            </a>

            <a href="#" class="btn-google m-b-20">
                <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" alt="Google logo">
                Google
            </a>

            <div class="p-t-31 p-b-9">
                <span class="txt1">Email or Phone</span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Username is required">
                <input class="input100" type="text" id="email_or_phone" name="email_or_phone" placeholder="Email or Phone" required>
                <span class="focus-input100"></span>
                @error('email_or_phone')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="p-t-13 p-b-9">
                <span class="txt1">
                    Password
                </span>

                <a href="{{ route('password.request') }}" class="txt2 bo1 m-l-5">
                    Forgot?
                </a>

            </div>

            <div class="wrap-input100 validate-input" data-validate="Password is required">
                <input class="input100" type="password" name="password" id="password" placeholder="Password" required>
                <span class="focus-input100"></span>
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="container-login100-form-btn m-t-17">
                <button class="login100-form-btn">
                    Sign In
                </button>
            </div>

            <div class="w-full text-center p-t-55">
                <span class="txt2">
                    Not a member?
                </span>

                <a href="{{ route('register') }}" class="txt2 bo1">
                    Sign up now
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
