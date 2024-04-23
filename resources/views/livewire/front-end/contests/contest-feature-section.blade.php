<section class="pb-120">
    <div class="container">
      <div class="row mb-none-30 justify-content-center">
        @foreach($contestCards as $contestCard)
        <div class="col-lg-4 col-sm-6 mb-30">
          <div class="icon-item2">
            <div class="icon-item2__icon">
              <img src="{{ asset('storage/'. $contestCard->card_icon) }}" alt="image">
            </div>
            <div class="icon-item2__content">
              <h3 class="title">{{$contestCard->card_title}}</h3>
              <p>{{$contestCard->card_description}}</p>
            </div>
          </div><!-- icon-item2 end -->
        </div>
        @endforeach
       
      </div>
    </div>
  </section>