<div>
  <x-slot name="page_title">
		{{ $page_title ?? '404' }}
	</x-slot>
    <!-- error-section start -->
    <div class="error-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="error-wrapper">
                <div class="error-wrapper__inner">
                  <img src="{{asset('front-end/assets/images/elements/error.png')}}" alt="image">
                </div>
                <div class="error-wrapper__content">
                  <h2 class="title">The page you are looking for doesn't exist!</h2>
                  <a href="{{ route('front-end/navbar') }}" class="cmn-btn d-inline-flex flex-wrap align-items-center active">GO BACK HOME <i class="las la-long-arrow-alt-right"></i></a>
                </div>
              </div><!-- error-wrapper -->
            </div>
          </div>
        </div>
      </div>
      <!-- error-section end -->
</div>
