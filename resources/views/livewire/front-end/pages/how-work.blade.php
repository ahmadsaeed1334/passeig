<div> 
    <x-slot name="page_title">
		{{ $page_title ?? 'How It Work' }}
	</x-slot>
    <!-- inner-hero-section start -->
    <div class="inner-hero-section style--four">
     <div class="bg-shape"><img src="{{ asset('front-end/assets/images/elements/inner-hero-shape-2.png')}}" alt="image"></div>
     <div class="container">
       <div class="row">
         <div class="col-lg-12">
           <ul class="page-list">
             <li><a href="{{ route('front-end/navbar') }}">Home</a></li>
             <li><a href="#0">Lottery</a></li>
             <li><a href="#0">Contest No: B2T</a></li>
             <li class="active">Pick your Lottery Number</li>
           </ul>
         </div>
       </div>
     </div>
   </div>
   <!-- inner-hero-section end -->
    <!-- video section start -->
    @include('livewire.front-end.pages.video-section')
     <!-- video section end -->
     <!-- how to play section start -->
     @include('livewire.front-end.partial.how-to-play')
     <!-- how to play section end -->
     <!-- buy ticket section start -->
     @include('livewire.front-end.pages.buy-ticket')
     <!-- buy ticket section end -->
     <!-- faq section start -->
     @include('livewire.front-end.pages.faq-section')
     <!-- faq section end -->
   
</div>
