@extends('layouts.login')

@section('content')

<div class="container-login100" style="background-image: url('{{ asset('assets/images/background/bg-3.jpg') }}');">
    <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
        <div class="btn-container text-end mb-4">
            <a href="{{ route('home') }}" class="btn text-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                </svg>
            </a>
        </div>

        @if ($user->email)
        <span class="login100-form-title p-b-53">
            Verify your Email
        </span>
        <p class="text-start">Please enter the verification code we sent to your email</p>
        <p class="text-start"><strong>{{ $user->email }}</strong></p>
        @elseif ($user->phone)
        <span class="login100-form-title p-b-53">
            Verify your Phone
        </span>
        <p class="text-start">Please enter the verification code we sent to your phone</p>
        <p class="text-start"><strong>{{ $user->phone }}</strong></p>
        @endif

        <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('custom.verification.verify') }}">
            @csrf
            <div class="wrap-input100 validate-input mb-3" data-validate="Verification code is required">
                <div class="form-group d-flex justify-content-center">
                    @for ($i = 0; $i < 6; $i++) <input type="text" class="input100 verification-input no-spinners ms-2" name="verification_code[]" maxlength="1" pattern="[0-9]" inputmode="numeric" required>
                        @endfor
                        @error('verification_code') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="d-flex justify-content-between w-full mb-3">
                <a href="{{ route('register') }}" class="txt2 bo1">
                    {{ $user->email ? 'Change Email' : 'Change Phone Number' }}
                </a>
                <a href="{{ route('custom.verification.resend') }}" id="resend-link" class="txt2 bo1" style="display: none;">Resend Code (<span id="countdown">60</span>s)</a>
            </div>

            <div class="container-login100-form-btn">
                <button type="submit" class="login100-form-btn">
                    Submit
                </button>
            </div>
        </form>
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
