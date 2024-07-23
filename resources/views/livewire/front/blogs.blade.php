<div>
    <x-slot name="page_title">
        {{ $page_title ?? 'Blogs' }}
    </x-slot>
    <main>
        @foreach($blogTitles as $blogTitle)
        <!-- Hero Section -->
        <section id="hero">
            <div class="container">
                <div class="text-center">
                    <div class="col-12 mx-auto">
                        <h2 class="text-uppercase animation">{{ $blogTitle->title }}</h2>
                        <p class="lead mb-4 p-below animation">{{ \Illuminate\Support\Str::words(strip_tags($blogTitle->long_description)) }}</p>
                    </div>
                </div>
            </div>
        </section>
        @endforeach

        <!-- Blog-Section -->
        <section class="blog-section pb-0">
            <div class="container">
                <div class="blog-wrapper d-flex flex-column">
                    @foreach ($blogs->chunk(2) as $blogChunk)
                    <div class="d-flex flex-lg-row flex-column gap-5">
                        @foreach ($blogChunk as $blog)
                        <div class="blog animation">
                            <a href="{{ route('single-blog', $blog->id) }}">
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="" width="743px" height="371px" class="img-fluid">
                            </a>
                            <div class="mt-3">
                                <h6>{{ $blog->title }}</h6>
                                <p>{{ Str::limit(strip_tags($blog->description), 150, '...') }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Book Appointment-Section -->
        @foreach($appointments as $appointment)
        <section class="book-appointment-section">
            <img src="{{ asset('assets/images/appointment-sec-left.png')}}" alt="" class="appointment-left">
            <div class="container">
                <div class="text-center">
                    <div class="col-12 mx-auto">
                        <h2 class="text-uppercase text-white mb-4">{{ $appointment->title }}/h2>
                            <p class="lead mb-4 p-below text-white">{{ \Illuminate\Support\Str::words(strip_tags($appointment->long_description)) }}</p>
                            <a href="{{ route('appointments') }}" class="appointment-btn mt-5">{{ $appointment->button }}</a>
                    </div>
                </div>
            </div>
            <img src="{{ asset('assets/images/appointment-sec-right.png')}}" alt="" class="appointment-right">
        </section>
        @endforeach
    </main>
</div>
