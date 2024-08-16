<div>
	<x-slot name="page_title">
		{{ $page_title ?? 'Faqs' }}
	</x-slot>
	<!-- INNER PAGE BANNER -->
	<div class="wt-bnr-inr overlay-wraper" style="background-image:url({{ asset('assets/images/banner/faq-banner.jpg') }});">
		<div class="overlay-main opacity-07 bg-black"></div>
		<div class="container">
			<div class="wt-bnr-inr-entry">
				<h1 class="text-white">Frequently Asked Questions</h1>
			</div>
		</div>
	</div>
	<!-- INNER PAGE BANNER END -->

	<!-- BREADCRUMB ROW -->
	<div class="bg-gray-light p-tb20">
		<div class="container">
			<ul class="wt-breadcrumb breadcrumb-style-2">
				<li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
				<li>Frequently Asked Questions</li>
			</ul>
		</div>
	</div>
	<!-- BREADCRUMB ROW END -->

	<!-- SECTION CONTENT START -->
	<div class="section-full p-t80 p-b50">

		<div class="container">
			<div class="p-b30">
				<h3 class="text-uppercase">Frequently Asked Questions</h3>
				<div class="wt-separator-outer">
					<div class="wt-separator style-icon">
						<i class="fa fa-leaf text-black"></i>
						<span class="separator-left site-bg-primary"></span>
						<span class="separator-right site-bg-primary"></span>
					</div>
				</div>
			</div>
			@foreach ($faqs as $index => $faq)
				<div class="faq-block">
					<h3 class="faq-que"> {{ $faq->question }}</h3>
					<div class="faq-ans">
						{{ strip_tags($faq->answer) }}
					</div>
				</div>
			@endforeach
		</div>

	</div>
	<!-- SECTION CONTENT END -->
</div>
