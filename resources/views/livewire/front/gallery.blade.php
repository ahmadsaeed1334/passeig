<div class="section-full p-t100 mb-10" style="margin-bottom: 100px">
	<div class="container">
		<!-- TITLE START-->
		<div class="section-head text-center">
			<h1><span class="site-text-primary">Our</span> Gallery</h1>
			<div class="wt-separator-outer">
				<div class="wt-separator style-icon">
					<i class="fa fa-leaf text-black"></i>
					<span class="separator-left site-bg-primary"></span>
					<span class="separator-right site-bg-primary"></span>
				</div>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a
				porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per
				conubia nostra, per inceptos himenaeos.</p>
		</div>
		<!-- TITLE END-->

		<!-- PAGINATION START -->
		<div class="filter-wrap p-a15 our-gallery m-tb30">
			<ul class="masonry-filter link-style text-uppercase center-block m-t0">
				<li class="active"><a data-filter="*" href="#">All</a></li>
				@foreach ($category as $categori)
					<li><a data-filter=".cat-filter-{{ $categori->id }}" href="#">{{ $categori->name }}</a></li>
				@endforeach
			</ul>
		</div>
		<!-- PAGINATION END -->

	</div>
	<!-- GALLERY CONTENT START -->
	<div class="portfolio-wrap mfp-gallery no-col-gap clearfix">
		<div class="container-fluid">
			<div class="row">
				@foreach ($category as $categori)
					@foreach ($categori->images as $image)
						<div class="masonry-item cat-filter-{{ $categori->id }} col-xl-3 col-lg-6 col-md-6">
							<div class="flip-container">
								<div class="wt-box">
									<div class="wt-thum-bx">
										<img src="{{ $image->getFirstMediaUrl('gallery') }}" alt="{{ $image->title }}">
									</div>
									<div class="wt-info bdr-5 bdr-primary bg-white text-center">
										<div class="wt-info-media-zoom">
											<a href="{{ $image->getFirstMediaUrl('gallery') }}" class="mfp-link">
												<i class="fa fa-arrows-alt font-24 p-a10"></i>
											</a>
										</div>
										<div class="wt-info-text p-a30">
											<h3>{{ $image->title }}</h3>
											<p>{{ $image->description }}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				@endforeach
			</div>
		</div>
	</div>
	<!-- GALLERY CONTENT END -->
</div>
