<div>
    <x-slot name="page_title">
        {{ $page_title ?? 'Products' }}
    </x-slot>
    <section id="hero">

        @foreach($productTitles as $productTitle)

        <div class="container">
            <div class="text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="animation">{{ $productTitle->title }}</h2>
                    <p class="lead mb-4 p-below animation">{{ $productTitle->long_description }}</p>
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <section class="py_section products_section">
        <div class="container">
            <h3 class="text-center animation">EXPLORE OUR PRODUCTS</h3>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="product_item animation">
                        <p class="product_item_title">
                        IS <br> CLINICAL</p>
                        <img src="{{asset('assets/images/product_card1.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="product_item animation">
                        <p class="product_item_title">
                        Travel <br>
                        Accessories</p>
                        <img src="{{asset('assets/images/product_card2.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="product_item animation">
                        <p class="product_item_title">
                        Massage <br>
                        Devices</p>
                        <img src="{{asset('assets/images/product_card3.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="product_item animation">
                        <p class="product_item_title">
                            Beauty <br>
                            Devices
                        </p>

                        <img src="{{asset('assets/images/product_card4.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slider_products products py_section pt-5">
        <div class="container">
            <div class="grid-x grid-padding-x align-center">
                <div class="cell medium-9 small-12">
                    <div class="products-slider animation slider-nav">
                        @foreach($products as $product)
                            <div class="sin-testiImage">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="cell pt-5 small-12 ">
                    <div class="products-text-slider slider-for">
                        @foreach($products as $product)
                            <div class="sin-testiText">
                                <h2>{{ $product->name }}</h2>
                                <p>{{ $product->short_description }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function () {
            $('.products-slider').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.products-text-slider'
            });
            $('.products-text-slider').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                asNavFor: '.products-slider',
                dots: true,
                centerMode: true,
                focusOnSelect: true
            });
        });
    </script> --}}

    <style>
        .products-slider img {
            width: 100%;
            height: 100px;
            object-fit: cover;
        }
        .products-text-slider {
            text-align: center;
        }
    </style>
    <!-- Book Appointment-Section -->
    @foreach($appointments as $appointment)
    <section class="book-appointment-section">
        <img src="{{ asset('assets/images/appointment-sec-left.png')}}" alt="" class="appointment-left">
        <div class="container">
            <div class="text-center">
                <div class="col-12 mx-auto">
                    <h2 class="text-uppercase text-white mb-4">{{ $appointment->title }}/h2>
                    <p class="lead mb-4 p-below text-white">{{ \Illuminate\Support\Str::words(strip_tags($appointment->long_description)) }}</p>
                    <button class="appointment-btn mt-5">{{ $appointment->button }}</button>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/images/appointment0sec-right.png')}}" alt="" class="appointment-right">
    </section>
    @endforeach
    <!-- Subscribe Section -->
    <section id="subscribe">
        <img src="{{asset('assets/images/subscribe-petal-left.png')}}" alt="" class="subscribe-petal-left img-fluid">
        <div class="container">
            <div class="subscribe-content-wrapper">
                <h2 class="my-5">Subscribe To Receive <br> Waxly News & Offers</h2>
                <div class="col-md-7 mx-auto subscribe-email">
                    <form id="email-collector" class="d-flex">
                        <input type="email" name="email" class="w-100 p-3" placeholder="Email">
                        <button type="submit" class="btn"><img src="{{asset('assets/images/submit.svg')}}"></button>
                    </form>
                </div>
            </div>
        </div>
        <img src="{{asset('assets/images/subscribe-petal-right.png')}}" alt="" class="subscribe-petal-right img-fluid">
    </section>
</div>
