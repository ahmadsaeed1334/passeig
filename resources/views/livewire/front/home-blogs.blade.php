<section class="blogs-section">
    <div class="container">
        <div class="card service-card custom-margin">
            <div class="card-body card-body-blog">
                <h1 class="text-aboutus bold moveUpDown">Blogs</h1>
                <div class="row blog-margin">
                    @if ($blogs->isEmpty())
                        <p>No blogs available.</p>
                    @else
                        @foreach ($blogs as $index => $blog)
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card blog-card blog-card{{ $index + 1 }} fade-{{ $index == 0 ? 'left' : ($index == 1 ? 'in-up' : 'right') }}-blog">
                                <img src="{{ asset('storage/' . $blog->image) }}" class="card-img-top" alt="Blog {{ $index + 1 }}">
                                <div class="card-body text-center">
                                    <p class="card-text">{{ \Illuminate\Support\Str::words(strip_tags($blog->description), 20, '...') }}</p>
                                    <a href="{{ route('single-blog', $blog->id) }}" class="custom-btn btn-11">Read more</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
