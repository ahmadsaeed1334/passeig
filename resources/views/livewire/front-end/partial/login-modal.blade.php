<div class="modal fade" id="loginModal" tabindex="1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
          <div class="modal-body">
              <div class="account-form-area">
                  <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close">
                      <i class="las la-times"></i>
                  </button>
                  <h3 class="title">Welcome Back</h3>
                  <div class="account-form-wrapper">
                      <form wire:submit.prevent="login">
                          <div class="form-group">
                              <label>Email <sup>*</sup></label>
                              <input type="email" wire:model="email" id="login_name" class="form-control"
                                  placeholder="Enter your Email">
                          </div>
                          <div class="form-group">
                              <label>Password <sup>*</sup></label>
                              <input type="password" wire:model="password" id="login_pass" class="form-control"
                                  placeholder="Password">
                          </div>
                          <div class="d-flex flex-wrap justify-content-between mt-2">
                              <div class="custom-checkbox">
                                  <input type="checkbox" name="remember_me" id="remember_me" wire:model="remember_me">
                                  <label for="remember_me">Remember Me</label>
                              </div>
                              <a href="#0" class="link">Forgot Password?</a>
                          </div>
                          <div class="form-group text-center mt-5">
                              <button type="submit" class="btn btn-primary">Log In</button>
                          </div>
                      </form>
                      <p class="text-center mt-4">Don't have an account? <a href="#0" data-bs-toggle="modal"
                              data-bs-target="#signupModal"> Sign Up Now</a></p>
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
