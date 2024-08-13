@extends('layouts.login')

@section('content')
<div class="container">
    <div class="content-login">
        <div class="signup-container" style="margin-top: 200px;">
            <div class="btn-container text-end">
                <a href="{{ route('home') }}" class="btn boder text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                    </svg>
                </a>
            </div>
            @if ($user->email)
            <h1 class="text-start">Verify your Email</h1>
            <p class="text-start">Please enter the verification code we sent to your email</p>
            <p class="text-start"><strong>{{ $user->email }}</strong></p>
            @elseif ($user->phone)
            <h1 class="text-start">Verify your Phone</h1>
            <p class="text-start">Please enter the verification code we sent to your phone</p>
            <p class="text-start"><strong>{{ $user->phone }}</strong></p>
            @endif
            <form method="POST" action="{{ route('custom.verification.verify') }}">
                @csrf
                <div class="center">
                    <div class="form-group d-flex justify-content-center">
                        @for ($i = 0; $i < 6; $i++)
                            <input type="text" class="form-control verification-input no-spinners ms-2" name="verification_code[]" maxlength="1" pattern="[0-9]" inputmode="numeric" required>
                        @endfor
                        @error('verification_code') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="mb-3 text-dark"><a href="{{ route('register') }}" class="text-dark">{{ $user->email ? 'Change Email' : 'Change Phone Number' }}</a></p>
                    <p class="mb-3"><a href="{{ route('custom.verification.resend') }}" id="resend-link" class="text-dark">Resend Code (<span id="countdown">60</span>s)</a></p>
                </div>
                <button type="submit" class="btn btn-primarys">Submit</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var countdownElement = document.getElementById('countdown');
        var resendLink = document.getElementById('resend-link');
        var countdown = 60;
        var interval = setInterval(function() {
            countdown--;
            countdownElement.textContent = countdown;
            if (countdown <= 0) {
                clearInterval(interval);
                resendLink.style.display = 'block';
            }
        }, 1000);

        var inputs = document.querySelectorAll('.verification-input');
        inputs.forEach((input, index) => {
            input.addEventListener('input', (e) => {
                const value = e.target.value;
                if (value.length === 1 && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
            });

            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && index > 0 && !e.target.value) {
                    inputs[index - 1].focus();
                }
            });
        });
    });
</script>
@endsection
