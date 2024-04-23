<div>
    <x-slot name="page_title">
		{{ $page_title ?? 'Home' }}
	</x-slot>

  @livewire('front-end.partial.sign-up-modal')
  @livewire('front-end.partial.login-modal')
     <!-- hero start -->
     @livewire('front-end.partial.hero')
     <!-- hero end -->
      <!-- how to play section start -->
      @livewire('front-end.partial.how-to-play')
      <!-- how to play section end -->
       <!-- contest section start -->
     @livewire('front-end.partial.contest')
     <!-- contest section end -->
     <!-- winner section start -->
     @livewire('front-end.partial.winner')
     <!-- winner section end -->
       <!-- latest winner section start  -->
    @livewire('front-end.partial.latest-winner')
    <!-- latest winner section end  -->
        
    {{-- @include('livewire.front-end.contests.contests') --}}
    <!-- page-header end -->
   
    
   
    <!-- overview section start -->
    @livewire('front-end.partial.overview')
    <!-- overview section end -->
     <!-- features section start -->
     @livewire('front-end.partial.features-section')
     <!-- features-section end -->
     <!-- testimonial section start -->
    @livewire('front-end.partial.testimonial-section')
    <!-- testimonial-section end -->
     <!-- support section start  -->
     @livewire('front-end.partial.support-section')
     <!-- support section end  -->
    <!-- inner-hero-section start -->
    {{-- @include('livewire.front-end.partial.inner-hero-section') --}}
    <!-- inner-hero-section end -->
    <!-- about-section start -->
    {{-- @include('livewire.front-end.partial.about-section') --}}
    <!-- about-section end -->
   
    
    <!-- team-section start -->
    {{-- @include('livewire.front-end.partial.team-section') --}}
    <!-- team-section end -->
</div>
