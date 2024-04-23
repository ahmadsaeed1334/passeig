<section class="overview-section pt-120">
    <div class="map-el"><img src="{{ asset('front-end/assets/images/elements/map.png')}}" alt="image"></div>
    <div class="obj-1"><img src="{{ asset('front-end/assets/images/elements/overview-obj-1.png')}}" alt="image"></div>
    <div class="obj-2"><img src="{{ asset('front-end/assets/images/elements/overview-obj-2.png')}}" alt="image"></div>
    <div class="obj-3"><img src="{{ asset('front-end/assets/images/elements/overview-obj-3.png')}}" alt="image"></div>
    <div class="obj-4"><img src="{{ asset('front-end/assets/images/elements/overview-obj-4.png')}}" alt="image"></div>
@forelse($overviews as $overview)
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-10 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
          <div class="section-header text-center">
            <span class="section-sub-title">{{$overview->subtitle}}</span>
            <h2 class="section-title">{{$overview->title}}</h2>
            <p>{{$overview->description}}</p>
          </div>
        </div>
      </div><!-- row end -->
    </div><!-- container end -->
    <div class="map-pointer">
      <div class="pointer num-1"></div>
      <div class="pointer num-2"></div>
      <div class="pointer num-3"></div>
      <div class="pointer num-4"></div>
      <div class="pointer num-5"></div>
      <div class="pointer num-6"></div>
      <div class="pointer num-7"></div>
      <div class="pointer num-8"></div>
      <div class="pointer num-9"></div>
    </div>

    <div class="container">
      <div class="row justify-content-center mb-none-30">
        <div class="col-lg-4 col-sm-6 mb-30 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.3s">
          <div class="overview-card hover--effect-1">
            <div class="overview-card__icon">
              <img src="{{ asset('storage/' . $overview->card_icon_1) }}" alt="">
            </div>
            <div class="overview-card__content">
              <span class="number">{{$overview->card_number_1}}+</span>
              <p>{{$overview->card_description_1}}</p>
            </div>
          </div><!-- overview-card end -->
        </div>
        <div class="col-lg-4 col-sm-6 mb-30 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
          <div class="overview-card hover--effect-1">
            <div class="overview-card__icon">
              <img src="{{ asset('storage/' . $overview->card_icon_2) }}" alt="">
            </div>
            <div class="overview-card__content">
              <span class="number">{{$overview->card_number_2}}</span>
              <p>{{$overview->card_description_2}}</p>
            </div>
          </div><!-- overview-card end -->
        </div>
        <div class="col-lg-4 col-sm-6 mb-30 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.7s">
          <div class="overview-card hover--effect-1">
            <div class="overview-card__icon">
              <img src="{{ asset('storage/' . $overview->card_icon_3) }}" alt="">
            </div>
            <div class="overview-card__content">
              <span class="number">{{$overview->card_number_3}}%</span>
              <p>{{$overview->card_description_3}}</p>
            </div>
          </div><!-- overview-card end -->
        </div>
      </div>
    </div><!-- container end -->
    @endforeach
  </section>