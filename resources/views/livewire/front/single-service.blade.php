<div>
    <x-slot name="page_title">
        {{ $page_title ?? 'Services' }}
    </x-slot>
<section id="hero">
    <div class="container">
        <div class="text-center">
            <div class="col-lg-8 mx-auto">
                <h2 class="animation">{{ $service->title }}</h2>
                <p class="lead mb-4 p-below animation"> {{ \Illuminate\Support\Str::words(strip_tags($service->short_description)) }}</p>
            </div>
        </div>
    </div>
</section>
<section class="py_section">
    <div class="container">
        <div class="single_cards">
            <div class="row gy-5">
                <div class="col-12 card_main">
                    <img src="{{ asset('storage/' . $service->image) }}" alt="services">
                    <p>{{ \Illuminate\Support\Str::words(strip_tags($service->long_description)) }}</p>
                </div>
                @foreach ($relatedServices as $relatedService)
                    <div class="col-lg-6">
                        <div class="other_card">
                            <div class="img">
                                <img src="{{ asset('storage/' . $relatedService->image) }}" alt="services">
                            </div>
                            <div class="card_info">
                                <p class="price">Desde de 60€</p>
                                <h4 class="title">{{ $relatedService->title }}</h4>
                                <div class="dic_single_card">
                                    <p> {{ \Illuminate\Support\Str::words(strip_tags($relatedService->short_description, 50)) }}</p>
                                    <a href="{{ route('single-service', $relatedService->id) }}" class="btn btn-regular"><img src="{{ asset('assets/images/arrow_right.png') }}" alt="arrow"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
</div>
