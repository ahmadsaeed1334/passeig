<div>
	<x-slot name="page_title">
		{{ $page_title ?? 'Blogs' }}
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
				<li>Blogs</li>
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

			<div class="section-full p-t80 p-b50">
				<div class="container">

					<!-- BLOG GRID START -->
					<div class="portfolio-wrap wt-blog-grid-3 row">
						<!-- COLUMNS 1 -->
						@foreach ($blogs as $blog)
							<div class="post masonry-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<div class="blog-post blog-grid date-style-1">
									<div class="wt-post-media wt-img-effect zoom-slow" style="border-radius: 10px">
										<a href="{{ route('single-blog', $blog->id) }}">
											<img src="{{ asset('storage/' . $blog->image) }}" style="border-radius: 10px" alt="{{ $blog->title }}"></a>
									</div>
									<div class="wt-post-info p-t30">
										<div class="wt-post-title">
											<h3 class="post-title"><a href="{{ route('single-blog', $blog->id) }}">{{ $blog->title }}</a></h3>
										</div>
										<div class="wt-post-meta">
											<ul>
												<li class="post-date"> <i
														class="fa fa-calendar"></i><strong>{{ custom_date_format($blog->created_at) }}</strong>

												</li>
												<li class="post-author"><i class="fa fa-user"></i><a href="{{ route('single-blog', $blog->id) }}">By
														<span>{{ $blog->user?->name }}</span></a> </li>
												<li class="post-comment"><i class="fa fa-comments"></i> <a href="{{ route('single-blog', $blog->id) }}">
														{{ $blog->comments_count }}
														Comments</a> </li>
											</ul>
										</div>
										<div class="wt-post-text">
											<p>{!! Str::limit(strip_tags($blog->description), 100, '...') !!}</p>
										</div>
										<div class="clearfix">
											<div class="wt-post-readmore pull-left">
												<a href="{{ $blog->link ? $blog->link : route('single-blog', $blog->id) }}" title="{{ $blog->button }}"
													rel="bookmark" class="site-button-link">{{ $blog->button ? $blog->button : 'Read More' }}</a>
											</div>
											<div class="widget_social_inks pull-right">
												<ul class="social-icons social-radius social-dark m-b0">
													<li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
													<li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
													<li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
													<li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
													<li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
												</ul>
											</div>
										</div>

									</div>
								</div>
							</div>
						@endforeach
					</div>
					<!-- BLOG GRID END -->

				</div>
			</div>

			<!-- PAGINATION START -->
			<div class="pagination-bx clearfix">
				{{-- {{ $blogs->links() }} --}}
			</div>
			<!-- PAGINATION END -->
		</div>
	</div>
	<!-- SECTION CONTENT END -->
</div>
