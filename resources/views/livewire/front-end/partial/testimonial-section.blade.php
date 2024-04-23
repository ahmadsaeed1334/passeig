<section class="has-bg--shape pt-120 pb-120">
  @foreach($testimonials as $testimonial)
    <div class="bg-shape">
      <div class="round-shape d-sm-block d-none"><img src="{{ asset('front-end/assets/images/elements/round-shape.png')}}" alt="image"></div>
      <div class="shape-1"></div>
      <div class="shape-2"></div>
      <div class="shape-3"></div>
      <div class="shape-4"></div>
      <div class="shape-5"></div>
      <div class="shape-6"></div>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8 col-xl-8 col-lg-9">
          <div class="section-header text-center">
            <span class="section-sub-title">{{$testimonial->subtitle}}</span>
            <h2 class="section-title">{{$testimonial->title}}</h2>
            <p>{{$testimonial->description}}</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="testimonial-area bg_img" data-background="{{ asset('front-end/assets/images/elements/testimonial-single.jpg')}}">
            <div class="testimonial-slider">
              <div class="testimonial-single">
                <div class="testimonial-single__thumb">
                  <img src="{{ asset('storage/' . $testimonial->slider_image_1)}}" alt="image">
                </div>
                <div class="testimonial-single__content">
                  <h4 class="client-name">{{$testimonial->client_name_1}}</h4>
                  <p>{{$testimonial->slider_description_1}} </p>
                  <div class="ratings">
                    @for ($i = 1; $i <= $testimonial->rating_1; $i++)
                <i class="fas fa-star"></i>
            @endfor
                  </div>
                </div>
              </div><!-- testimonial-single end -->
              <div class="testimonial-single">
                <div class="testimonial-single__thumb">
                  <img src="{{ asset('storage/' . $testimonial->slider_image_2)}}" alt="image">
                </div>
                <div class="testimonial-single__content">
                  <h4 class="client-name">{{$testimonial->client_name_2}}</h4>
                  <p>{{$testimonial->slider_description_2}} </p>
                  <div class="ratings">
                    @for ($i = 1; $i <= $testimonial->rating_2; $i++)
                <i class="fas fa-star"></i>
            @endfor
                  </div>
                </div>
              </div><!-- testimonial-single end -->
              <div class="testimonial-single">
                <div class="testimonial-single__thumb">
                  <img src="{{ asset('storage/' . $testimonial->slider_image_3)}}" alt="image">
                </div>
                <div class="testimonial-single__content">
                  <h4 class="client-name">{{$testimonial->client_name_3}}</h4>
                  <p>{{$testimonial->slider_description_3}} </p>
                  <div class="ratings">
                    @for ($i = 1; $i <= $testimonial->rating; $i++)
                    <i class="fas fa-star"></i>
                @endfor
                  </div>
                </div>
              </div><!-- testimonial-single end -->
            </div><!-- testimonial-slider end -->
          </div><!-- testimonial-area end -->
        </div>
      </div>
    </div>
    @endforeach
  </section>