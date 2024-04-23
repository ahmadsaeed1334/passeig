    <!-- features section start -->
    <section class="pt-120 pb-120 position-relative">
      @foreach($aboutfeatures as $aboutfeature)
        <div class="feature-car">
          <img src="{{ asset('storage/'. $aboutfeature->image)}}" alt="image">
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="section-header text-center">
                <span class="section-sub-title">{{$aboutfeature->subtitle}}</span>
                <h2 class="section-title style--two">{{$aboutfeature->title}}</h2>
                <p>{{$aboutfeature->description}}</p>
              </div>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-xl-9">
              <div class="row mb-none-30">
                <div class="col-lg-4 col-sm-6 mb-30">
                  <div class="feature-card style--two">
                    <div class="feature-card__icon">
                      <div class="inner"><img src="{{ asset('storage/'. $aboutfeature->inner_icon_1)}}" alt="image"></div>
                    </div>
                    <div class="feature-card__content">
                      <h3>{{$aboutfeature->icon_title_1}}</h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-30">
                  <div class="feature-card style--two">
                    <div class="feature-card__icon">
                      <div class="inner"><img src="{{ asset('storage/'. $aboutfeature->inner_icon_2)}}" alt="image"></div>
                    </div>
                    <div class="feature-card__content">
                      <h3>{{$aboutfeature->icon_title_2}}</h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-30">
                  <div class="feature-card style--two">
                    <div class="feature-card__icon">
                      <div class="inner"><img src="{{ asset('storage/'. $aboutfeature->inner_icon_3)}}" alt="image"></div>
                    </div>
                    <div class="feature-card__content">
                      <h3>{{$aboutfeature->icon_title_3}}</h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-30">
                  <div class="feature-card style--two">
                    <div class="feature-card__icon">
                      <div class="inner"><img src="{{ asset('storage/'. $aboutfeature->inner_icon_4)}}" alt="image"></div>
                    </div>
                    <div class="feature-card__content">
                      <h3>{{$aboutfeature->icon_title_4}}</h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-30">
                  <div class="feature-card style--two">
                    <div class="feature-card__icon">
                      <div class="inner"><img src="{{ asset('storage/'. $aboutfeature->inner_icon_5)}}" alt="image"></div>
                    </div>
                    <div class="feature-card__content">
                      <h3>{{$aboutfeature->icon_title_5}}</h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-30">
                  <div class="feature-card style--two">
                    <div class="feature-card__icon">
                      <div class="inner"><img src="{{ asset('storage/'. $aboutfeature->inner_icon_6)}}" alt="image"></div>
                    </div>
                    <div class="feature-card__content">
                      <h3>{{$aboutfeature->icon_title_6}}</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- row end -->
        </div>
        @endforeach
      </section>
      <!-- features section end -->