<div class="modal-body">
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
</div>
