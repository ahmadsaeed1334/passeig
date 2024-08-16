<!-- LATEST BLOG SECTION START -->
<div class="section-full latest-blog bg-gray p-t100 p-b70">
	<div class="container">
		<!-- TITLE -->
		<div class="section-head text-center">
			<h2><span class="site-text-primary">{{ $blogTitle->title ?? 'Latest' }} </span> News</h2>
			<div class="wt-separator-outer">
				<div class="wt-separator style-icon">
					<i class="fa fa-leaf text-black"></i>
					<span class="separator-left site-bg-primary"></span>
					<span class="separator-right site-bg-primary"></span>
				</div>
			</div>
			<p>{!! $blogTitle->long_description ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.' !!}</p>
		</div>
		<!-- TITLE -->

		<div class="section-content">
			<div class="row equal-wraper">
				<!-- Left Side: 3 Smaller Blogs -->
				<div class="col-lg-6 col-md-12 m-b30">
					@foreach ($blogs->take(3) as $blog)
						<div class="blog-post latest-blog-3 blog-md date-style-1 clearfix">
							<div class="wt-post-media wt-img-effect zoom-slow br-10">
								<a href="#"><img src="{{ Storage::url($blog->image) }}" alt="{{ $blog->title }}"></a>
								{{-- <a href="{{ route('blogs.show', $blog->id) }}"><img src="{{ Storage::url($blog->image) }}" alt="{{ $blog->title }}"></a> --}}
							</div>
							<div class="wt-post-info">
								<div class="wt-post-title">
									<h4 class="post-title font-weight-800"><a href="#">{{ $blog->title }}</a></h4>
									{{-- <h4 class="post-title font-weight-800"><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></h4> --}}
								</div>
								<div class="wt-post-meta">
									<ul>
										<li class="post-date"><i class="fa fa-calendar"></i><strong>{{ $blog->created_at->format('d M') }}</strong>
											<span>{{ $blog->created_at->year }}</span>
										</li>
										<li class="post-author"><i class="fa fa-user"></i>By <a href="javascript:;">{{ $blog->user->name }}</a></li>
										<li class="post-comment"><i class="fa fa-comments"></i> <a
												href="javascript:;">{{ $blog->comments->count() }}</a></li>
									</ul>
								</div>
								<div class="wt-post-text">
									<p>{{ Str::limit(strip_tags($blog->description, 100)) }}</p>

								</div>
							</div>
						</div>
					@endforeach
				</div>

				<!-- Right Side: 1 Larger Blog -->
				@if ($blogs->count() > 3)
					<div class="col-lg-6 col-md-12">
						@php
							$featuredBlog = $blogs->skip(3)->first();
						@endphp
						<div
							class="blog-post latest-blog-3 overlay-wraper post-overlay date-style-1 bg-top-center br-10 zoom-slow bg-cover bg-no-repeat"
							style="background-image:url({{ Storage::url($featuredBlog->image) }});">
							<div class="overlay-main opacity-08 primary-gradi"></div>
							<div class="wt-post-info p-a30 text-white">
								<div class="post-overlay-position">
									<div class="wt-post-title">
										<h3 class="post-title"><a href="#" class="text-capitalize text-white">{{ $featuredBlog->title }}</a>
										</h3>
										{{-- <h3 class="post-title"><a href="{{ route('blogs.show', $featuredBlog->id) }}" class="text-white text-capitalize">{{ $featuredBlog->title }}</a></h3> --}}
									</div>
									<div class="wt-post-meta">
										<ul>
											<li class="post-date"><i
													class="fa fa-calendar"></i><strong>{{ $featuredBlog->created_at->format('d M') }}</strong>
												<span>{{ $featuredBlog->created_at->year }}</span>
											</li>
											<li class="post-author"><i class="fa fa-user"></i>By <a href="javascript:;"
													class="text-white">{{ $featuredBlog->user->name }}</a></li>
											<li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:;"
													class="text-white">{{ $featuredBlog->comments->count() }} comment(s)</a></li>
										</ul>
									</div>
									<div class="wt-post-text">
										<p>{!! Str::limit($featuredBlog->description, 150) !!}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endif
			</div>
		</div>
	</div>
</div>
<!-- LATEST BLOG SECTION END -->
