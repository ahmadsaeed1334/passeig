{{-- <div class="modal-body">
    <div class="account-form-area">
        <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close">
            <i class="las la-times"></i>
        </button>
        <h3 class="title">Forgot Password</h3>
        <div class="account-form-wrapper">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                    <label>Email <sup>*</sup></label>
                    <input type="email" name="email" id="forgot_password_email" class="form-control" placeholder="Enter your Email">
                </div>
                <div class="form-group text-center mt-5">
                    <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
                </div>
            </form>
            <div class="divider">
                <span>or</span>
            </div>
            <!-- Social Links -->
        </div>
    </div>
</div> --}}


<x-app-layout>

    <x-slot name="page_title">
		{{ $page_title ?? 'Forgot Password' }}
	</x-slot>

  <!-- contact section end -->

  <form class="form w-100"  method="POST" action="{{ route('password.email') }}">
    @csrf
    {{-- <input type="hidden" name="token" value="{{ $request->route('token') }}"> --}}

    <!--begin::Heading-->
    <div class="mb-10 text-center">
        <!--begin::Title-->
        <h1 class="text-dark mb-3">{{ __('Forgot Password') }} <span>        </h1>
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
   <div class="form-group">
    {{-- <label>Email <sup>*</sup></label> --}}
    <input type="email" name="email" id="forgot_password_email" class="form-control" placeholder="Enter your Email">
</div>

        {{-- <input class="form-control form-control-lg form-control-solid {{ $errors->has('phone') ? 'is-invalid' : '' }}"
            type="email" name="phone" value="{{ old('phone') }}" required autocomplete="on" autofocus />
        <x-input-error for="phone"></x-input-error> --}}
        <!--end::Input-->
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    

  
    <!--begin::Actions-->
    <div class="text-center">
        <!--begin::Submit button-->
        <button type="submit" class="btn btn-lg btn-danger w-100 mb-5">
            <span class="indicator-label"> {{ __('Send Password Reset Link') }}</span>
            <span class="indicator-progress">{{ __('Please wait...') }}
                <span class="spinner-border spinner-border-sm ms-2 align-middle"></span></span>
        </button>
        <!--end::Submit button-->
    </div>
    <!--end::Actions-->
</form>
<!--end::Form-->
</x-app-layout>