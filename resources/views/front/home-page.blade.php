@extends('layouts.home')

@section('content')


<section id="sec">
    @foreach ($services as $index => $service)
    <div class="upper-container">
        <img src="{{ asset('assets/images/petal' . (($index % 2) + 1) . '.png')}}" alt="" class="petal{{ ($index % 2) + 1 }}" style="opacity: 0.3">
        <div class="container">
            <div class="block block-{{ $index + 1 }} py-5">
                <div class="pb-5 {{ $index % 2 == 0 ? 'px-5' : 'd-flex justify-content-end' }} animation">
                    <div class="col-lg-12">
                        <h2 class="animation">{{ $service->title }}</h2>
                        <p class="p-below animation">{{ $service->short_description }}</p>
                    </div>
                </div>
                <img class="img-fluid animation" src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}">
            </div>
        </div>
        <img src="{{ asset('assets/images/petal' . (($index % 2) + 2) . '.png')}}" alt="" class="petal{{ ($index % 2) + 2 }} animation" style="opacity: 0.3">
    </div>
    @endforeach
</section>

{{--
<style>
    .customer-logos {
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        width: 100%;
        margin: 0 auto;
    }

    .customer-logos .slide {
        padding: 10px;
        box-sizing: border-box;
    }

    .customer-logos .slide img {
        display: block;
        max-width: 100%;
        height: auto;
        margin: 0 auto;
    }
</style> --}}
<style>
    /* Slider */
    .customer-logos {
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        width: 100%;
        margin: 0 auto;
        position: relative;
    }

    .customer-logos .slide {
        padding: 10px;
        box-sizing: border-box;
        min-width: 20%;
        transition: transform 0.5s ease;
    }

    .customer-logos .slide img {
        display: block;
        max-width: 100%;
        height: auto;
        margin: 0 auto;
    }

    @media (max-width: 768px) {
        .customer-logos .slide {
            min-width: 25%;
        }
    }

    @media (max-width: 520px) {
        .customer-logos .slide {
            min-width: 33.33%;
        }
    }
    </style>
<!-- Partners Section -->
<!-- Partners Section -->
<section id="partners">
    <div class="container-fluid">
        {{-- <h3 class="my-5 animation">Our Partners</h3> --}}
        <div class="customer-logos slider animation">
            <div class="slide"><img src="{{ asset('assets/images/partner.png')}}"></div>
            <div class="slide"><img src="{{ asset('assets/images/partner-1.png')}}"></div>
            <div class="slide"><img src="{{ asset('assets/images/partner-2.png')}}"></div>
            <div class="slide"><img src="{{ asset('assets/images/partner-3.png')}}"></div>
            <div class="slide"><img src="{{ asset('assets/images/partner-4.png')}}"></div>
            <div class="slide"><img src="{{ asset('assets/images/partner.png')}}"></div>
            <div class="slide"><img src="{{ asset('assets/images/partner-1.png')}}"></div>
            <div class="slide"><img src="{{ asset('assets/images/partner-2.png')}}"></div>
            <div class="slide"><img src="{{ asset('assets/images/partner-3.png')}}"></div>
            <div class="slide"><img src="{{ asset('assets/images/partner-4.png')}}"></div>
        </div>
    </div>
</section>

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
    // $(document).ready(function(){
    //     $('.customer-logos').slick({
    //         slidesToShow: 5,
    //         slidesToScroll: 1,
    //         autoplay: true,
    //         autoplaySpeed: 1500,
    //         arrows: false,
    //         dots: false,
    //         pauseOnHover: false,
    //         responsive: [{
    //             breakpoint: 768,
    //             settings: {
    //                 slidesToShow: 4
    //             }
    //         }, {
    //             breakpoint: 520,
    //             settings: {
    //                 slidesToShow: 3
    //             }
    //         }]
    //     });
    // });
</script>

<!-- Book Appointment-Section -->
@foreach($appointments as $appointment)
<section class="book-appointment-section">
    <img src="{{ asset('assets/images/appointment-sec-left.png')}}" alt="" class="appointment-left">
    <div class="container">
        <div class="text-center">
            <div class="col-12 mx-auto">
                <h2 class="text-uppercase text-white mb-4">{{ $appointment->title }}</h2>
                <p class="lead mb-4 p-below text-white">{{ \Illuminate\Support\Str::words(strip_tags($appointment->long_description), 30) }}</p>
                <button class="appointment-btn mt-5">{{ $appointment->button }}</button>
            </div>
        </div>
    </div>
    <img src="{{ asset('assets/images/appointment0sec-right.png')}}" alt="" class="appointment-right">
</section>
@endforeach

<!-- Subscribe Section -->
<section id="subscribe">
    <img src="{{ asset('assets/images/subscribe-petal-left.png')}}" alt="" class="subscribe-petal-left img-fluid animation">
    <div class="container">
        <div class="subscribe-content-wrapper">
            <h2 class="my-5 animation">Subscribe To Receive <br> Waxly News & Offers</h2>
            <div class="col-md-7 mx-auto subscribe-email">
                <form id="email-collector" class="d-flex animation">
                    <input type="email" name="email" class="w-100 p-3" placeholder="Email">
                    <button type="submit" class="btn"><img src="{{ asset('assets/images/submit.svg')}}"></button>
                </form>
            </div>
        </div>
    </div>
    <img src="{{ asset('assets/images/subscribe-petal-right.png')}}" alt="" class="subscribe-petal-right img-fluid animation">
</section>

@endsection
