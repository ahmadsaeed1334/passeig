<section class="hero">
    <div class="hero__shape"><img src="{{ asset('front-end/assets/images/elements/hero-shape.jpg.png')}}" alt="image"></div>
    <div class="hero__element"><img src="{{ asset('front-end/assets/images/elements/hero-building.png')}}" alt="image"></div>
    <div class="hero__car wow bounceIn" data-wow-duration="0.5s" data-wow-delay="1s">
      <img src="{{ asset('front-end/assets/images/elements/car-shadow.png')}}" alt="image" class="car-shadow">
      <img src="{{ asset('front-end/assets/images/elements/car-ray.png')}}" alt="image" class="car-ray">
      <img src="{{ asset('front-end/assets/images/elements/car-light.png')}}" alt="image" class="car-light">
      @foreach($heroBannerData as $banner)
      <img src="{{ asset('storage/' . $banner->file) }}" alt="image" class="hero-car">
      <img src="{{ asset('front-end/assets/images/elements/car-star.png')}}" alt="image"  class="car-star">
    </div>
    <div class="container">
      <div class="row justify-content-center justify-content-lg-start">
        <div class="col-lg-6 col-md-8">
         
         
          <div class="hero__content">
            <div class="hero__subtitle wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">{{ $banner->subtitle }}</div>
            <h2 class="hero__title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">{{ $banner->title }}</h2>
            <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">{{ $banner->description }}</p>
            <div class="hero__btn wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.9s">
              <a href="{{ route('front-end/contests') }}" class="cmn-btn">{{ $banner->button_text_1 }}</a>
              <a class="video-btn" href="{{ $banner->button_link_1 }}" data-rel="lightcase:myCollection"><i class="fas fa-play"></i></a>
            </div>
          </div>
          @endforeach
       
        </div>
        <div class="col-lg-6">
          <div class="hero__thumb">
            <img src="{{asset('storage/' . $banner->file) }}" alt="">
            {{-- <img src="{{ asset('front-end/assets/images/elements/car-main.png')}}" alt=""> --}}
          </div>
        </div>
      </div>
    </div>
  </section>