<div>
	<x-slot name="page_title">
		{{ $service->title ?? 'Service Detail' }}
	</x-slot>

	<!-- INNER PAGE BANNER -->
	<div class="wt-bnr-inr overlay-wraper"
		style="background-image:url({{ asset('assets/images/banner/blog-banner.jpg') }});">
		<div class="overlay-main opacity-07 bg-black"></div>
		<div class="container">
			<div class="wt-bnr-inr-entry">
				<h1 class="text-white">{{ $service->title }}</h1>
			</div>
		</div>
	</div>
	<!-- INNER PAGE BANNER END -->

	<!-- BREADCRUMB ROW -->
	<div class="bg-gray-light p-tb20">
		<div class="container">
			<ul class="wt-breadcrumb breadcrumb-style-2">
				<li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
				<li>{{ $service->title }}</li>
			</ul>
		</div>
	</div>
	<!-- BREADCRUMB ROW END -->

	<!-- SECTION CONTENT START -->
	<div class="section-full p-t80 p-b50">
		<div class="container">
			<div class="row">
				<!-- LEFT PART START -->
				<div class="col-lg-8 col-md-12">
					<!-- SERVICE START -->
					<div class="service-detail">
						<div class="wt-post-media wt-img-effect">
							<img src="{{ Storage::url($service->image) }}" alt="{{ $service->title }}">
						</div>
						<div class="post-description-area p-t30">
							<div class="wt-post-title">
								<h3>{{ $service->title }}</h3>
							</div>
							<div class="wt-post-text">
								{!! $service->long_description !!}
							</div>
						</div>
					</div>
					<!-- SERVICE END -->
				</div>
				<!-- LEFT PART END -->

				<!-- RIGHT PART START -->
				<div class="col-lg-4 col-md-12">
					<aside class="side-bar">
						<!-- RECENT POSTS -->

						{{-- <div class="widget bg-white recent-posts-entry">
                            <h4 class="widget-title">Recent Blogs</h4>
                            <div class="widget-post-bx">
                                @foreach ($blogs as $blog)
                                <div class="widget-post clearfix bg-gray">
                                    <div class="wt-post-media">
                                        <img src="{{ Storage::url($blog->image) }}" alt="{{ $blog->title }}" class="radius-bx">
                </div>
                <div class="wt-post-info">
                    <div class="wt-post-header">
                        <h6 class="post-title">
                            <a href="#">{{ $blog->title }}</a>
                        </h6>
                        <ul class="post-meta">
                            <li><i class="fa fa-calendar"></i>{{ $blog->created_at->format('d M Y') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div> --}}
						<!-- RECENT POST BLOCK START -->
						<div class="widget recent-posts-entry bg-white">
							<h4 class="widget-title">Recent Posts</h4>
							<div class="widget-post-bx">
								@foreach ($blogs as $blog)
									<div class="widget-post clearfix">
										<div class="wt-post-media">
											<img src="{{ Storage::url($blog->image) }}" alt="{{ $blog->title }}" width="200" height="143"
												alt="">
										</div>
										<div class="wt-post-info">
											<div class="wt-post-header">
												<h6 class="post-title">{{ $blog->title }}</h6>
											</div>
											<div class="wt-post-meta">
												<ul>
													<li class="post-author">By{{ $blog->user->name }}</li>
													<li class="post-comment"><i class="fa fa-comments"></i> {{ $blog->comments->count() }}</li>
													{{-- </ul><ul class="post-meta">
                                                <li class="post-date"><i class="fa fa-calendar"></i><strong>{{ $blog->created_at->format('d M') }}</strong> <span>{{ $blog->created_at->year }}</span></li>
                            <li class="post-author"><i class="fa fa-user"></i>By <a href="javascript:;">{{ $blog->user->name }}</a></li>
                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:;">{{ $blog->comments->count() }}</a></li>
                        </ul> --}}
											</div>
										</div>
									</div>
								@endforeach

							</div>
						</div>
						<!-- RECENT POST BLOCK START -->


						<!-- OUR GALLERY -->
						<div class="widget widget_gallery mfp-gallery">
							<h4 class="widget-title">Our Gallery</h4>
							<ul>
								@foreach ($category as $cat)
									@foreach ($cat->images as $image)
										<li>
											<div class="wt-post-thum">
												<a href="{{ $image->getFirstMediaUrl('gallery') }}" class="mfp-link">
													<img src="{{ $image->getFirstMediaUrl('gallery') }}" alt="">
												</a>
											</div>
										</li>
									@endforeach
								@endforeach
							</ul>
						</div>

						<!-- NEWSLETTER -->
						<div class="widget widget_newsletter-2 bg-white">
							<h4 class="widget-title">Newsletter</h4>
							<div class="newsletter-bx p-a30">
								<div class="newsletter-icon">
									<i class="fa fa-envelope-o"></i>
								</div>
								<div class="newsletter-content">
									<i>Enter your e-mail and subscribe to our newsletter.</i>
								</div>

								@include('livewire.front.pages.newsletter')
							</div>
						</div>
						<!-- OUR PARTNERS -->
						<div class="widget">
							<h4 class="widget-title">Our Partners</h4>
							<div class="owl-carousel widget-client p-t10">
								@foreach ($partners as $partner)
									<div class="item">
										<div class="ow-client-logo">
											<div class="client-logo wt-img-effect on-color">
												<a href="#">
													<img src="{{ Storage::url($partner->partner_image) }}" alt="{{ $partner->name }}">
												</a>
											</div>
										</div>
									</div>
								@endforeach
							</div>
						</div>

					</aside>
				</div>
				<!-- RIGHT PART END -->
			</div>
		</div>
	</div>
	<!-- SECTION CONTENT END -->
</div>
