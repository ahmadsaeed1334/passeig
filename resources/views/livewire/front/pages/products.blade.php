<div>
	<x-slot name="page_title">
		{{ $page_title ?? 'Product' }}
	</x-slot>
	<style>
		.wt-thum-bx img {
			width: 100%;
			/* Ensure the image takes up the full width of the container */
			height: 250px;
			/* Set a fixed height for the images */
			object-fit: cover;
			/* Ensure the image scales properly to fill the container while maintaining aspect ratio */
		}
	</style>
	<!-- INNER PAGE BANNER -->
	<div class="wt-bnr-inr overlay-wraper"
		style="background-image:url({{ asset('assets/images/banner/product-banner.jpg') }});">
		<div class="overlay-main opacity-07 bg-black"></div>
		<div class="container">
			<div class="wt-bnr-inr-entry">
				<h1 class="text-white">Product</h1>
			</div>
		</div>
	</div>
	<!-- INNER PAGE BANNER END -->

	<!-- BREADCRUMB ROW -->
	<div class="bg-gray-light p-tb20">
		<div class="container">
			<ul class="wt-breadcrumb breadcrumb-style-2">
				<li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
				<li>Product</li>
			</ul>
		</div>
	</div>
	<!-- BREADCRUMB ROW END -->

	<!-- SECTION CONTENT START -->
	<div class="section-full p-t80 p-b50">
		<div class="container">
			<div class="section-content">
				<div class="row">

					<!-- PRODUCT LIST START -->
					<div class="col-lg-12 col-md-12">
						<div class="p-b10">
							<h3 class="text-uppercase">Our Products</h3>
							<div class="wt-separator-outer m-b30">
								<div class="wt-separator style-icon">
									<i class="fa fa-leaf text-black"></i>
									<span class="separator-left site-bg-primary"></span>
									<span class="separator-right site-bg-primary"></span>
								</div>
							</div>
						</div>

						<div class="row">
							@foreach ($products as $product)
								<div class="col-lg-4 col-md-6 col-sm-6 m-b30">
									<div class="wt-box wt-product-box">
										<div class="wt-thum-bx wt-img-effect zoom-slow br-10">
											<a href="{{ Storage::url($product->image) }}" data-lightbox="products" data-title="{{ $product->name }}">
												<img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
											</a>
										</div>
										<div class="wt-info text-center">
											<div class="p-a10 bg-white">
												<h4 class="wt-title">
													<a href="#">{{ $product->name }}</a>
												</h4>
												{{-- <div class="rating-bx">
													@for ($i = 1; $i <= 5; $i++)
														<i class="fa fa-star {{ $product->rating >= $i ? '' : '-o' }}"></i>
													@endfor
												</div> --}}
											</div>
										</div>
									</div>
								</div>
							@endforeach
						</div>
					</div>
					<!-- PRODUCT LIST END -->
				</div>
			</div>
		</div>
	</div>
	<!-- SECTION CONTENT END -->
</div>
