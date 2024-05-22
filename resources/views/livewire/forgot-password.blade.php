<div class="account-form-area">
    <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close">
        <i class="las la-times"></i>
    </button>
    <h3 class="title">Forgot Password</h3>
    <div class="account-form-wrapper">
<form wire:submit.prevent="sendResetLink">
    <div class="form-group">
        <label>Email <sup>*</sup></label>
        <input type="email" wire:model="email" id="login_name" class="form-control"
            placeholder="Enter your Email">
            @error('email') <span class="error">{{ $message }}</span> @enderror

    </div>
    <div class="form-group text-center mt-4">
        <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
    </div>
</form>
    </div>
    </div>
