<div>
    @foreach ($abouts as $about )


<section id="hero">
    <div class="container">
        <div class="text-center">
            <div class="col-lg-8 mx-auto">
                <h2 class="animation">{{ $about->title }}</h2>
                <p class="lead mb-4 p-below animation">{{$about->short_description}} </p>
            </div>
        </div>
    </div>
</section>
<main>
    <x-slot name="page_title">
        {{ $page_title ?? 'About Us' }}
    </x-slot>
    <section id="abt-sec">
        <div class="container-fluid">
            <img src="{{ asset('storage/' . $about->image) }}" alt="{{ $about->title }}" class="mx-auto img-fluid animation">
        </div>
    </section>
    <section id="abt-third">
        <div class="container">
            <h3 class="abt-heading animation">
                {{-- {{$about->long_description}} --}}
                {{ \Illuminate\Support\Str::words(strip_tags($about->long_description)) }}
            </h3>
        </div>
    </section>
    @endforeach
    <section id="img-sec animation">
        <img src="{{ asset('assets/images/abt-us-2.png') }}" class="mx-auto img-fluid">
    </section>

    @foreach ($passions as $passion )
    <section id="passion">
        <div class="container">
            <h2 class="animation">{{ $passion->title }}</h2>
            <p class="p-below text-center animation">
                {{-- {{$passion->long_description}} --}}
                {{ \Illuminate\Support\Str::words(strip_tags($passion->long_description)) }}
            </p>
        </div>
    </section>
    @endforeach
    <!-- Partners Section -->
    <section id="partners">
        <div class="container">
            <h3 class="my-5">Our Partners</h2>
                <section class="customer-logos slider">
                    <div class="slide"><img src="../images/partner.png"></div>
                    <div class="slide"><img src="../images/partner-1.png"></div>
                    <div class="slide"><img src="../images/partner-2.png"></div>
                    <div class="slide"><img src="../images/partner-3.png"></div>
                    <div class="slide"><img src="../images/partner-4.png"></div>
                    <div class="slide"><img src="../images/partner.png"></div>
                    <div class="slide"><img src="../images/partner-1.png"></div>
                    <div class="slide"><img src="../images/partner-2.png"></div>
                    <div class="slide"><img src="../images/partner-3.png"></div>
                    <div class="slide"><img src="../images/partner-4.png"></div>
                </section>
        </div>
    </section>
    <!-- Book Appointment-Section -->
    <section class="book-appointment-section">
        <img src="../images/appointment-sec-left.png" alt="" class="appointment-left">
        <div class="container">
            <div class="text-center">
                <div class="col-12 mx-auto">
                    <h2 class="text-uppercase text-white mb-4">Be Ready, Plan Your <br> Relaxation in Advance</h2>
                    <p class="lead mb-4 p-below text-white">Lorem ipsum dolor sit amet consectetur. Integer vel
                        augue volutpat dui
                        suscipit nunc ultrices eu. Elementum ultricies sed nunc ante massa elit sed odio. Fusce
                        neque
                        quis eu eget erat ut volutpat magna sed. Nunc in eu et dui odio tempor potenti fusce.
                        Laoreet
                        neque quis sagittis blandit ut non nibh. Dapibus.</p>
                    <button class="appointment-btn mt-5">Book Appointment</button>
                </div>
            </div>
        </div>
        <img src="../images/appointment0sec-right.png" alt="" class="appointment-right">
    </section>
    <!-- Subscribe Section -->
    <section id="subscribe">
        <img src="../images/subscribe-petal-left.png" alt="" class="subscribe-petal-left img-fluid">
        <div class="container">
            <div class="subscribe-content-wrapper">
                <h2 class="my-5">Subscribe To Receive <br> Waxly News & Offers</h2>
                <div class="col-md-7 mx-auto subscribe-email">
                    <form id="email-collector" class="d-flex">
                        <input type="email" name="email" class="w-100 p-3" placeholder="Email">
                        <button type="submit" class="btn"><img src="../images/submit.svg"></button>
                    </form>
                </div>
            </div>
        </div>
        <img src="../images/subscribe-petal-right.png" alt="" class="subscribe-petal-right img-fluid">
    </section>
</main>
</div>
