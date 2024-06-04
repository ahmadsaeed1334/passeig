{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="card-body">

            <x-validation-errors class="mb-3" />

            <form method="POST" action="/reset-password">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="mb-3">
                    <x-label value="{{ __('Email') }}" />

                    <x-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                                 :value="old('email', $request->email)" required autofocus />
                    <x-input-error for="email"></x-input-error>
                </div>

                <div class="mb-3">
                    <x-label value="{{ __('Password') }}" />

                    <x-input class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                                 name="password" required autocomplete="new-password" />
                    <x-input-error for="password"></x-input-error>
                </div>

                <div class="mb-3">
                    <x-label value="{{ __('Confirm Password') }}" />

                    <x-input class="{{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" type="password"
                                 name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error for="password_confirmation"></x-input-error>
                </div>

                <div class="mb-0">
                    <div class="d-flex justify-content-end">
                        <x-button>
                            {{ __('Reset Password') }}
                        </x-button>
                    </div>
                </div>
            </form>
        </div>
    </x-authentication-card>
</x-guest-layout> --}}
<x-app-layout>

    <x-slot name="page_title">
		{{ $page_title ?? 'Reset Password' }}
	</x-slot>

  <!-- contact section end -->

  <form class="form w-100" method="POST" action="{{ route('login') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $request->route('token') }}">

    <!--begin::Heading-->
    <div class="mb-10 text-center">
        <!--begin::Title-->
        <h1 class="text-dark mb-3">{{ __('Reset Password') }} <span>        </h1>
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
        <label class="form-label fs-6 fw-bolder text-dark">{{ __('Email') }}</label>
        <!--end::Label-->
        <!--begin::Input-->
        {{-- <input class="form-control form-control-lg form-control-solid {{ $errors->has('email') ? 'is-invalid' : '' }}"
   type="email" name="email" value="{{ old('email') }}" required autocomplete="on" autofocus /> --}}
   <x-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" id="name" type="email" name="email"
    :value="old('email', $request->email)" required autofocus />
<x-input-error for="email"></x-input-error>

        {{-- <input class="form-control form-control-lg form-control-solid {{ $errors->has('phone') ? 'is-invalid' : '' }}"
            type="email" name="phone" value="{{ old('phone') }}" required autocomplete="on" autofocus />
        <x-input-error for="phone"></x-input-error> --}}
        <!--end::Input-->
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    
    <div class="fv-row mb-10">
        <!--begin::Label-->
        <label class="form-label fs-6 fw-bolder text-dark">{{ __('Password') }}</label>
        <!--end::Label-->
        <!--begin::Input-->
        {{-- <input class="form-control form-control-lg form-control-solid {{ $errors->has('email') ? 'is-invalid' : '' }}"
   type="email" name="email" value="{{ old('email') }}" required autocomplete="on" autofocus /> --}}
   <x-input class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
    name="password" required autocomplete="new-password" />
<x-input-error for="password"></x-input-error>

        {{-- <input class="form-control form-control-lg form-control-solid {{ $errors->has('phone') ? 'is-invalid' : '' }}"
            type="email" name="phone" value="{{ old('phone') }}" required autocomplete="on" autofocus />
        <x-input-error for="phone"></x-input-error> --}}
        <!--end::Input-->
    </div>
    <div class="fv-row mb-10">
        <!--begin::Label-->
        <label class="form-label fs-6 fw-bolder text-dark">{{ __('Confirmation Password') }}</label>
        <!--end::Label-->
        <!--begin::Input-->
        {{-- <input class="form-control form-control-lg form-control-solid {{ $errors->has('email') ? 'is-invalid' : '' }}"
   type="email" name="email" value="{{ old('email') }}" required autocomplete="on" autofocus /> --}}
   <x-input class="{{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" type="password"
    name="password_confirmation" required autocomplete="new-password" />
<x-input-error for="password_confirmation"></x-input-error>

        {{-- <input class="form-control form-control-lg form-control-solid {{ $errors->has('phone') ? 'is-invalid' : '' }}"
            type="email" name="phone" value="{{ old('phone') }}" required autocomplete="on" autofocus />
        <x-input-error for="phone"></x-input-error> --}}
        <!--end::Input-->
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="fv-row mb-10" style="float: right">
        <!--begin::Wrapper-->
        <div class="form-check form-check-custom form-check-{{ primary_color() }} form-check-solid">
            <input class="form-check-input pointer mr-5" type="checkbox" id="remember_me" name="remember" />
            <label class="text-dark fs-6 fw-bolder text-hover-{{ primary_color() }} pointer" style="margin-left: 10px"
                for="remember_me">
                {{ __('Remember Me') }}
            </label>
        </div>
    </div>
    <!--begin::Actions-->
    <div class="text-center">
        <!--begin::Submit button-->
        <button type="submit" class="btn btn-lg btn-danger w-100 mb-5">
            <span class="indicator-label"> {{ __('Reset Password') }}</span>
            <span class="indicator-progress">{{ __('Please wait...') }}
                <span class="spinner-border spinner-border-sm ms-2 align-middle"></span></span>
        </button>
        <!--end::Submit button-->
    </div>
    <!--end::Actions-->
</form>
<!--end::Form-->
</x-app-layout>


    

