<div>
    <x-slot name="page_title">
		{{ $page_title ?? 'Affiliate' }}
	</x-slot>
    <!-- inner-hero-section start -->
    <div class="inner-hero-section style--four">
     <div class="bg-shape"><img src="{{ asset('front-end/assets/images/elements/inner-hero-shape-2.png')}}" alt="image"></div>
     <div class="container">
       <div class="row">
         <div class="col-lg-12">
           <ul class="page-list">
             <li><a href="{{ route('front-end/navbar') }}">Home</a></li>
             <li><a href="#0">Pages</a></li>
             <li class="active">Affiliate</li>
           </ul>
         </div>
       </div>
     </div>
   </div>
   <!-- inner-hero-section end -->
 
   <!-- affiliate single section start -->
   <section class="mt-minus-150">
    @foreach($affiliates as $affiliate)
     <div class="container">
       <div class="row">
         <div class="col-lg-12">
           <div class="affiliate-single-wrapper pt-120 pb-120">
             <div class="affiliate-single-wrapper__obj"><img src="{{ asset('front-end/assets/images/elements/affiliate-obj.png')}}" alt="image"></div>
             <div class="section-header mb-0">
               <span class="section-sub-title">{{$affiliate->subtitle}}</span>
               <h2 class="section-title font-weight-bold">{{$affiliate->title}}</h2>
               <p>{{$affiliate->description}}</p>
               <a href="#0" class="cmn-btn text-capitalize mt-4">{{$affiliate->button}}</a>
             </div>
           </div>
         </div>
       </div>
     </div>
      @endforeach
   </section>
   <!-- affiliate single section end -->
      <!-- how it work section start  -->
      @include('livewire.front-end.pages.how-it-work')
       <!-- how it work section end  -->
       <!-- client section start -->
       @include('livewire.front-end.pages.client')
       <!-- client section end -->
        <!-- affiliate partner section start -->
        @include('livewire.front-end.pages.affiliate-partner')
        <!-- affiliate partner section end -->
        <!-- top affiliate section start -->
        @include('livewire.front-end.pages.top-affiliate')
        <!-- top affiliate section end -->
 </div>
 