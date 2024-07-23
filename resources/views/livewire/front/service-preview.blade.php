<!-- resources/views/livewire/front/service-preview.blade.php -->

<div>
    <section id="hero">
        <div class="container">
            <div class="text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="animation">{{ $title }}</h2>
                    <p class="lead mb-4 p-below animation">{{ \Illuminate\Support\Str::words(strip_tags($short_description)) }}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py_section">
        <div class="container">
            <div class="single_cards">
                <div class="row gy-5">
                    <div class="col-12 card_main">
                        @if ($image)
                        <img src="{{ Storage::url($image) }}" alt="services">
                        @else
                        <img src="{{ asset('default-image.jpg') }}" alt="services">
                        @endif
                        <p>{{ \Illuminate\Support\Str::words(strip_tags($long_description)) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
