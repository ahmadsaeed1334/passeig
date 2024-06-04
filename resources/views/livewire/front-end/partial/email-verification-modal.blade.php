<div  wire:ignore class="modal fade" id="verificationModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <div class="account-form-area">
                    <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                    <div class="form-group">
                        <label for="text">Verification Code</label>
                        <input type="number" wire:model="verification_code" id="verification_code" class="form-control" required>
                        @error('verification_code') <span class="error">{{ $message }}</span> @enderror
                    </div>
                {{-- <input type="text" wire:model="verification_code" class="form-control" placeholder="Verification Code"> --}}
                {{-- @if (session()->has('error'))
                    <div class="alert alert-danger mt-2">{{ session('error') }}</div>
                @endif --}}
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click="verifyCode" class="btn btn-primary">Verify</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>
