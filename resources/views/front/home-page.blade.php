@extends('layouts.home')

@section('content')

@if ($singleService)
<section class="services">
    <h1 class="bold text-center">Services</h1>
    {{-- <div class="margin-t20 container">
        <img src="assets/images/swatch.png" class="corner-image" alt="Swatch Image" width="500px">
        <div class="card service-card custom-margin">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-lg-7 margin-col-text">
                        <div class="fade-left ms-4">
                            <h2 class="bold-text-h mb-3 mt-3">{{ $singleService->title }}</h2>
    <p class="bold-text-p">{{ $singleService->short_description }}</p>
    <a href="{{ route('appointments') }}" class="custom-btn btn-12"><span>Click Here!</span><span>Book
            Appointment</span></a>
    </div>
    </div>
    <div class="col-lg-5 position-relative mt-5">
        <div class="containers ms-md-4 fade-right">
            <img src="{{ asset('storage/' . $singleService->image) }}" class="main-image" alt="{{ $singleService->title }}">
            <img src="{{ asset('assets/images/Rectangle 21.png') }}" class="overlay-image" alt="Overlay">
        </div>
    </div>
    </div>
    </div>
    </div>
    </div> --}}
</section>
@endif

<section class="new-services container-fluid p-5 fade-right-left">
    <div class="row ">

        @foreach ($services as $index => $service)
        <div class=" col-lg-6 col-md-12 mb-4">
            {{-- <img src="{{ asset('assets/images/swatch.png') }}" class="corner-image2 moveLeftRight" alt="Swatch Image" width="500px"> --}}
            <div class="card service-card" style="border-radius: 10px">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-lg-12 position-relative mt-5">
                            <div class="containers animation-fadde-left ms-md-4">
                                <img src="{{ asset('storage/' . $service->image) }}" class="main-image" alt="{{ $service->title }}">
                                <img src="{{ asset('assets/images/Rectangle 21.png') }}" class="overlay-image" alt="Overlay">
                            </div>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-lg-12 animation-fadde-right margin-col-text">
                            <div class="fade-left ms-4">
                                <h2 class="bold-text-h mt-3">{{ $service->title }}</h2>
                                <p class="bold-text-p">{{ $service->short_description }}</p>
                                <a href="{{ route('appointments') }}" class="custom-btn btn-12"><span>Click Here!</span><span>Book
                                        Appointment</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>



<style>
    /* Slider */

    .customer-logos {
        margin: 0 auto;
        padding: 40px 0;
    }

    .customer-logos .slide {
        padding: 0 10px;
    }

    .customer-logos .slide img {
        display: block;
        width: 150px;
        height: 150px;
        object-fit: contain;
        margin: 0 auto;
    }

    @media (max-width: 768px) {
        .customer-logos .slide {
            min-width: auto;
        }
    }

    @media (max-width: 520px) {
        .customer-logos .slide {
            min-width: auto;
        }
    }

    @media (max-width: 400px) {
        .customer-logos .slide {
            min-width: auto;
        }
    }

    @media (max-width: 300px) {
        .customer-logos .slide {
            min-width: auto;
        }
    }

</style>
@foreach ($abouts as $about)
<section class="about-us-section fade-up">

    <div class="container">
        <img src="{{ asset('assets/images/swatch.png') }}" class="corner-image3" alt="Swatch Image" width="500px">
        <div class="card service-card custom-margin">
            <div class="card-body">
                <h2 class="text-aboutus">{{ $about->title }}</h2>

                <div class="about-us-content fade-in-up mt-sm-5 gate-margin">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="about-us-image">
                                <div class="containers ms-md-4 margin-about-t20">
                                    <img src="{{ asset('assets/images/DSC02698 1.png') }}" class="gate-image moveUpDown" alt="Facial Treatment">
                                    <img src="{{ asset('assets/images/Polygon 1.png') }}" class="overlay-images" alt="Overlay">
                                    <img src="{{ asset('assets/images/Polygon 2.png') }}" class="overlay-images2" alt="Overlay">
                                </div>
                                <div class="polygon"></div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="about-us-text text-center">
                                <p class="aboutus-p">{!! \Illuminate\Support\Str::words(strip_tags($about->long_description)) !!}</p>
                                <a href="{{ route('about-us') }}" class="about-us-button btn glow-on-hover">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endforeach
@livewire('front.home-blogs')
<!-- Partners Section -->

