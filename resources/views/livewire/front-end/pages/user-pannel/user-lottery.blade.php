<div>
    <x-slot name="page_title">
		{{ $page_title ?? 'User' }}
	</x-slot>
    <!-- inner-hero-section start -->
    <div class="inner-hero-section style--five">
    </div>
    <!-- inner-hero-section end -->

    <!-- user section start -->
    <div class="mt-minus-150 pb-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="user-card">
              <div class="avatar-upload">
                <div class="obj-el"><img src="{{ asset('front-end/assets/images/elements/team-obj.png')}}" alt="image"></div>
                <div class="avatar-edit">
                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                    <label for="imageUpload"></label>
                </div>
                <div class="avatar-preview">
                    <div id="imagePreview" style="background-image: url('front-end/assets/images/user/pp.png');">
                    </div>
                </div>
              </div>
              <h3 class="user-card__name">Albert Owens</h3>
              <span class="user-card__id">ID : 19535909</span>
            </div><!-- user-card end -->
            <div class="user-action-card">
              <ul class="user-action-list">
                <li><a href="{{ route('front-end/user-panel') }}">My Tickets <span class="badge">04</span></a></li>
                <li><a href="{{ route('front-end/user-info') }}">Personal Information</a></li>
                <li><a href="{{ route('front-end/user-transaction') }}">Transactions</a></li>
                <li><a href="{{ route('front-end/user-referral') }}">Referral Program</a></li>
                <li class="active"><a href="{{ route('front-end/user-lottery') }}">Favorite Lotteries</a></li>
                <li><a href="{{ route('front-end/contact') }}">Help Center</a></li>
                <li><a href="#0">Log Out</a></li>
              </ul>
            </div><!-- user-action-card end -->
          </div>
          <div class="col-lg-8 mt-lg-0 mt-4">
            <div class="upcoming-draw-wrapper">
              <h3 class="title">Upcoming Draw</h3>
              <div class="draw-ticket-slider">
                <div class="draw-single-ticket">
                  <div class="draw-single-ticket__header">
                    <div class="left">Tickey#1</div>
                    <div class="right">Contest No:R9D</div>
                  </div>
                  <div class="circle-divider"><img src="{{ asset('front-end/assets/images/elements/circle-border.png')}}" alt="image"></div>
                  <ul class="ticket-numbers-list active">
                    <li>23</li>
                    <li>22</li>
                    <li>19</li>
                    <li>9</li>
                    <li>50</li>
                    <li>11</li>
                    <li>12</li>
                  </ul>
                </div><!-- draw-single-ticket end -->
                <div class="draw-single-ticket">
                  <div class="draw-single-ticket__header">
                    <div class="left">Tickey#1</div>
                    <div class="right">Contest No:R9D</div>
                  </div>
                  <div class="circle-divider"><img src="{{ asset('front-end/assets/images/elements/circle-border.png')}}" alt="image"></div>
                  <ul class="ticket-numbers-list active">
                    <li>23</li>
                    <li>22</li>
                    <li>19</li>
                    <li>9</li>
                    <li>50</li>
                    <li>11</li>
                    <li>12</li>
                  </ul>
                </div><!-- draw-single-ticket end -->
                <div class="draw-single-ticket">
                  <div class="draw-single-ticket__header">
                    <div class="left">Tickey#3</div>
                    <div class="right">Contest No:R9D</div>
                  </div>
                  <div class="circle-divider"><img src="{{ asset('front-end/assets/images/elements/circle-border.png')}}" alt="image"></div>
                  <ul class="ticket-numbers-list active">
                    <li>23</li>
                    <li>22</li>
                    <li>19</li>
                    <li>9</li>
                    <li>50</li>
                    <li>11</li>
                    <li>12</li>
                  </ul>
                </div><!-- draw-single-ticket end -->
              </div><!-- draw-ticket-slider end -->
            </div><!-- upcoming-draw-wrapper end -->
            <div class="row mt-30  mb-none-30">
              <div class="col-xl-6 col-lg-12 col-md-6 mb-30">
                <div class="contest-card">
                  <a href="#0" class="item-link"></a>
                  <div class="contest-card__thumb">
                    <img src="{{ asset('front-end/assets/images/contest/1.png')}}" alt="image">
                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                    <div class="contest-num">
                      <span>contest no:</span>
                      <h4 class="number">b2t</h4>
                    </div>
                  </div>
                  <div class="contest-card__content">
                    <div class="left">
                      <h5 class="contest-card__name">The Breeze Zodiac IX</h5>
                    </div>
                    <div class="right">
                      <span class="contest-card__price">$3.99</span>
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
              <div class="col-xl-6 col-lg-12 col-md-6 mb-30">
                <div class="contest-card">
                  <a href="#0" class="item-link"></a>
                  <div class="contest-card__thumb">
                    <img src="{{ asset('front-end/assets/images/contest/2.png')}}" alt="image">
                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                    <div class="contest-num">
                      <span>contest no:</span>
                      <h4 class="number">X9U</h4>
                    </div>
                  </div>
                  <div class="contest-card__content">
                    <div class="left">
                      <h5 class="contest-card__name">The Del Sol Trailblazer</h5>
                    </div>
                    <div class="right">
                      <span class="contest-card__price">$3.99</span>
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
              <div class="col-xl-6 col-lg-12 col-md-6 mb-30">
                <div class="contest-card">
                  <a href="#0" class="item-link"></a>
                  <div class="contest-card__thumb">
                    <img src="{{ asset('front-end/assets/images/contest/15.png')}}" alt="image">
                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                    <div class="contest-num">
                      <span>contest no:</span>
                      <h4 class="number">b2t</h4>
                    </div>
                  </div>
                  <div class="contest-card__content">
                    <div class="left">
                      <h5 class="contest-card__name">The Breeze Zodiac IX</h5>
                    </div>
                    <div class="right">
                      <span class="contest-card__price">$3.99</span>
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
              <div class="col-xl-6 col-lg-12 col-md-6 mb-30">
                <div class="contest-card">
                  <a href="#0" class="item-link"></a>
                  <div class="contest-card__thumb">
                    <img src="{{ asset('front-end/assets/images/contest/16.png')}}" alt="image">
                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                    <div class="contest-num">
                      <span>contest no:</span>
                      <h4 class="number">X9U</h4>
                    </div>
                  </div>
                  <div class="contest-card__content">
                    <div class="left">
                      <h5 class="contest-card__name">The Del Sol Trailblazer</h5>
                    </div>
                    <div class="right">
                      <span class="contest-card__price">$3.99</span>
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
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- user section end -->
</div>
