<div> 
    <x-slot name="page_title">
		{{ $page_title ?? 'Checkout' }}
	</x-slot>
    <!-- inner-hero-section start -->
    <div class="inner-hero-section">
        <div class="bg-shape"><img src="{{ asset('front-end/assets/images/elements/inner-hero-shape.png')}}" alt="image"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <ul class="page-list">
                <li><a href="{{ route('front-end/navbar') }}">Home</a></li>
                <li><a href="#0">Lottery</a></li>
                <li><a href="#0">Contest No: B2T</a></li>
                <li><a href="#0">Pick your Lottery Number</a></li>
                <li class="active"><a href="#0">My Cart</a></li>
                <li class="active">Checkout</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- inner-hero-section end -->
  
      <!-- checkout section start -->
      <section class="pb-120 mt-minus-300">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="checkout-area">
                <div class="row">
                  <div class="col-lg-7">
                    <div class="checkout-form-area">
                      <div class="top">
                        <div class="left">
                          <h3 class="mb-2">Already a Rifa Member?</h3>
                          <p>Sign in to buy lottery more easier!</p>
                        </div>
                        <div class="right">
                          <a href="#0">
                            <i class="las la-user"></i>
                            <span>Sign in</span>
                          </a>
                        </div>
                      </div><!-- top end -->
                      <div class="personal-details mt-30">
                        <h3 class="title">Share your Contact  Details </h3>
                        <form class="personal-details-form">
                          <div class="form-row">
                            <div class="form-group col-lg-6">
                              <input type="text" placeholder="Full Name">
                            </div>
                            <div class="form-group col-lg-6">
                              <input type="email" placeholder="Enter your Mail">
                            </div>
                            <div class="form-group col-lg-6">
                              <input type="text" placeholder="Enter your Phone Number">
                            </div>
                            <div class="form-group col-lg-6">
                              <button type="submit" class="cmn-btn">Continue</button>
                            </div>
                          </div>
                        </form>
                      </div><!-- personal-details end -->
                      <div class="payment-details mt-30">
                        <h3 class="title">Payment Option</h3>
                        <form class="payment-form">
                          <div class="payment-methods">
                            <button type="button" class="checked">
                              <i class="las la-credit-card"></i>
                              <span>Credit Card</span>
                            </button>
                            <button type="button">
                              <i class="las la-credit-card"></i>
                              <span>Debit Card</span>
                            </button>
                            <button type="button">
                              <i class="lab la-paypal"></i>
                              <span>Credit Card</span>
                            </button>
                          </div>
                          <h5 class="payment-form__title">Enter Your Card Details </h5>
                          <div class="form-row">
                            <div class="form-group col-lg-12">
                              <label>Card Details</label>
                              <input type="text">
                            </div>
                            <div class="form-group col-lg-12">
                              <label>Name on the Card</label>
                              <input type="text">
                            </div>
                            <div class="form-group col-lg-6">
                              <label>Expiration</label>
                              <input type="text" placeholder="MM/YY">
                            </div>
                            <div class="form-group col-lg-6">
                              <label>CVV</label>
                              <input type="text" placeholder="CVV">
                            </div>
                            <div class="form-group col-lg-12">
                              <button type="submit" class="cmn-btn">Make payment</button>
                            </div>
                          </div>
                        </form>
                        <p class="info-text">By Clicking "Make Payment" you agree to the <a href="#0">terms and conditions</a></p>
                      </div>
                    </div><!-- checkout-form-area end -->
                  </div>
                  <div class="col-lg-5 mt-lg-0 mt-4">
                    <div class="checkout-wrapper">
                      <div class="checkout-wrapper__header">
                        <h3>Checkout</h3>
                      </div>
                      <div class="checkout-wrapper__body">
                        <ul class="price">
                          <li>
                            <div class="left">
                              <h4 class="caption">Ticket Price</h4>
                              <span>(8 tickets X $ 4.99)</span>
                            </div>
                            <div class="right">
                              <span class="price">$39.92</span>
                            </div>
                          </li>
                          <li>
                            <div class="left">
                              <h4 class="caption">Total</h4>
                            </div>
                            <div class="right">
                              <span class="price">$39.92</span>
                            </div>
                          </li>
                        </ul>
                      </div>s
                    </div><!-- checkout-wrapper end -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- checkout section end -->
</div>
