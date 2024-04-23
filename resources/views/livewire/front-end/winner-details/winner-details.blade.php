<div>
  <x-slot name="page_title">
		{{ $page_title ?? 'Winner' }}
	</x-slot>
   <!-- inner-hero-section start -->
   <section class="inner-hero-section style--four">
    <div class="bg-shape"><img src="{{ asset('front-end/assets/images/elements/inner-hero-shape-2.png')}}" alt="image"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="inner-page-content">
            <h2 class="title">Never miss a draw!</h2>
            <p>Easy way to buy tickets and win your dream car</p>
            <p>many others anytime, anywhere</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-hero-section end -->

  <!-- winner details section start -->
  <section class="mt-minus-150">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="winner-details-wrapper bg_img" data-background="{{ asset('front-end/assets/images/elements/winner-details.jpg')}}">
            <div class="left"><img src="{{ asset('front-end/assets/images/contest/1.png')}}" alt="image"></div>
            <div class="body">
              <p class="contest-number">Contest No: B2T</p>
              <p class="contest-date"><span>Draw took place on :</span> Saturday May 20, 2023</p>
              <div class="line"></div>
              <h4 class="title">Latest  bigest Winning Numbers:</h4>
              <ul class="numbers">
                <li>11</li>
                <li>88</li>
                <li>23</li>
                <li>9</li>
                <li>19</li>
                <li>26</li>
                <li>87</li>
              </ul>
              <div class="btn-grp">
                <a href="#0" class="btn-border">Alerts</a>
                <a href="#0" class="btn-border">How to Claim</a>
              </div>
            </div>
            <div class="right"><img src="{{ asset('front-end/assets/images/contest/7.png')}}" alt="image"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
   <!-- latest winner section start  -->
   @include('livewire.front-end.partial.latest-winner')
    <!-- latest winner section end  -->
    <!-- testimonial section start -->
    @include('livewire.front-end.partial.testimonial-section')
    <!-- testimonial section end -->
    <!-- support section start  -->
    @include('livewire.front-end.partial.support-section')
    <!-- support section end  -->
  
  
</div>
