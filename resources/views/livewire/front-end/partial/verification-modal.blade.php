<div class="modal fade" id="verificationModal" tabindex="-1" role="dialog" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Email Verification</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Please enter the verification code sent to your email.</p>
                <form wire:submit.prevent="verifyCode">
                    <div class="form-group">
                        <label for="verification_code">Verification Code</label>
                        <input type="text" wire:model="verification_code" id="verification_code" class="form-control" required>
                        @error('verification_code') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group text-center mt-3">
                        <button type="submit" class="btn btn-primary">Verify</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
