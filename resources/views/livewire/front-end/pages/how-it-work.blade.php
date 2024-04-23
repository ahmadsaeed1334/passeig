<section class=" pt-120 pb-120">
  @foreach($howItWorks as $howItWork)
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <span class="section-sub-title">{{$howItWork->subtitle}}</span>
            <h2 class="section-title style--two">{{$howItWork->title}}</h2>
            <p>{{$howItWork->description}}</p>
          </div>
        </div>
      </div>
      <div class="row mb-none-30 justify-content-center">
        <div class="col-lg-4 col-sm-6 mb-30">
          <div class="work-card text-center">
            <div class="work-card__icon">
              <div class="inner"><img src="{{ asset('storage/'. $howItWork->card_icon_1)}}" alt="image"></div>
            </div>
            <div class="work-card__content">
              <h3 class="work-card__title">{{$howItWork->card_title_1}}</h3>
              <p>{{$howItWork->card_description_1}}</p>
            </div>
          </div><!-- work-card end -->
        </div>
        <div class="col-lg-4 col-sm-6 mb-30">
          <div class="work-card text-center">
            <div class="work-card__icon">
              <div class="inner"><img src="{{ asset('storage/'. $howItWork->card_icon_2)}}" alt="image"></div>
            </div>
            <div class="work-card__content">
              <h3 class="work-card__title">{{$howItWork->card_title_2}}</h3>
              <p>{{$howItWork->card_description_2}}</p>
            </div>
          </div><!-- work-card end -->
        </div>
        <div class="col-lg-4 col-sm-6 mb-30">
          <div class="work-card text-center">
            <div class="work-card__icon">
              <div class="inner"><img src="{{ asset('storage/'. $howItWork->card_icon_3)}}" alt="image"></div>
            </div>
            <div class="work-card__content">
              <h3 class="work-card__title">{{$howItWork->card_title_3}}</h3>
              <p>{{$howItWork->card_description_3}}</p>
            </div>
          </div><!-- work-card end -->
        </div>
      </div>
    </div>
    @endforeach
  </section>