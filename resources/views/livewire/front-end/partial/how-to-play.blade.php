<section class="position-relative z-index-two pt-120 pb-120 overflow-hidden">
    <div class="play-elements wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.7s">
      <img src="{{ asset('front-end/assets/images/elements/play-el.png')}}" alt="image">
    </div>
    @foreach($howToPlayData as $howToPlay)
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-sm-start text-center wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
          <div class="section-header">
            <span class="section-sub-title">{{$howToPlay->subtitle}}</span>
            <h2 class="section-title">{{$howToPlay->title}}</h2>
            <p>{{$howToPlay->description}} </p>
          </div>
        </div>
      </div>
      <div class="row mb-none-30 justify-content-xl-start justify-content-center">
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
          <div class="play-card bg_img" data-background="{{ asset('front-end/assets/images/elements/card-bg-1.jpg')}}">
            <div class="play-card__icon">
              <img src="{{ asset('storage/' . $howToPlay->play_card_icon_1) }}" alt="image-icon">
              <span class="play-card__number">01</span>
            </div>
            <div class="play-card__content">
              <h3 class="play-card__title">{{ $howToPlay->play_card_title_1 }}</h3>
              <p>{{ $howToPlay->play_card_description_1 }}</p>
            </div>
          </div><!-- play-card end -->
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
          <div class="play-card bg_img" data-background="{{ asset('front-end/assets/images/elements/card-bg-2.jpg')}}">
            <div class="play-card__icon">
              <img src="{{ asset('storage/' . $howToPlay->play_card_icon_2) }}" alt="image-icon">
              <span class="play-card__number">02</span>
            </div>
            <div class="play-card__content">
              <h3 class="play-card__title">{{ $howToPlay->play_card_title_2 }}</h3>
              <p>{{ $howToPlay->play_card_description_2 }}</p>
            </div>
          </div><!-- play-card end -->
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
          <div class="play-card bg_img" data-background="{{ asset('front-end/assets/images/elements/card-bg-3.jpg')}}">
            <div class="play-card__icon">
              <img src="{{ asset('storage/' . $howToPlay->play_card_icon_3) }}" alt="image-icon">
              <span class="play-card__number">03</span>
            </div>
            <div class="play-card__content">
              <h3 class="play-card__title">{{ $howToPlay->play_card_title_3 }}</h3>
              <p>{{ $howToPlay->play_card_description_3 }}</p>
            </div>
          </div><!-- play-card end -->
        </div>
      </div>
    </div>
    @endforeach
  </section>