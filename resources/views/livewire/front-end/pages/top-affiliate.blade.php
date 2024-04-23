<section class="pb-120">
  @foreach($topAffiliates as $topAffiliate)
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-header text-center">
            <span class="section-sub-title">{{$topAffiliate->subtitle}}</span>
            <h2 class="section-title style--two">{{$topAffiliate->title}}</h2>
            <p>{{$topAffiliate->description}}</p>
          </div>
        </div>
      </div>
      <div class="row mb-none-30 justify-content-center">
        <div class="col-lg-4 col-md-6 mb-30">
          <div class="top-affiliate-card">
            <div class="top-affiliate-card__thumb">
              <div class="inner">
                <img src="{{ asset('storage/'. $topAffiliate->card_image_1)}}" alt="image">
              </div>
            </div>
            <div class="top-affiliate-card__content">
              <h3 class="name">{{$topAffiliate->card_name_1}}</h3>
              <span class="amount">${{$topAffiliate->card_amount_1}}</span>
            </div>
          </div><!-- top-affiliate-card end -->
        </div>
        <div class="col-lg-4 col-md-6 mb-30">
          <div class="top-affiliate-card">
            <div class="top-affiliate-card__thumb">
              <div class="inner">
                <img src="{{ asset('storage/'. $topAffiliate->card_image_2)}}" alt="image">
              </div>
            </div>
            <div class="top-affiliate-card__content">
              <h3 class="name">{{$topAffiliate->card_name_2}}</h3>
              <span class="amount">${{$topAffiliate->card_amount_2}}</span>
            </div>
          </div><!-- top-affiliate-card end -->
        </div>
        <div class="col-lg-4 col-md-6 mb-30">
          <div class="top-affiliate-card">
            <div class="top-affiliate-card__thumb">
              <div class="inner">
                <img src="{{ asset('storage/'. $topAffiliate->card_image_3)}}" alt="image">
              </div>
            </div>
            <div class="top-affiliate-card__content">
              <h3 class="name">{{$topAffiliate->card_name_3}}</h3>
              <span class="amount">${{$topAffiliate->card_amount_3}}</span>
            </div>
          </div><!-- top-affiliate-card end -->
        </div>
      </div>
    </div>
    @endforeach
  </section>