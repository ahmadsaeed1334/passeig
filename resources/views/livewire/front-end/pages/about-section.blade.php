<div>
    <x-slot name="page_title">
		{{ $page_title ?? 'About Us' }}
	</x-slot>
    <!-- inner-hero-section start -->
    <div class="inner-hero-section style--four">
        <div class="bg-shape"><img src="{{asset('front-end/assets/images/elements/inner-hero-shape-2.png')}}" alt="image"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <ul class="page-list">
                <li><a href="{{ route('front-end/navbar') }}">Home</a></li>
                <li><a href="#0">Pages</a></li>
                <li class="active">About Us</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- inner-hero-section end -->
    <!-- about section start -->
    <section class="mt-minus-150">
      @foreach($abouts as $about)
        <div class="container">

          <div class="row">
            <div class="col-lg-12">
              <div class="about-wrapper pt-120">
                <div class="about-wrapper__header">
                  <div class="about-wrapper__title-top">{{$about->top_title}}</div>
                  <h2 class="about-wrapper__title">{{$about->title}}</h2>
                </div>
                <div class="about-wrapper__content">
                  <p>{{$about->description_1}}</p>
                  <p>{{$about->description_2}}</p>
                </div>
              </div><!-- about-wrapper-->
              <div class="row counter-wrapper style--two justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center">
                  <div class="counter-item style--two">
                    <div class="counter-item__content">
                      <span>{{$about->number_1}}</span>
                      <p>{{$about->title_1}}</p>
                    </div>
                  </div>
                </div><!-- counter-item end -->
                <div class="col-lg-4 col-sm-6 text-center">
                  <div class="counter-item style--two">
                    <div class="counter-item__content">
                      <span>{{$about->number_2}}</span>
                      <p>{{$about->title_2}}</p>
                    </div>
                  </div>
                </div><!-- counter-item end -->
                <div class="col-lg-4 col-sm-6 text-center">
                  <div class="counter-item style--two">
                    <div class="counter-item__content">
                      <span>{{$about->number_3}}</span>
                      <p>{{$about->title_3}}</p>
                    </div>
                  </div>
                </div><!-- counter-item end -->
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </section>
      <!-- about section end -->
       <!-- features section start -->
       @include('livewire.front-end.pages.features-section')
       <!-- features section end -->
       <!-- testimonial section start -->
       @include('livewire.front-end.partial.testimonial-section')
       <!-- testimonial section end -->
       <!-- team section start -->
       @include('livewire.front-end.partial.team-section')
       <!-- team section end -->
</div>
