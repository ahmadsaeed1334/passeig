<div>
    <x-slot name="page_title">
		{{ $page_title ?? 'Contests' }}
	</x-slot>
@include('livewire.front-end.contests.inner-hero-section')
<!-- inner-hero-section start -->
{{-- @include('livewire.front-end.partial.inner-hero-section') --}}
<!-- inner-hero-section end -->
<!-- contest section start  -->
@livewire('front-end.contests.contest-section')
<!-- contest section end  -->
<!-- contest feature section start -->
@include('livewire.front-end.contests.contest-feature-section')
<!-- contest feature section end -->
</div>
