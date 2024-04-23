<section class="pb-120">
    <div class="container">
      <div class="row">
      
        <div class="col-lg-12">
          <div class="client-wrapper">
            <h2 class="client-wrapper__title">Trusted by</h2>
            <div class="client-slider">
              @foreach($partners as $partner)
              <div class="client-single">
                <img src="{{ asset('storage/'. $partner->partner_image)}}" alt="image">
              </div>
              @endforeach
            </div><!-- client-slider end -->
          </div><!-- client-wrapper end -->
        </div>
      
      </div>
    </div>
    <!--.container end -->
  </section>