<section class="buy-ticket-section">
  @foreach($buyTickets as $buyTicket)
    <div class="winner-obj"><img src="{{ asset('front-end/assets/images/elements/winner-obj.png')}}" alt="image"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-lg-start text-center">
          <div class="section-header">
            <span class="section-sub-title">{{$buyTicket->subtitle}}</span>
            <h2 class="section-title font-weight-bold">{{$buyTicket->title}}</h2>
            <p>{{$buyTicket->description}}</p>
          </div>
          <div class="buy-btn-wrapper">
            <span>{{$buyTicket->btn_title}}</span>
            <img src="{{ asset('front-end/assets/images/elements/arrow.png')}}" alt="image" class="arrow">
            <a href="#0" class="cmn-btn">{{$buyTicket->btn_text}}</a>
          </div>
        </div>
      </div>
      <div class="row winner-stat-wrapper">
        <div class="col-lg-8 text-lg-start text-center">
          <h3 class="font-weight-normal winner-stat-wrapper__title">{{$buyTicket->cart_top_text}}</h3>
          <div class="row mb-none-30">
            <div class="col-sm-6 col-md-6 mb-30">
              <div class="counter-item style--three text-center">
                <div class="counter-item__content">
                  <span>{{ number_format($buyTicket->cart_amount_1, 0, '.', '') }}</span>
                  <p>{{$buyTicket->cart_text_1}}</p>
                </div>
              </div><!-- counter-item end -->
            </div>
            <div class="col-sm-6 col-md-6 mb-30">
              <div class="counter-item style--three text-center">
                <div class="counter-item__content">
                  <span>{{ number_format($buyTicket->cart_amount_2, 0, '.', '') }}K</span>
                  <p>{{$buyTicket->cart_text_2}}</p>
                </div>
              </div><!-- counter-item end -->
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </section>