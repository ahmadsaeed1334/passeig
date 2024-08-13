<div>
    <x-slot name="page_title">
        {{ $page_title ?? 'Services' }}
    </x-slot>
    <main id="hero">
        @foreach($servicesTitles as $servicesTitle)
        <section>
            <div class="container">
                <div class="text-center">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="animation">{{ $servicesTitle->title }}</h2>
                        <p class="lead mb-4 p-below animation"> {!!$servicesTitle->long_description!!}</p>
                        {{-- <p class="lead mb-4 p-below animation"> {{ \Illuminate\Support\Str::words(strip_tags($servicesTitle->long_description)) }}</p> --}}
                    </div>
                </div>
            </div>
        </section>
        @endforeach
        <section class="py_section offer_section" style="background-color: transparent !important;">
            <div class="container">
                <h3 class="animation text-center">SERVICES WE OFFER</h3>
                <p class="lead mb-4 p-below animation text-center">Be Relax' innovative, high-end and practical products will become your inseparable companions wherever you go. Uniting a sense of ultimate comfort with a perfect style, they are designed to enhance passenger’s journey and recovery.</p>
                <div class="services_cards pt-5">
                    <div class="row gy-5">
                        @foreach ($services as $service)
                        <div class="col-lg-4">

                            <a href="{{ route('single-service', $service->id) }}" class="card_services animation">
                                <div class="card_content">
                                    <img src="{{ asset('storage/' . $service->image) }}" class="w--100" width="100%" height="350px" alt="card_img">
                                    <p class="card_title animation">{{ $service->title }}</p>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="py_section offer_section">
        <div class="container">
            <h3 class="animation text-center">SERVICES WE OFFER</h3>
            <p class="lead mb-4 p-below animation text-center">Be Relax' innovative, high-end and practical products
                will become your inseparable companions wherever you go. Uniting a sense of ultimate comfort with a
                perfect style, they are designed to enhance passenger’s journey and recovery.</p>
            <div class="services_cards pt-5">
                <div class="row gy-5">
                    <div class="col-lg-8">
                        <a href="./single_services.html" class="card_services animation">
                            <div class="card_content">
                                <img src="../images/services_card1.png" class="w-100" alt="card_img">
                                <p class="card_title animation">Tratamientos esteticos</p>
                            </div>
                        </a>
                    </div>
                   <div class="col-lg-4">
                        <a href="./single_services.html" class="card_services animation">
                            <div class="card_content">
                                <img src="../images/services_card2.png" class="w-100" alt="card_img">
                                <p class="card_title animation">Medicina estetica</p>
                            </div>
                        </a>
                   </div>
                   <div class="col-lg-8">
                        <a href="./single_services.html" class="card_services animation">
                            <div class="card_content">
                                <img src="../images/services_card4.png" class="w-100" alt="card_img">
                                <p class="card_title animation">Massage</p>
                            </div>
                        </a>
                   </div>
                   <div class="col-lg-4">
                        <a href="./single_services.html" class="card_services animation">
                            <div class="card_content">
                                <img src="../images/services_card3.png" class="w-100" alt="card_img">
                                <p class="card_title animation">Pestañas y cejas</p>
                            </div>
                        </a>
                   </div>
                   <div class="col-lg-8">
                        <a href="./single_services.html" class="card_services animation">
                            <div class="card_content">
                                <img src="../images/services_card5.png" class="w-100" alt="card_img">
                                <p class="card_title animation">Depilacion</p>
                            </div>
                        </a>
                   </div>
                   <div class="col-lg-4">
                        <a href="./single_services.html" class="card_services animation">
                            <div class="card_content">
                                <img src="../images/services_card6.png" class="w-100" alt="card_img">
                                <p class="card_title animation">Manicura y pedicura</p>
                            </div>
                        </a>
                   </div>
                   <div class="col-12">
                        <a href="./single_services.html" class="card_services animation">
                            <div class="card_content">
                                <img src="../images/services_card7.png" class="w-100" alt="card_img">
                                <p class="card_title animation">Men services</p>
                            </div>
                        </a>
                   </div>

                </div>

            </div>
        </div>
    </section> --}}

        <!-- Book Appointment-Section -->
        @foreach($appointments as $appointment)
        <section class="book-appointment-section">
            <img src="{{ asset('assets/images/appointment-sec-left.png')}}" alt="" class="appointment-left">
            <div class="container">
                <div class="text-center">
                    <div class="col-12 mx-auto">
                        <h2 class="text-uppercase text-white mb-4">{{ $appointment->title }}</h2>
                        <p class="lead mb-4 p-below text-white">{{ \Illuminate\Support\Str::words(strip_tags($appointment->long_description)) }}</p>
                        <a href="{{ route('appointments') }}" class="appointment-btn mt-5">{{ $appointment->button }}</a>
                    </div>
                </div>
            </div>
            <img src="{{ asset('assets/images/appointment0sec-right.png')}}" alt="" class="appointment-right">
        </section>
        @endforeach
        <!-- Subscribe Section -->
        @include('livewire.front.subscribe')

    </main>
</div>
