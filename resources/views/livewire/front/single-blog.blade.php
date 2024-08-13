<main>
	<x-slot name="page_title">
		{{ $page_title ?? 'Blogs' }}
	</x-slot>

	<section class="blog-details-section">
		<div class="container">
			<div class="mb-5">
				<img src="{{ asset('storage/' . $blog->image) }}" alt="" class="blog-img img-fluid w-100">
				<div class="blog-content">
					<h6 class="fs-1 fw-400 mt-3">{{ $blog->title }}</h6>
					{{-- <p class="fs-3 mt-5">{!! nl2br(($blog->description)) !!}</p> --}}
					<p class="fs-3 mt-5">{!! $blog->description !!}
					</p>
				</div>
			</div>
			@include('livewire.front.show')
			<div class="single_cards">
				<div class="row gy-5">
					@foreach ($relatedBlogs as $relatedBlog)
						<div class="col-lg-6">
							<div class="other_card">
								<div class="img">
									<img src="{{ asset('storage/' . $relatedBlog->image) }}" alt="services">
								</div>
								<div class="card_info">

									<h4 class="title">{{ $relatedBlog->title }}</h4>
									<div class="dic_single_card">
										<p>{{ \Illuminate\Support\Str::words(strip_tags($relatedBlog->description), 25, '...') }}</p>
										{{--  <p>{{ \Illuminate\Support\Str::limit($relatedBlog->description, 50) }}</p>  --}}


										<a href="{{ route('single-blog', $relatedBlog->id) }}" class="btn btn-regular"><img
												src="{{ asset('assets/images/arrow_right.png') }}" alt="arrow"></a>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>

		</div>
	</section>
	<!-- Book Appointment-Section -->
	@foreach ($appointments as $appointment)
		<section class="book-appointment-section">
			<img src="{{ asset('assets/images/appointment-sec-left.png') }}" alt="" class="appointment-left">
			<div class="container">
				<div class="text-center">
					<div class="col-12 mx-auto">
						<h2 class="text-uppercase mb-4 text-white">{{ $appointment->title }}/h2>
							<p class="lead p-below mb-4 text-white">
								{{ \Illuminate\Support\Str::words(strip_tags($appointment->long_description)) }}</p>
							<button class="appointment-btn mt-5">{{ $appointment->button }}</button>
					</div>
				</div>
			</div>
			<img src="{{ asset('assets/images/appointment0sec-right.png') }}" alt="" class="appointment-right">
		</section>
	@endforeach
	<!-- Subscribe Section -->
	{{-- <section id="subscribe">
        <img src="{{ asset('images/subscribe-petal-left.png') }}" alt="" class="subscribe-petal-left img-fluid">
    <div class="container">
        <div class="subscribe-content-wrapper">
            <h2 class="my-5">Subscribe To Receive <br> Waxly News & Offers</h2>
            <div class="col-md-7 mx-auto subscribe-email">
                <form id="email-collector" class="d-flex">
                    <input type="email" name="email" class="w-100 p-3" placeholder="Email">
                    <button type="submit" class="btn"><img src="{{ asset('images/submit.svg') }}"></button>
                </form>
            </div>
        </div>
    </div>
    <img src="{{ asset('images/subscribe-petal-right.png') }}" alt="" class="subscribe-petal-right img-fluid">
    </section> --}}
</main>
