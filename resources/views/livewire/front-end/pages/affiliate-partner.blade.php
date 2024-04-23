<section class="pt-120 pb-120 position-relative">
  
  <x-slot name="page_title">
		{{ $page_title ?? 'Affiliate' }}
	</x-slot>
  @foreach($affiliatePartners as $affiliatePartner)
    <div class="bg-el"><img src="{{ asset('front-end/assets/images/elements/affiliate-bg.jpg')}}" alt="image"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <span class="section-sub-title">{{$affiliatePartner->subtitle}}</span>
            <h2 class="section-title style--two"> {{$affiliatePartner->title}}</h2>
            <p>{{$affiliatePartner->description}}</p>
          </div>
        </div>
      </div>
      <div class="row mb-none-30">
        <div class="col-xl-3 col-sm-6 mb-30">
          <div class="affiliate-card">
            <div class="affiliate-card__icon">
              <img src="{{ asset('storage/' . $affiliatePartner->card_icon_1)}}" alt="image">
            </div>
            <div class="affiliate-card__content">
              <h3 class="affiliate-card__title">{{ $affiliatePartner->card_title_1 }}</h3>
              <p>{{ $affiliatePartner->card_description_1 }}</p>
            </div>
          </div><!-- affiliate-card end -->
        </div>
        <div class="col-xl-3 col-sm-6 mb-30">
          <div class="affiliate-card">
            <div class="affiliate-card__icon">
              <img src="{{ asset('storage/' . $affiliatePartner->card_icon_2)}}" alt="image">
            </div>
            <div class="affiliate-card__content">
              <h3 class="affiliate-card__title">{{ $affiliatePartner->card_title_2 }}</h3>
              <p>{{ $affiliatePartner->card_description_2 }}</p>
            </div>
          </div><!-- affiliate-card end -->
        </div>
        <div class="col-xl-3 col-sm-6 mb-30">
          <div class="affiliate-card">
            <div class="affiliate-card__icon">
              <img src="{{ asset('storage/' . $affiliatePartner->card_icon_3)}}" alt="image">
            </div>
            <div class="affiliate-card__content">
              <h3 class="affiliate-card__title">{{ $affiliatePartner->card_title_3 }}</h3>
              <p>{{ $affiliatePartner->card_description_3 }}</p>
            </div>
          </div><!-- affiliate-card end -->
        </div>
        <div class="col-xl-3 col-sm-6 mb-30">
          <div class="affiliate-card">
            <div class="affiliate-card__icon">
              <img src="{{ asset('storage/' . $affiliatePartner->card_icon_4)}}" alt="image">
            </div>
            <div class="affiliate-card__content">
              <h3 class="affiliate-card__title">{{ $affiliatePartner->card_title_4 }} </h3>
              <p>{{ $affiliatePartner->card_description_4 }}</p>
            </div>
          </div><!-- affiliate-card end -->
        </div>
      </div>
    </div>
    @endforeach
  </section>