<footer class="footer-section">
    <div class="bg-shape--top"><img src="{{ asset('front-end/assets/images/elements/round-shape-2.png')}}" alt="image"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">
          <div class="subscribe-area">
            <div class="left">
              <span class="subtitle">Subscribe to Sorko</span>
              <h3 class="title">To Get Exclusive Benefits</h3>
            </div>
            <div class="right">
              <form class="subscribe-form">
                <input type="email" name="subscribe_email" id="subscribe_email" placeholder="Enter Your Email">
                <button type="submit">Subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container pt-120">
      <div class="row pb-5 align-items-center">
        <div class="col-lg-4">
          <ul class="app-btn">
            <li><a href="#0"><img src="{{ asset('front-end/assets/images/icon/store-btn/1.png')}}" alt="image"></a></li>
            <li><a href="#0"><img src="{{ asset('front-end/assets/images/icon/store-btn/2.png')}}" alt="image"></a></li>
          </ul>
        </div>
        <div class="col-lg-8">
          <ul class="short-links justify-content-lg-end justify-content-center">
            <li><a href="{{ route('front-end/about-section') }}">Abount</a></li>
            <li><a href="{{ route('front-end/faq') }}">FAQs</a></li>
            <li><a href="{{ route('front-end/contact') }}">Contact</a></li>
            <li><a href="{{ route('front-end/pages/terms-condition') }}">Terms & Condition</a></li>
            <li><a href="#0">Privacy</a></li>
          </ul>
        </div>
      </div>
      <hr>
      <div class="row py-5 align-items-center">
        <div class="col-lg-6">
          @foreach($footerTexts as $footerText)
          <p class="copy-right-text text-lg-start text-center mb-lg-0 mb-3">{{ $footerText->text }} <a href="{{ $footerText->link_url }}">{{$footerText->link_text }}</a></p>
          @endforeach
        </div>
        <div class="col-lg-6">
          <ul class="social-links justify-content-lg-end justify-content-center">
            @foreach($footerIcons as $footerIcon)
            <li><a href="{{ $footerIcon->url }}" target="_blank"><i class="{{ $footerIcon->icon_class }}"></i></a></li>
            {{-- <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#0"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="#0"><i class="fab fa-instagram"></i></a></li> --}}
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </footer>