<section id="partners">
    <div class="container-fluid">
        <h3 class="my-5 text-center">Our Partners</h3>
        <section class="customer-logos slider">
            @foreach ($partners as $partner)
            <div class="slide">
                <img src="{{ asset('storage/' . $partner->partner_image) }}" alt="{{ $partner->name }}" class="partner-logo img-fluid">
            </div>
            @endforeach
        </section>
    </div>
</section>

<div class="container mb-5 mt-5">
    <div class="row product-section">
        <div class="col-lg-4 card-margin">
            <div class="card card-product product-card">
                <img src="assets/images/product1.png" class="card-img-top" alt="Hand Massage">
                <div class="card-body product-card">
                    <p class="product-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dictum vehicula
                        elit, vel accumsan sempert incidunt.</p>
                    <div class="d-flex justify-content-between">
                        <div class="text-primary" style='font-size:25px;'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="fa-brands fa-x-twitter" viewBox="0 0 16 16">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                            </svg>
                        </div>
                        <a href="#" class="btn btn-primary">VISIT SITE</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-product product-card">
                <img src="assets/images/Group 826.png" class="card-img-top" alt="Face Massage">
                <div class="card-body product-card">
                    <p class="product-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dictum vehicula
                        elit, vel accumsan sempert incidunt.</p>
                    <div class="d-flex justify-content-between">
                        <div class="text-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                            </svg>
                        </div>
                        <a href="#" class="btn btn-primary">VISIT SITE</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 card-margin">
            <div class="card card-product product-card">
                <img src="assets/images/product3.png" class="card-img-top" alt="Beauty Products">
                <div class="card-body product-card">
                    <p class="product-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dictum vehicula
                        elit, vel accumsan sempert incidunt.</p>
                    <div class="d-flex justify-content-between">
                        <div class="text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                            </svg>
                        </div>
                        <a href="#" class="btn btn-primary">VISIT SITE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slider = document.querySelector('.customer-logos');
        let isDown = false;
        let startX;
        let scrollLeft;

        slider.addEventListener('mousedown', (e) => {
            isDown = true;
            slider.classList.add('dragging');
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });

        slider.addEventListener('mouseleave', () => {
            isDown = false;
            slider.classList.remove('dragging');
        });

        slider.addEventListener('mouseup', () => {
            isDown = false;
            slider.classList.remove('dragging');
        });

        slider.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const walk = (x - startX) * 2; //scroll-fast
            slider.scrollLeft = scrollLeft - walk;
        });

        function autoScroll() {
            slider.scrollLeft += 1;
            if (slider.scrollLeft >= slider.scrollWidth - slider.clientWidth) {
                slider.scrollLeft = 0;
            }
        }

        setInterval(autoScroll, 20);

        window.addEventListener('resize', () => {
            if (window.innerWidth < 768) {
                slider.scrollLeft = 0;
            }
        });
    });

</script>


<script>
    $(document).ready(function() {
        $('.customer-logos').slick({
            slidesToShow: 5
            , slidesToScroll: 1
            , autoplay: true
            , autoplaySpeed: 1500
            , arrows: false
            , dots: false
            , pauseOnHover: false
            , responsive: [{
                    breakpoint: 768
                    , settings: {
                        slidesToShow: 4
                    }
                }
                , {
                    breakpoint: 520
                    , settings: {
                        slidesToShow: 3
                    }
                }
                , {
                    breakpoint: 400
                    , settings: {
                        slidesToShow: 2
                    }
                }
                , {
                    breakpoint: 300
                    , settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });

</script>


<!-- Book Appointment-Section -->
@foreach ($appointments as $appointment)
<section class="book-appointment-section">
    <img src="{{ asset('assets/images/appointment-sec-left.png') }}" alt="" class="appointment-left">
    <div class="container">
        <div class="text-center">
            <div class="col-12 mx-auto">
                <h2 class="text-uppercase mb-4 text-white">{{ $appointment->title }}</h2>
                <p class="lead p-below mb-4 text-white">
                    {{ \Illuminate\Support\Str::words(strip_tags($appointment->long_description), 30) }}</p>
                <a href="{{ route('appointments') }}" class="appointment-btn mt-5">{{ $appointment->button }}</a>
            </div>
        </div>
    </div>
    <img src="{{ asset('assets/images/appointment0sec-right.png') }}" alt="" class="appointment-right">
</section>
@endforeach
@include('livewire.front.subscribe')
<!-- Subscribe Section -->
@endsection
