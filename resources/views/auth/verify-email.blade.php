{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button type="submit">
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <div>
                <a
                    href="{{ route('profile.show') }}"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    {{ __('Edit Profile') }}</a>

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ml-2">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </x-authentication-card>
</x-guest-layout> --}}

<!-- resources/views/auth/verify-email.blade.php -->
<x-app-layout>
    <x-slot name="page_title">
        {{ $page_title ?? 'Email Verification' }}
    </x-slot>
  <form class="form w-100"  method="POST" action="{{ route('verification.send') }}">
    @csrf
    <x-validation-errors class="rounded-0 mb-3" />

    @if (session('status'))
        <div class="alert alert-success rounded-0 mb-3" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="text-center">
        <button type="submit" class="btn btn-lg btn-danger w-100 mb-5">
            <span class="indicator-label">Resend Verification Email </span>
            <span class="indicator-progress">{{ __('Please wait...') }}
                <span class="spinner-border spinner-border-sm ms-2 align-middle"></span></span>
        </button>
    </div>
</form>
</x-app-layout>