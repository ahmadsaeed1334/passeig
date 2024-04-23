<div>
    <x-slot name="page_title">
		{{ $page_title ?? 'Contests' }}
	</x-slot>
    @include('livewire.front-end.contests.inner-hero-one')
      <section class="pb-120 mt-minus-300">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-12">
                <div class="contest-details__slider-area">
                  <div class="contest-details__thumb-slider">
                    <div class="single-slide"><img src="{{ asset('front-end/assets/images/contest/b2.png')}}" alt="image"></div>
                    <div class="single-slide"><img src="{{ asset('front-end/assets/images/contest/b2.png')}}" alt="image"></div>
                    <div class="single-slide"><img src="{{ asset('front-end/assets/images/contest/b2.png')}}" alt="image"></div>
                    <div class="single-slide"><img src="{{ asset('front-end/assets/images/contest/b2.png')}}" alt="image"></div>
                    <div class="single-slide"><img src="{{ asset('front-end/assets/images/contest/b2.png')}}" alt="image"></div>
                    <div class="single-slide"><img src="{{ asset('front-end/assets/images/contest/b2.png')}}" alt="image"></div>
                    <div class="single-slide"><img src="{{ asset('front-end/assets/images/contest/b2.png')}}" alt="image"></div>
                  </div><!-- contest-cart__thumb-slider end -->
                  <div class="contest-details__nav-slider">
                    <div class="single-slide"><img src="{{ asset('front-end/assets/images/contest/s1.png')}}" alt="image"></div>
                    <div class="single-slide"><img src="{{ asset('front-end/assets/images/contest/s2.png')}}" alt="image"></div>
                    <div class="single-slide"><img src="{{ asset('front-end/assets/images/contest/s3.png')}}" alt="image"></div>
                    <div class="single-slide"><img src="{{ asset('front-end/assets/images/contest/s1.png')}}" alt="image"></div>
                    <div class="single-slide"><img src="{{ asset('front-end/assets/images/contest/s2.png')}}" alt="image"></div>
                    <div class="single-slide"><img src="{{ asset('front-end/assets/images/contest/s3.png')}}" alt="image"></div>
                    <div class="single-slide"><img src="{{ asset('front-end/assets/images/contest/s1.png')}}" alt="image"></div>
                  </div><!-- contest-cart__nav-slider end -->
                </div>
              </div>
            </div><!-- row end -->
            <div class="row mt-50 pt-3">
              <div class="col-lg-8">
                <div class="contest-details-content">
                  <span class="subtitle">Enter now for a chance to win</span>
                  <h2 class="contest-name">The Breeze Zodiac IX</h2>
                  <div class="contest-details-meta">
                    <ul>
                      <li><p>Contest No. <span>B2T</span></p></li>
                      <li><p>Drawn: 23 June 2023</li>
                    </ul>
                    <p>Maximum of <span>29994</span> entries.</p>
                  </div>
                  <div class="contest-description">
                    <div class="content-block">
                      <h3 class="title">Vehicle Overview</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ex eget mi sollicitudin consequat. Sed rhoncus ligula vel justo dignissim aliquam. Maecenas non est vitae ipsum luctus feugiat. Fusce purus nunc, sodales at condimentum sed, ullamcorper a nulla. Nam justo est, venenatis quis tellus in, volutpat eleifend nunc. Vestibulum congue laoreet mi non interdum. Ut ut dapibus tellus.</p>
                    </div><!-- content-block end -->
                    <div class="content-block">
                      <h3 class="title">Specifications</h3>
                      <div class="row">
                        <div class="col-lg-10">
                          <div class="row mb-none-30">
                            <div class="col-sm-6 mb-30">
                              <div class="icon-item">
                                <div class="icon-item__thumb"><img src="{{ asset('front-end/assets/images/icon/specification/1.png')}}" alt="image"></div>
                                <div class="icon-item__content">
                                  <p>0-62mph</p>
                                  <span>4.0 secs</span>
                                </div>
                              </div><!-- icon-item end -->
                            </div>
                            <div class="col-sm-6 mb-30">
                              <div class="icon-item">
                                <div class="icon-item__thumb"><img src="{{ asset('front-end/assets/images/icon/specification/2.png')}}" alt="image"></div>
                                <div class="icon-item__content">
                                  <p>Top Speed</p>
                                  <span>181 mph</span>
                                </div>
                              </div><!-- icon-item end -->
                            </div>
                            <div class="col-sm-6 mb-30">
                              <div class="icon-item">
                                <div class="icon-item__thumb"><img src="{{ asset('front-end/assets/images/icon/specification/3.png')}}" alt="image"></div>
                                <div class="icon-item__content">
                                  <p>Power</p>
                                  <span>542 bhp</span>
                                </div>
                              </div><!-- icon-item end -->
                            </div>
                            <div class="col-sm-6 mb-30">
                              <div class="icon-item">
                                <div class="icon-item__thumb"><img src="{{ asset('front-end/assets/images/icon/specification/4.png')}}" alt="image"></div>
                                <div class="icon-item__content">
                                  <p>Displacement</p>
                                  <span>4.0ltr</span>
                                </div>
                              </div><!-- icon-item end -->
                            </div>
                            <div class="col-sm-6 mb-30">
                              <div class="icon-item">
                                <div class="icon-item__thumb"><img src="{{ asset('front-end/assets/images/icon/specification/5.png')}}" alt="image"></div>
                                <div class="icon-item__content">
                                  <p>bhp</p>
                                  <span>691</span>
                                </div>
                              </div><!-- icon-item end -->
                            </div>
                            <div class="col-sm-6 mb-30">
                              <div class="icon-item">
                                <div class="icon-item__thumb"><img src="{{ asset('front-end/assets/images/icon/specification/6.png')}}" alt="image"></div>
                                <div class="icon-item__content">
                                  <p>Year</p>
                                  <span>2019</span>
                                </div>
                              </div><!-- icon-item end -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!-- content-block end -->
                  </div><!-- contest-description end -->
                </div><!-- contest-details-content end -->
              </div>
              <div class="col-lg-4 mt-lg-0 mt-5">
                <div class="contest-sidebar">
                  <div class="contest-sidebar__cart">
                    <div class="clock-wrapper">
                      <p class="mb-2">This competition ends in:</p>
                      <div class="clock" data-clock="2024/06/10"></div>
                    </div>
                    <h4 class="title">Tickets Sold</h4>
                    <div class="ticket-amount">
                      <span class="left">0</span>
                      <span class="right">29994</span>
                      <div class="progressbar" data-perc="70%">
                        <div class="bar"></div>
                      </div>
                      <p>Only 12045 remaining!</p>
                    </div>
                    <div class="ticket-price text-center">
                      <span class="amount">$4.99</span>
                      <small>Per ticket</small>
                    </div>
                    <div class="select-quantity">
                      <div class="quantity">
                        <input type="number" min="0" max="100" step="1" value="16" readonly>
                      </div>
                    </div><!-- select-quantity end -->
                    <div class="bottom">
                      <a href="#0" class="cmn-btn style--three">buy titckets</a>
                    </div>
                  </div><!-- contest-sidebar__cart end -->
                  <ul class="social-links align-items-center">
                    <li>Share :</li>
                    <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#0"><i class="fab fa-linkedin-in"></i></a></li>
                  </ul>
                </div><!-- contest-sidebar end -->
              </div>
            </div>
          </div>
        </section>
  </div>
  