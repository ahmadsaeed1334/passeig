<main>
	<x-slot name="page_title">
		{{ $page_title ?? $blog->title }}
	</x-slot>
	<!-- INNER PAGE BANNER -->
	<div class="wt-bnr-inr overlay-wraper" style="background-image:url({{ asset('assets/images/banner/services.jpg') }});">
		<div class="overlay-main opacity-07 bg-black"></div>
		<div class="container">
			<div class="wt-bnr-inr-entry">
				<h1 class="text-white">{{ $blog->title }}</h1>
			</div>
		</div>
	</div>
	<!-- INNER PAGE BANNER END -->

	<!-- BREADCRUMB ROW -->
	<div class="bg-gray-light p-tb20">
		<div class="container">
			<ul class="wt-breadcrumb breadcrumb-style-2">
				<li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
				<li>
					<a href="{{ route('blogs') }}">
						Blogs
					</a>
				</li>
				<li>{{ $blog->title }}</li>
			</ul>
		</div>
	</div>
	<!-- BREADCRUMB ROW END -->

	<!-- SECTION CONTENT START -->
	<div class="section-full p-t80 p-b50">
		<div class="container">
			<div class="row">
				<!-- LEFT PART START -->
				<div class="col-lg-12 col-md-12">

					<!-- BLOG START -->
					<div class="blog-post date-style-1 blog-post-single">
						<div class="wt-post-media wt-img-effect zoom-slow" style="border-radius: 10px">
							<a href="javascript:void(0);"><img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
									style="border-radius: 10px"></a>
						</div>
						<div class="post-description-area p-t30">
							<div class="wt-post-title">
								<h3 class="post-title"><a href="javascript:void(0);">
										{{ $blog->title }}
									</a></h3>
							</div>
							<div class="wt-post-meta">
								<ul>
									<li class="post-date"> <i
											class="fa fa-calendar"></i><strong>{{ custom_date_format($blog->created_at) }}</strong> </li>
									<li class="post-author"><i class="fa fa-user"></i><a href="javascript:void(0);">By
											<span>{{ $blog->user?->name }}</span></a> </li>
									<li class="post-comment"><i class="fa fa-comments"></i> <a
											href="javascript:void(0);">{{ $blog->comments_count }}</a> </li>
								</ul>
							</div>
							<div class="wt-post-text">
								{!! $blog->description !!}
							</div>
							{{-- <div class="widget widget_tag_cloud bg-white">
            <h4 class="tagcloud">Tags</h4>
            <div class="tagcloud">
                <a href="about-1.html">First tag</a>
                <a href="about-1.html">Second tag</a>
                <a href="about-1.html">Three tag</a>
                <a href="about-1.html">Four tag</a>
                <a href="about-1.html">Five tag</a>
            </div>
        </div> --}}
							<div class="wt-divider bg-gray-dark"><i class="icon-dot c-square"></i></div>
							<div class="wt-box">

								<div class="b-detail-social d-flex justify-content-between">
									<h4 class="tagcloud pull-left m-t5 m-b10">Share this Post:</h4>
									<div class="widget_social_inks">
										<ul class="social-icons social-md social-square social-dark m-b0">
											<li>
												<a href="https://www.facebook.com/sharer/sharer.php?u={{ route('single-blog', $blog->id) }}"
													target="_blank" class="fa fa-facebook"></a>
											</li>
											<li>
												<a
													href="https://twitter.com/intent/tweet?text={{ urlencode($blog->title) }}&url={{ route('single-blog', $blog->id) }}"
													target="_blank" class="fa fa-twitter"></a>
											</li>
											<li>
												<a
													href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('single-blog', $blog->id) }}&title={{ urlencode($blog->title) }}"
													target="_blank" class="fa fa-linkedin"></a>
											</li>
											<li>
												<a
													href="https://pinterest.com/pin/create/button/?url={{ route('single-blog', $blog->id) }}&media={{ asset('storage/' . $blog->image) }}&description={{ urlencode($blog->title) }}"
													target="_blank" class="fa fa-pinterest"></a>
											</li>
											<li>
												<a href="https://wa.me/?text={{ route('single-blog', $blog->id) }}" target="_blank"
													class="fa fa-whatsapp"></a>
											</li>
										</ul>
									</div>
								</div>

							</div>
							<div class="wt-divider bg-gray-dark"><i class="icon-dot c-square"></i></div>
						</div>
					</div>


					<div class="section-content p-t50">
						<!-- TITLE START -->
						<div class="section-head">
							<h2 class="text-uppercase">Related Blog Post</h2>
							<div class="wt-separator-outer">
								<div class="wt-separator style-square">
									<span class="separator-left site-bg-primary"></span>
									<span class="separator-right site-bg-primary"></span>
								</div>
							</div>
						</div>
						<!-- TITLE END -->

						<!-- CAROUSEL -->
						<div class="section-content">
							<div class="owl-carousel blog-carousel owl-btn-vertical-center">
								@foreach ($relatedBlogs as $relatedBlog)
									<div class="item">
										<div class="blog-post blog-grid date-style-1">
											<div class="wt-post-media wt-img-effect zoom-slow" style="border-radius: 10px">
												<a href="{{ route('single-blog', $relatedBlog->id) }}"><img
														src="{{ asset('storage/' . $relatedBlog->image) }}" alt=""
														style="border-radius: 10px;height: 300px"></a>
											</div>
											<div class="wt-post-info p-a30 bg-white">
												<div class="wt-post-title">
													<h4 class="post-title"><a
															href="{{ route('single-blog', $relatedBlog->id) }}">{{ $relatedBlog->title }}</a></h4>
												</div>
												<div class="wt-post-meta">
													<ul>
														<li class="post-date"> <i
																class="fa fa-calendar"></i><strong>{{ custom_date_format($relatedBlog->created_at) }}</strong> </li>
														<li class="post-author"><i class="fa fa-user"></i><a href="javascript:void(0);">By
																<span>{{ $relatedBlog->user?->name }}</span></a>
														</li>
														<li class="post-comment"><i class="fa fa-comments"></i> <a
																href="javascript:void(0);">{{ $relatedBlog->comments_count }} Comments</a> </li>
													</ul>
												</div>
												<div class="wt-post-text">
													<p>{!! \Illuminate\Support\Str::words(strip_tags($relatedBlog->description), 25, '...') !!}</p>
												</div>
												<div class="clearfix">
													<div class="wt-post-readmore pull-left">
														<a href="{{ $relatedBlog->link ? $relatedBlog->link : route('single-blog', $relatedBlog->id) }}"
															title="{{ $relatedBlog->button ? $relatedBlog->button : 'Read More' }}" rel="bookmark"
															class="site-button-link">{{ $relatedBlog->button ? $relatedBlog->button : 'Read More' }}</a>
													</div>
													<div class="widget_social_inks pull-right">
														<ul class="social-icons social-radius social-dark m-b0">
															<li>
																<a href="https://www.facebook.com/sharer/sharer.php?u={{ route('single-blog', $relatedBlog->id) }}"
																	target="_blank" class="fa fa-facebook"></a>
															</li>
															<li>
																<a
																	href="https://twitter.com/intent/tweet?text={{ urlencode($relatedBlog->title) }}&url={{ route('single-blog', $relatedBlog->id) }}"
																	target="_blank" class="fa fa-twitter"></a>
															</li>
															<li>
																<a
																	href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('single-blog', $relatedBlog->id) }}&title={{ urlencode($relatedBlog->title) }}"
																	target="_blank" class="fa fa-linkedin"></a>
															</li>
															<li>
																<a
																	href="https://pinterest.com/pin/create/button/?url={{ route('single-blog', $relatedBlog->id) }}&media={{ asset('storage/' . $relatedBlog->image) }}&description={{ urlencode($relatedBlog->title) }}"
																	target="_blank" class="fa fa-pinterest"></a>
															</li>
															<li>
																<a href="https://wa.me/?text={{ route('single-blog', $relatedBlog->id) }}" target="_blank"
																	class="fa fa-whatsapp"></a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								@endforeach
							</div>
						</div>
					</div>

					<div class="clear" id="comment-list">
						<div class="comments-area" id="comments">
							<h2 class="comments-title">{{ $blog->comments_count }} Comments</h2>
							<div class="p-tb30">

								<!-- COMMENT LIST START -->
								@include('livewire.front.show')
								<!-- COMMENT LIST END -->

								<!-- LEAVE A REPLY START -->
								<div class="comment-respond" id="respond">

									<h3 class="comment-reply-title" id="reply-title">Leave a Comments
										<small>
											<a style="display:none;" href="#" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a>
										</small>
									</h3>

									<form class="comment-form" id="commentform" method="post">

										<p class="comment-form-author">
											<label for="author">Name <span class="required">*</span></label>
											<input type="text" value="" name="user-comment" placeholder="Author" id="author">
										</p>

										<p class="comment-form-email">
											<label for="email">Email <span class="required">*</span></label>
											<input type="text" value="" placeholder="Email" name="email" id="email">
										</p>

										<p class="comment-form-url">
											<label for="url">Website</label>
											<input type="text" value="" placeholder="Website" name="url" id="url">
										</p>

										<p class="comment-form-comment">
											<label for="comment">Comment</label>
											<textarea rows="8" name="comment" placeholder="Comment" id="comment"></textarea>
										</p>

										<p class="form-submit">
											<button class="site-button text-uppercase" type="button">Submit Comment</button>
										</p>

									</form>

								</div>
								<!-- LEAVE A REPLY END -->

							</div>
						</div>
					</div>
					<!-- BLOG END -->

				</div>
				<!-- LEFT PART END -->

				<!-- RIGHT PART START -->

				<!-- RIGHT PART END -->
			</div>
		</div>
	</div>
	<!-- SECTION CONTENT END -->
</main>
