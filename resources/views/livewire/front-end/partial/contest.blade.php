<section class="position-relative pt-120 pb-120">
    <div class="bg-el"><img src="{{ asset('front-end/assets/images/elements/contest-bg.png')}}" alt="image"></div>
    <div class="container">
      {{-- @foreach($contestTops as $contestTops) --}}
      <div class="row justify-content-center">
        <div class="col-lg-8 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
          <div class="section-header text-center">
            <span class="section-sub-title">Try your chance at winning</span>
            <h2 class="section-title">Current Contest</h2>
            <p>Participants buy tickets and lots are drawn to determine the winners.</p>
          </div>
        </div>
      </div><!-- row end -->

      <div class="row wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
        <div class="col-lg-12">

          <ul class="nav nav-tabs justify-content-center mb-30 border-0" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="cmn-btn style--two d-flex align-items-center active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
              <span class="me-3"><img src="{{ asset('front-end/assets/images/icon/btn/car.png')}}" alt="icon"></span> Dream Car
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="cmn-btn style--two d-flex align-items-center" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                <span class="me-3"><img src="{{ asset('front-end/assets/images/icon/btn/box.png')}}" alt="icon"></span>All lifestyle
              </button>
            </li>
          </ul>
         
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
              <div class="row mb-none-30">
                @foreach ($giveaways->take(9) as $giveaway)
                <div class="col-xl-4 col-md-6 mb-30">
                  <div class="contest-card">
                    <a href="{{ route('front-end/contest-details-one' , ['giveawayId' => $giveaway->id]) }}" class="item-link"></a>
                    <div class="contest-card__thumb">
                      <img src="{{ asset('storage/' . $giveaway->file_path) }}" alt="image">
                      <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                      <div class="contest-num">
                        <span>contest no:</span>
                        <h4 class="number">b2t</h4>
                      </div>
                    </div>
                    <div class="contest-card__content">
                      <div class="left">
                        <h5 class="contest-card__name">{{ Str::title($giveaway->name) }}</h5>
                      </div>
                      <div class="right">
                        <span class="contest-card__price">{{ $giveaway->fee }}</span>
                        <p>ticket price</p>
                      </div>
                    </div>
                    <div class="contest-card__footer">
                      <ul class="contest-card__meta">
                        <li>
                          <i class="las la-clock"></i>
                          <span>5d</span>
                        </li>
                        <li>
                          <i class="las la-ticket-alt"></i>
                          <span>9805</span>
                          <p>Remaining</p>
                        </li>
                      </ul>
                    </div>
                  </div><!-- contest-card end -->
                </div>
                @endforeach
              
              </div>
            </div>
          </div>            
        </div>
      </div><!-- row end-->
      <div class="row mt-30">
        <div class="col-lg-12">
          <div class="btn-grp">
            <a href="{{ route('front-end/contests') }}" class="btn-border">browse more</a>
          </div>
        </div>
      </div>
    </div>
  </section>