<!-- Sign Up modal -->
<div class="modal fade" id="signupModal" tabindex="1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-body">
          <div class="account-form-area">
            <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="las la-times"></i></button>
            <h3 class="title">Open Free Account</h3>
            <div class="account-form-wrapper">
              <form wire:submit.prevent="signUp">             
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" wire:model="name" id="name" class="form-control" required>
                  @error('name') <span class="error">{{ $message }}</span> @enderror
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" wire:model="email" id="email" class="form-control" required>
                @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" wire:model="password" id="password" class="form-control" required>
              @error('password') <span class="error">{{ $message }}</span> @enderror
          </div>
          <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" wire:model="password_confirmation" id="password_confirmation" class="form-control" required>
        </div>
                <div class="d-flex flex-wrap mt-2">
                  <div class="custom-checkbox">
                    <input type="checkbox" name="id-2" id="id-2" checked>
                    <label for="id-2">I agree to the</label>
                    <span class="checkbox"></span>
                  </div>
                  <a href="#0" class="link ml-1">Terms, Privacy Policy and Fees</a>
                </div>
                <div class="form-group text-center mt-5">
                  <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>
              </form>
              <p class="text-center mt-4"> Already have an account? <a href="#0" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></p>
              <div class="divider">
                <span>or</span>
              </div>
              <ul class="social-link-list">
                <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>