<section class="pb-120">
  @foreach($supports as $support)
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-header text-center">
            <span class="section-sub-title">{{$support->subtitle}}</span>
            <h2 class="section-title">{{$support->title}}</h2>
            <p>{{$support->description}}</p>
          </div>
        </div>
      </div>
      <div class="row mb-none-30">
        <div class="col-lg-6 mb-30 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.3s">
          <div class="support-card">
            <div class="support-card__thumb">
              <img src="{{ asset('storage/' . $support->card_icon_1)}}" alt="image">
            </div>
            <div class="support-card__content">
              <h3 class="support-card__title">{{$support->card_title_1}}</h3>
              <p>{{$support->card_description_1}}</p>
              <div class="btn-grp justify-content-xl-start mt-3">
                <a href="tel:{{$support->card_number_1}}" class="btn-border btn-sm text-capitalize">Call us <i class="fas fa-phone-alt"></i></a>
                <a href="{{$support->card_email_1}}" class="cmn-btn btn-sm text-capitalize">Email us <i class="far fa-envelope"></i></a>
              </div>
            </div>
          </div><!-- support-card end -->
        </div>
        <div class="col-lg-6 mb-30 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
          <div class="support-card">
            <div class="support-card__thumb">
              <img src="{{ asset('front-end/assets/images/icon/support/2.png')}}" alt="image">
            </div>
            <div class="support-card__content">
              <h3 class="support-card__title">{{$support->card_title_2}}</h3>
              <p>{{$support->card_description_2}} </p>
              <div class="btn-grp justify-content-xl-start mt-3">
                <a href="{{ route('front-end/faq') }}" class="btn-border btn-sm text-capitalize">FAQs & Help</a>
              </div>
            </div>
          </div><!-- support-card end -->
        </div>
      </div>
    </div>
    @endforeach
  </section>