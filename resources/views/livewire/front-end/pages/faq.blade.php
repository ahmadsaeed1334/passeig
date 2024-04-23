<div>
     
    <x-slot name="page_title">
		{{ $page_title ?? 'Faq' }}
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
               <li class="active">Faq</li>
             </ul>
           </div>
         </div>
       </div>
     </div>
     <!-- inner-hero-section end -->
 
     <!-- faq section start -->
     <section class="pb-120 mt-minus-150">
       <div class="container">
         <div class="row">
           <div class="col-lg-12">
             <div class="faq-top-wrapper pt-120">
              @foreach($faqTops as $faqTop)
               <div class="section-header text-center">
                 <span class="section-sub-title">{{$faqTop->subtitle}}</span>
                 <h2 class="section-title">{{$faqTop->title}}</h2>
                 <p>{{$faqTop->description}}</p>
               </div>
               @endforeach
               <ul class="nav nav-tabs cmn-tabs justify-content-center" id="myTab" role="tablist">
                @foreach($faqCatagories as $index => $category)
                 <li class="nav-item" role="presentation">
                   <button class="nav-link {{ $loop->first ? 'active' : '' }}"
                     id="{{ $category->name }}-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#{{ strtoupper($category->slug) }}"
                      role="tab"
                       aria-controls="{{ strtoupper($category->slug)}}"
                       aria-selected="false"
                       onclick="toggleActiveTab(this)"
                       {{-- wire:click.prevent="giveaway.filterGiveaways({{ $category->id }})" --}}
                       >
                       {{ $category->name }}
                      </button>
                 </li>
                 @endforeach
               </ul>
             </div><!-- faq-top-wrapper end -->
           </div>
         </div>
         <div class="row justify-content-center">
           <div class="col-lg-10">
             <div class="faq-body-wrapper">
              <div class="tab-content" id="myTabContent">
                @foreach($faqCatagories as $index => $category)
                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="{{ strtoupper($category->slug) }}" role="tabpanel" aria-labelledby="{{ $category->name }}-tab">
                    <div class="accordion cmn-accordion" id="faqAcc-{{ $index + 1 }}">
                        @forelse ($faqs as $faq)
                        @if (in_array($category->id, $faq->categories->pluck('id')->toArray()))
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
                        </div>
                        @endif
                        @empty
                        {!! no_data() !!}
                        @endforelse
                    </div>
                </div>
                @endforeach
            </div>
            <!-- tab-content end -->
             </div><!-- faq-body-wrapper end -->
           </div>
         </div>
       </div>
     </section>
     <script>
      function toggleActiveTab(button) {
          // Remove 'active' class from all tab buttons
          document.querySelectorAll('.nav-link').forEach(function(btn) {
              btn.classList.remove('active');
          });
          
          // Add 'active' class to clicked tab button
          button.classList.add('active');
          
          // Hide all tab contents
          document.querySelectorAll('.tab-pane').forEach(function(tab) {
              tab.classList.remove('active');
              tab.classList.remove('show');
          });
          
          // Show the corresponding tab content
          var tabId = button.getAttribute('data-bs-target').substring(1);
          document.getElementById(tabId).classList.add('active');
          document.getElementById(tabId).classList.add('show');
      }
  </script>
     <!-- faq section end -->
</div>
