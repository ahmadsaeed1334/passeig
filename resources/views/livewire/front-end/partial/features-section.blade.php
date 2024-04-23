<section class="pt-120 pb-120">
  @foreach($features as $feature)
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-1 order-2">
          <div class="row mb-none-30">
            <div class="col-lg-6 mb-30">
              <div class="row mb-none-30">
                <div class="col-lg-12 col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                  <div class="feature-card hover--effect-1">
                    <div class="feature-card__icon">
                      <img src="{{ asset('storage/' . $feature->card_icon_1)}}" alt="image">
                    </div>
                    <div class="feature-card__content">
                      <h3 class="feature-title">{{$feature->card_title_1}}</h3>
                      <p>{{$feature->card_description_1}}</p>
                    </div>
                  </div><!-- feature-card end -->
                </div><!-- feature-card end -->
                <div class="col-lg-12 col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                  <div class="feature-card hover--effect-1">
                    <div class="feature-card__icon">
                      <img src="{{ asset('storage/' . $feature->card_icon_3)}}" alt="image">
                    </div>
                    <div class="feature-card__content">
                      <h3 class="feature-title">{{$feature->card_title_2}}</h3>
                      <p>{{$feature->card_description_2}}</p>
                    </div>
                  </div><!-- feature-card end -->
                </div><!-- feature-card end -->
              </div>
            </div>
            <div class="col-lg-6 mb-30 mt-lg-5">
              <div class="row mb-none-30">
                <div class="col-lg-12 col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                  <div class="feature-card hover--effect-1">
                    <div class="feature-card__icon">
                      <img src="{{ asset('storage/' . $feature->card_icon_2)}}" alt="image">
                    </div>
                    <div class="feature-card__content">
                      <h3 class="feature-title">{{$feature->card_title_3}}</h3>
                      <p>{{$feature->card_description_3}}</p>
                    </div>
                  </div><!-- feature-card end -->
                </div><!-- feature-card end -->
                <div class="col-lg-12 col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                  <div class="feature-card hover--effect-1">
                    <div class="feature-card__icon">
                      <img src="{{ asset('storage/' . $feature->card_icon_4)}}" alt="image">
                    </div>
                    <div class="feature-card__content">
                      <h3 class="feature-title">{{$feature->card_title_4}}</h3>
                      <p>{{$feature->card_description_4}}</p>
                    </div>
                  </div><!-- feature-card end -->
                </div><!-- feature-card end -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 order-lg-2 order-1 text-lg-start text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
          <div class="section-header">
            <span class="section-sub-title">{{$feature->subtitle}}</span>
            <h2 class="section-title">{{$feature->title}}</h2>
            <p>{{$feature->description}}</p>
            <a href="#0" class="d-flex align-items-center mt-3 justify-content-lg-start justify-content-center">Show all features<i class="las la-angle-double-right text-danger"></i></a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </section>