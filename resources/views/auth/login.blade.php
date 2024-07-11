<x-app-layout>
    <x-slot name="page_title">
        {{ $page_title ?? 'Login' }}
    </x-slot>

    <!--begin::Form-->
    <form class="form w-100" method="POST" action="{{ route('login') }}">
        @csrf
        <!--begin::Heading-->
        <div class="mb-10 text-center">
            <!--begin::Title-->
            <h1 class="text-white mb-3">{{ __('Sign In to') }} <span class="text-{{ primary_color() }}">{{ setting('general_settings.app_name') }}</span>
            </h1>
            <!--end::Title-->
            <!--begin::Link-->
            <div class="text-center">
                @livewire('partial.slider')
                {{-- {{ __('New Here?') }}<a href="{{ route('register') }}" class="link-primary fw-bolder">
                    {{ __('Create an Account') }}</a> --}}
            </div>
            <!--end::Link-->
        </div>
        <!--begin::Heading-->
        <x-validation-errors class="rounded-0 mb-3" />

        @if (session('status'))
        <div class="alert alert-success rounded-0 mb-3" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Label-->
            <label class="form-label fs-6 fw-bolder text-white">{{ __('Email') }}</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input class="form-control form-control-lg form-control-solid {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" value="{{ old('email') }}" required autocomplete="on" autofocus />
            <x-input-error for="email"></x-input-error>

            {{-- <input class="form-control form-control-lg form-control-solid {{ $errors->has('phone') ? 'is-invalid' : '' }}"
            type="email" name="phone" value="{{ old('phone') }}" required autocomplete="on" autofocus />
            <x-input-error for="phone"></x-input-error> --}}
            <!--end::Input-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Wrapper-->
            <div class="d-flex flex-stack mb-2">
                <!--begin::Label-->
                <label class="form-label fw-bolder text-white fs-6 mb-0">{{ __('Password') }}</label>
                <!--end::Label-->
                <!--begin::Link-->
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="link-danger fs-6 fw-bolder">{{ __('Forgot Password?') }}</a>
                @endif
                <!--end::Link-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Input-->
            <input class="form-control form-control-lg form-control-solid {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" required autocomplete="current-password" />
            <x-input-error for="password"></x-input-error>
            <!--end::Input-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-10" style="float: right">
            <!--begin::Wrapper-->
            <div class="form-check form-check-custom form-check-{{ primary_color() }} form-check-solid">
                <input class="form-check-input pointer mr-5" type="checkbox" id="remember_me" name="remember" />
                <label class="text-white fs-6 fw-bolder text-hover-{{ primary_color() }} pointer" style="margin-left: 10px" for="remember_me">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
        <!--begin::Actions-->
        <div class="text-center">
            <!--begin::Submit button-->
            <button type="submit" class="btn btn-lg btn-danger w-100 mb-5">
                <span class="indicator-label">{{ __('Login') }}</span>
                <span class="indicator-progress">{{ __('Please wait...') }}
                    <span class="spinner-border spinner-border-sm ms-2 align-middle"></span></span>
            </button>
            <!--end::Submit button-->
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
</x-app-layout>
