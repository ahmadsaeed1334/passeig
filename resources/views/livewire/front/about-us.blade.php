<div>
	<x-slot name="page_title">
		{{-- {{ $page_title ?? $about->title }} --}}
	</x-slot>
	<!-- INNER PAGE BANNER -->
	<div class="wt-bnr-inr overlay-wraper" style="background-image:url({{ asset('assets/images/banner/services.jpg') }});">
		<div class="overlay-main opacity-07 bg-black"></div>
		<div class="container">
			<div class="wt-bnr-inr-entry">
				<h1 class="text-white">{{ $about->title }}</h1>
			</div>
		</div>
	</div>
	<!-- INNER PAGE BANNER END -->

	<!-- BREADCRUMB ROW -->
	<div class="bg-gray-light p-tb20">
		<div class="container">
			<ul class="wt-breadcrumb breadcrumb-style-2">
				<li><a href="{{ route('home-page') }}"><i class="fa fa-home"></i> Home</a></li>
				<li>
					<a href="{{ route('blogs') }}">
						Blogs
					</a>
				</li>
				<li>{{ $about->title }}</li>
			</ul>
		</div>
	</div>
	<!-- BREADCRUMB ROW END -->
	<!-- ABOUT COMPANY SECTION START -->
	<div class="section-full p-t80 p-b50">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-8 m-b30">
					<div class="about-com-pic">
						<img src="{{ asset('storage/' . $about->image) }}" alt="" class="img-responsive">
					</div>
				</div>
				<div class="col-lg-7 col-md-12">
					<div class="section-head text-left">
						<h3 class="text-uppercase">{{ $about->title }} </h3>
						<div class="wt-separator-outer">
							<div class="wt-separator style-icon">
								<i class="fa fa-leaf text-black"></i>
								<span class="separator-left site-bg-primary"></span>
								<span class="separator-right site-bg-primary"></span>
							</div>
						</div>
						<p>{!! $about->long_description !!}
						</p>
					</div>
					<div class="about-types row">
						<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
							<div class="wt-icon-box-wraper left">
								<div class="icon-md site-text-primary">
									<a href="#" class="icon-cell p-t5 center-block"><i class="flaticon-female-hairs"></i></a>
								</div>
								<div class="icon-content">
									<h5 class="wt-tilte text-uppercase m-b0">Waxing</h5>
									<p>Lorem ipsum dolor sit piscing sed diam nonmy end .</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
							<div class="wt-icon-box-wraper left">
								<div class="icon-md site-text-primary">
									<a href="#" class="icon-cell p-t5 center-block"><i class="flaticon-eye"></i></a>
								</div>
								<div class="icon-content">
									<h5 class="wt-tilte text-uppercase m-b0">Hair Makeup</h5>
									<p>Lorem ipsum dolor sit piscing sed diam nonmy end .</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
							<div class="wt-icon-box-wraper left">
								<div class="icon-md site-text-primary">
									<a href="#" class="icon-cell p-t5 center-block"><i class="flaticon-mirror"></i></a>
								</div>
								<div class="icon-content">
									<h5 class="wt-tilte text-uppercase m-b0">Facial</h5>
									<p>Lorem ipsum dolor sit piscing sed diam nonmy end .</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
							<div class="wt-icon-box-wraper left">
								<div class="icon-md site-text-primary">
									<a href="#" class="icon-cell p-t5 center-block"><i class="flaticon-spray-bottle"
											aria-hidden="true"></i></a>
								</div>
								<div class="icon-content">
									<h5 class="wt-tilte text-uppercase m-b0">Massage</h5>
									<p>Lorem ipsum dolor sit piscing sed diam nonmy end .</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ABOUT COMPANY SECTION END -->
	<!-- OUR CLIENT SLIDER START -->
	<div class="section-full p-t50 p-b50 overlay-wraper bg-parallax" data-stellar-background-ratio="0.5"
		style="background-image:url({{ asset('assets/images/background/bg4.jpg') }});">
		<div class="overlay-main opacity-07 bg-black"></div>
		<div class="container">

			<!-- TITLE START -->
			<div class="section-head text-center">
				<h3 class="text-uppercase">Our Client</h3>
				<div class="wt-separator-outer">
					<div class="wt-separator style-icon">
						<i class="fa fa-leaf text-black"></i>
						<span class="separator-left site-bg-primary"></span>
						<span class="separator-right site-bg-primary"></span>
					</div>
				</div>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
					standard dummy text ever since the 1500s.</p>
			</div>
			<!-- TITLE END -->

			<!-- IMAGE CAROUSEL START -->
			<div class="section-content">
				<div class="owl-carousel client-logo-carousel m-b30">

					<!-- COLUMNS 1 -->
					@foreach ($partners as $partner)
						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo wt-img-effect on-color">
									<a href="contact-1.html"><img src="{{ asset('assets/images/client-logo/logo1.png') }}" alt=""></a>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
			<!-- IMAGE CAROUSEL START -->
		</div>
	</div>
	<!-- OUR CLIENT SLIDER END -->
</div>
