<div>
	<x-slot name="page_title">
		{{ $page_title ?? 'Services' }}
	</x-slot>

	<!-- INNER PAGE BANNER -->
	<div class="wt-bnr-inr overlay-wraper" style="background-image:url({{ asset('assets/images/banner/services.jpg') }});">
		<div class="overlay-main opacity-07 bg-black"></div>
		<div class="container">
			<div class="wt-bnr-inr-entry">
				<h1 class="text-white">{{ $title->title }}</h1>
			</div>
		</div>
	</div>
	<!-- INNER PAGE BANNER END -->

	<!-- BREADCRUMB ROW -->
	<div class="bg-gray-light p-tb20">
		<div class="container">
			<ul class="wt-breadcrumb breadcrumb-style-2">
				<li><a href="{{ route('home-page') }}"><i class="fa fa-home"></i> Home</a></li>
				<li>Services</li>
			</ul>
		</div>
	</div>
	<!-- BREADCRUMB ROW END -->

	<!-- SECTION CONTENT -->
	<div class="section-full p-t80 p-b50">
		<div class="container">
			<!-- TITLE START -->
			<div class="section-head text-center">
				<h3 class="text-uppercase">{{ $title->title }}</h3>
				<div class="wt-separator-outer">
					<div class="wt-separator style-icon">
						<i class="fa fa-leaf text-black"></i>
						<span class="separator-left site-bg-primary"></span>
						<span class="separator-right site-bg-primary"></span>
					</div>
				</div>
				<p>{!! $title->long_description !!}</p>
			</div>
			<!-- TITLE END -->

			<div class="section-content">
				<div class="row">
					@foreach ($services as $service)
						<div class="col-lg-4 col-md-6 col-sm-12 m-b30">
							<div class="wt-box bg-white">
								<div class="wt-post-media wt-img-effect zoom-slow" style="border-radius: 10px">
									<a href="{{ route('single-service', $service->id) }}">
										<img src="{{ Storage::url($service->image) }}" alt="{{ $service->title }}" style="border-radius: 10px">
									</a>
								</div>
								<div class="wt-info p-a30 bg-gray">
									<h4 class="wt-title m-t0">
										<a href="{{ route('single-service', $service->id) }}">{{ $service->title }}</a>
									</h4>
									<p>{{ $service->short_description }}</p>
									<a href="{{ route('single-service', $service->id) }}" class="site-button">More <i
											class="fa fa-angle-double-right"></i></a>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>

			<!-- PAGINATION START -->
			<div class="pagination-bx clearfix">
				{{ $services->links() }}
			</div>
			<!-- PAGINATION END -->
		</div>
	</div>
	<!-- SECTION CONTENT END -->
</div>
