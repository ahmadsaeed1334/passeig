  <!-- faq section start -->
  <section class="pb-120 position-relative">
 
    <div class="faq-el"><img src="{{ asset('front-end/assets/images/elements/faq-el.png')}}" alt="image"></div>
    <div class="container">
      <div class="row justify-content-end">
        <div class="col-lg-8 text-lg-start text-center">
          @foreach($faqTops as $faqTop)
          <div class="section-header">
            <span class="section-sub-title">{{$faqTop->subtitle}}</span>
            <h2 class="section-title font-weight-bold">{{$faqTop->title}}</h2>
            <p>{{$faqTop->description}}</p>
          </div>
          @endforeach
          <div class="accordion cmn-accordion" id="accordionExample">
            @foreach ($faqs->take(4) as $index =>$faq)
            <div class="card">
              <div class="card-header" id="h-{{ $loop->iteration }}">
                <button class="btn btn-link btn-block text-left" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index + 1 }}-{{ $loop->iteration }}" aria-expanded="true" aria-controls="collapse{{ $index + 1 }}-{{ $loop->iteration }}">
                  {{ $faq->question }}
                </button>
              </div>
              <div id="collapse{{ $index + 1 }}-{{ $loop->iteration }}" class="collapse" aria-labelledby="h-{{ $loop->iteration }}" data-bs-parent="#faqAcc-{{ $index + 1 }}">
                <div class="card-body">
                  <p>{{ $faq->answer }}</p>
                </div>
              </div>
            </div><!-- card end -->
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- faq section end -->