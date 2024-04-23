<section class="latest-winner-section position-relative pt-120 pb-120">
    <div class="el-1"><img src="{{ asset('front-end/assets/images/elements/w-el-1.png')}}" alt="image"></div>
    <div class="el-2"><img src="{{ asset('front-end/assets/images/elements/w-el-2.png')}}" alt="image"></div>
    <div class="el-3"><img src="{{ asset('front-end/assets/images/elements/w-el-3.png')}}" alt="image"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
          <div class="section-header text-center">
            <span class="section-sub-title">Meet the latest winners from your favorite contest</span>
            <h2 class="section-title">Latest Winners</h2>
            <p>Check your ticket number's to see if you are a Winner in the Dream Lottery.</p>
          </div>
        </div>
      </div><!-- row end -->

      <div class="row wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
        <div class="col-lg-12">
          <ul class="nav nav-tabs winner-tab-nav" id="winnerTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="dream-tab" data-bs-toggle="tab" data-bs-target="#dream" role="tab" aria-controls="dream" aria-selected="true">
                <div class="icon-thumb"><img src="{{ asset('front-end/assets/images/icon/winner-tab/1.png')}}" alt="image"></div>
                <span>Dream Car</span>
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="bike-tab" data-bs-toggle="tab" data-bs-target="#bike" role="tab" aria-controls="bike" aria-selected="false">
                <div class="icon-thumb"><img src="{{ asset('front-end/assets/images/icon/winner-tab/2.png')}}" alt="image"></div>
                <span>bike</span>
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="watch-tab" data-bs-toggle="tab" data-bs-target="#watch" role="tab" aria-controls="watch" aria-selected="false">
                <div class="icon-thumb"><img src="{{ asset('front-end/assets/images/icon/winner-tab/3.png')}}" alt="image"></div>
                <span>watch</span>
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="laptop-tab" data-bs-toggle="tab" data-bs-target="#laptop" role="tab" aria-controls="laptop" aria-selected="false">
                <div class="icon-thumb"><img src="{{ asset('front-end/assets/images/icon/winner-tab/4.png')}}" alt="image"></div>
                <span>laptop</span>
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="money-tab" data-bs-toggle="tab" data-bs-target="#money" role="tab" aria-controls="money" aria-selected="false">
                <div class="icon-thumb"><img src="{{ asset('front-end/assets/images/icon/winner-tab/5.png')}}" alt="image"></div>
                <span>Money</span>
              </button>
            </li>
          </ul>
          <div class="tab-content mt-50" id="winnerTabContent">
            <div class="tab-pane fade show active" id="dream" role="tabpanel" aria-labelledby="dream-tab">
              <div class="row mb-none-30">
                <div class="col-lg-4 mb-30">
                  <div class="number-check-wrapper">
                    <h3 class="title">Check My Numbers</h3>
                    <p>Are you holding on to a winning ticket? Here's an easy way to find out.</p>
                    <form class="check-number-form">
                      <input type="tel" class="form-control mt-30 mb-30" name="check-number1" id="check-number1" placeholder="Enter Contest No">
                      <div class="number-list-wrapper">
                        <p>Enter Your Lottery Numbers</p>
                        <div class="number-list mt-3 mb-3">
                          <input type="text" name="text1" id="text1" placeholder="00">
                          <input type="text" name="text2" id="text2" placeholder="00">
                          <input type="text" name="text3" id="text3" placeholder="00">
                          <input type="text" name="text4" id="text4" placeholder="00">
                          <input type="text" name="text5" id="text5" placeholder="00">
                          <input type="text" name="text6" id="text6" placeholder="00">
                          <input type="text" name="text7" id="text7" placeholder="00">
                        </div><!-- number-list end -->
                        <select class="nice-select">
                          <option>Last 7 days</option>
                          <option>Last 6 days</option>
                          <option>Last 5 days</option>
                          <option>Last 4 days</option>
                          <option>Last 3 days</option>
                        </select>
                        <div class="text-center mt-100">
                          <button type="submit" class="cmn-btn">check my numbers</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-lg-8 mb-30">
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/6.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/1.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/4.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/2.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/3.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/3.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/4.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/4.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/5.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/5.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/6.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/6.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="btn-grp">
                    <a href="{{ route('front-end/contest-details-one') }}" class="btn-border">browse more</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="bike" role="tabpanel" aria-labelledby="bike-tab">
              <div class="row mb-none-30">
                <div class="col-lg-4 mb-30">
                  <div class="number-check-wrapper">
                    <h3 class="title">Check My Numbers</h3>
                    <p>Are you holding on to a winning ticket? Here's an easy way to find out.</p>
                    <form class="check-number-form">
                      <input type="tel" class="form-control mt-30 mb-30" name="check-number2" id="check-number2" placeholder="Enter Contest No">
                      <div class="number-list-wrapper">
                        <p>Enter Your Lottery Numbers</p>
                        <div class="number-list mt-3 mb-3">
                          <input type="text" name="text8" id="text8" placeholder="00">
                          <input type="text" name="text9" id="text9" placeholder="00">
                          <input type="text" name="text10" id="text10" placeholder="00">
                          <input type="text" name="text11" id="text11" placeholder="00">
                          <input type="text" name="text12" id="text12" placeholder="00">
                          <input type="text" name="text13" id="text13" placeholder="00">
                          <input type="text" name="text14" id="text14" placeholder="00">
                        </div><!-- number-list end -->
                        <select class="nice-select">
                          <option>Last 7 days</option>
                          <option>Last 6 days</option>
                          <option>Last 5 days</option>
                          <option>Last 4 days</option>
                          <option>Last 3 days</option>
                        </select>
                        <div class="text-center mt-100">
                          <button type="submit" class="cmn-btn">check my numbers</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-lg-8 mb-30">
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/5.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/1.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/6.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/2.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/3.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/3.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/4.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/4.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/5.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/5.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/6.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/6.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="btn-grp">
                    <a href="{{ route('front-end/winner-details') }}" class="btn-border">browse more</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="watch" role="tabpanel" aria-labelledby="watch-tab">
              <div class="row mb-none-30">
                <div class="col-lg-4 mb-30">
                  <div class="number-check-wrapper">
                    <h3 class="title">Check My Numbers</h3>
                    <p>Are you holding on to a winning ticket? Here's an easy way to find out.</p>
                    <form class="check-number-form">
                      <input type="tel" class="form-control mt-30 mb-30" name="check-number3" id="check-number3" placeholder="Enter Contest No">
                      <div class="number-list-wrapper">
                        <p>Enter Your Lottery Numbers</p>
                        <div class="number-list mt-3 mb-3">
                          <input type="text" name="text15" id="text15" placeholder="00">
                          <input type="text" name="text16" id="text16" placeholder="00">
                          <input type="text" name="text17" id="text17" placeholder="00">
                          <input type="text" name="text18" id="text18" placeholder="00">
                          <input type="text" name="text19" id="text19" placeholder="00">
                          <input type="text" name="text20" id="text20" placeholder="00">
                          <input type="text" name="text21" id="text21" placeholder="00">
                        </div><!-- number-list end -->
                        <select class="nice-select">
                          <option>Last 7 days</option>
                          <option>Last 6 days</option>
                          <option>Last 5 days</option>
                          <option>Last 4 days</option>
                          <option>Last 3 days</option>
                        </select>
                        <div class="text-center mt-100">
                          <button type="submit" class="cmn-btn">check my numbers</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-lg-8 mb-30">
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/3.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/1.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/2.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/2.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/3.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/3.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/4.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/4.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/5.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/5.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/6.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/6.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="btn-grp">
                    <a href="{{ route('front-end/winner-details') }}" class="btn-border">browse more</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="laptop" role="tabpanel" aria-labelledby="laptop-tab">
              <div class="row mb-none-30">
                <div class="col-lg-4 mb-30">
                  <div class="number-check-wrapper">
                    <h3 class="title">Check My Numbers</h3>
                    <p>Are you holding on to a winning ticket? Here's an easy way to find out.</p>
                    <form class="check-number-form">
                      <input type="tel" class="form-control mt-30 mb-30" name="check-number4" id="check-number4" placeholder="Enter Contest No">
                      <div class="number-list-wrapper">
                        <p>Enter Your Lottery Numbers</p>
                        <div class="number-list mt-3 mb-3">
                          <input type="text" name="text22" id="text22" placeholder="00">
                          <input type="text" name="text23" id="text23" placeholder="00">
                          <input type="text" name="text24" id="text24" placeholder="00">
                          <input type="text" name="text25" id="text25" placeholder="00">
                          <input type="text" name="text26" id="text26" placeholder="00">
                          <input type="text" name="text27" id="text27" placeholder="00">
                          <input type="text" name="text28" id="text28" placeholder="00">
                        </div><!-- number-list end -->
                        <select class="nice-select">
                          <option>Last 7 days</option>
                          <option>Last 6 days</option>
                          <option>Last 5 days</option>
                          <option>Last 4 days</option>
                          <option>Last 3 days</option>
                        </select>
                        <div class="text-center mt-100">
                          <button type="submit" class="cmn-btn">check my numbers</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-lg-8 mb-30">
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/1.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/1.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/2.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/2.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/3.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/3.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/4.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/4.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/5.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/5.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/6.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/6.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="btn-grp">
                    <a href="{{ route('front-end/winner-details') }}" class="btn-border">browse more</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="money" role="tabpanel" aria-labelledby="money-tab">
              <div class="row mb-none-30">
                <div class="col-lg-4 mb-30">
                  <div class="number-check-wrapper">
                    <h3 class="title">Check My Numbers</h3>
                    <p>Are you holding on to a winning ticket? Here's an easy way to find out.</p>
                    <form class="check-number-form">
                      <input type="tel" class="form-control mt-30 mb-30" name="check-number5" id="check-number5" placeholder="Enter Contest No">
                      <div class="number-list-wrapper">
                        <p>Enter Your Lottery Numbers</p>
                        <div class="number-list mt-3 mb-3">
                          <input type="text" name="text29" id="text29" placeholder="00">
                          <input type="text" name="text30" id="text30" placeholder="00">
                          <input type="text" name="text31" id="text31" placeholder="00">
                          <input type="text" name="text32" id="text32" placeholder="00">
                          <input type="text" name="text33" id="text33" placeholder="00">
                          <input type="text" name="text34" id="text34" placeholder="00">
                          <input type="text" name="text35" id="text35" placeholder="00">
                        </div><!-- number-list end -->
                        <select class="nice-select">
                          <option>Last 7 days</option>
                          <option>Last 6 days</option>
                          <option>Last 5 days</option>
                          <option>Last 4 days</option>
                          <option>Last 3 days</option>
                        </select>
                        <div class="text-center mt-100">
                          <button type="submit" class="cmn-btn">check my numbers</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-lg-8 mb-30">
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/4.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/1.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/2.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/2.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/3.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/3.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/4.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/4.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/5.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/5.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="winner-card mb-30">
                    <div class="winner-card__thumb">
                      <img src="{{ asset('front-end/assets/images/win-car/6.png')}}" alt="image">
                    </div>
                    <div class="winner-card__content">
                      <div class="winner-thumb"><img src="{{ asset('front-end/assets/images/winner/6.png')}}" alt="image"></div>
                      <div class="content-top">
                        <div class="left">
                          <h5>The Breeze Zodiac IX</h5>
                        </div>
                        <div class="right">
                          <span>Draw took place on</span>
                          <p>Saturday April 20, 2023</p>
                        </div>
                      </div>
                      <div class="content-bottom">
                        <div class="number-list-wrapper">
                          <p>Winning Numbers:</p>
                          <ul class="number-list mt-2">
                            <li>11</li>
                            <li>88</li>
                            <li>23</li>
                            <li>9</li>
                            <li>19</li>
                            <li>26</li>
                            <li>87</li>
                          </ul><!-- number-list end -->
                        </div>
                        <div class="right">
                          <p>Contest No:</p>
                          <span class="contest-num">B2T</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- winner-card end -->
                  <div class="btn-grp">
                    <a href="{{ route('front-end/winner-details') }}" class="btn-border">browse more</a>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- tab-content end -->
        </div>
      </div><!-- row end -->
    </div>
  </section>