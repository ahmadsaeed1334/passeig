<div>
    <div>
        <x-slot name="page_title">
            {{ $page_title ?? 'Appointments' }}
        </x-slot>
        <style>
            .selected-services {
                padding: 20px 0;
            }

            .selected-services .container {
                max-width: 1200px;
                margin: 0 auto;
            }

            .selected-services h3 {
                font-size: 24px;
                margin-bottom: 20px;
                text-align: center;
            }

            .service-card {
                background-color: #f9f9f9;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                margin-bottom: 20px;
            }

            .service-name {
                font-size: 18px;
                font-weight: bold;
                margin: 0;
            }

            .service-duration,
            .service-amount {
                font-size: 16px;
                margin: 5px 0;
            }

            .form-control {
                width: 100%;
                padding: 10px;
                margin-top: 10px;
            }

            .btn-secondary {
                background-color: #6c757d;
                color: #fff;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                width: 100%;
            }

            .btn-secondary:hover {
                background-color: #5a6268;
            }

            .btn-primary {
                background-color: #007bff;
                color: #fff;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                width: 100%;
            }

            .btn-primary:hover {
                background-color: #0056b3;
            }

            .appointment-btns {
                font-size: 30px;
                font-weight: 300;
                border: 1px solid #645242;
                background-color: transparent;
                color: #645242;
                ;
                width: 100%;
                height: 70px;
                display: flex;
                text-align: center;
                justify-content: center;
                align-items: center;
                cursor: pointer;
            }

            button.btn.btn-regulars {
                border: 1px solid var(--secondary-color);
                border-radius: 0;
                padding: 7px 33px;
                font-size: 22px;
                color: var(--secondary-color);
                /* width: 335px; */
            }

        </style>
        <!-- Appointment Section -->
        <section class="appointment-page">
            <div class="container">
                <div class="pb-5 px-lg-2 px-1">
                    <h2 class="animation">Make Appointments</h2>
                    <div class="col-lg-8">
                        <p class="p-below animation">Risus scelerisque a non turpis vitae malesuada sed venenatis. In fringilla
                            sollicitudin euismod sed.</p>
                    </div>
                </div>
                <div class="appointment-slider">
                    <ul class="nav nav-tabs appointment-tabs" id="categorySlider">
                        @foreach($categories as $category)
                        <li class="nav-item mt-2">
                            <a class="nav-link appointment-nav-container" wire:click.prevent="selectCategory({{ $category->id }})" role="tab">
                                <div class="appointment-tab-inner flex-column d-flex align-items-center gap-3">
                                    <img src="{{ asset('storage/' . $category->icon_image) }}" alt="" width="30px" height="30px">
                                    <span>{{ $category->name }}</span>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="services-container d-flex flex-xl-row flex-column gap-5">
                    <div class="services-left border border-1 border-dark order-xl-1 order-2">
                        <p class="mb-5 px-3">Services</p>
                        <div class="inner-content">
                            @if($subCategories->isNotEmpty())
                            @foreach($subCategories as $subCategory)
                            <p class="py-3 px-3" wire:click.prevent="selectSubCategory({{ $subCategory->id }})">
                                {{ $subCategory->name }} ({{ $subCategory->appointmentServices->count() }})
                            </p>
                            @endforeach
                            @else
                            <p class="py-3 px-3">No subcategories available</p>
                            @endif
                        </div>
                    </div>

                    @if($appointmentServices->isNotEmpty())
                    <div class="services-right border border-1 border-dark order-xl-2 order-1 mt-2">
                        @foreach($appointmentServices as $service)
                        <div class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                            <div class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                <p class="fs-5 fw-light m-0">{{ $service->service_name }}</p>
                                <p class="fs-4 fw-light m-0">{{ $service->duration }} minutes</p>
                            </div>
                            <div class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                <p class="fw-bolder fs-4 sec-clr fw-400">${{ $service->amount }}</p>
                                <button wire:click="toggleServiceSelection({{ $service->id }})">
                                    {{ in_array($service->id, $selectedServices) ? 'Deselect' : 'Select' }} Service
                                </button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </section>

        @if(count($selectedServices) > 0)
        <section class="selected-services">
            <div class="container">
                <h3>Selected Services</h3>
                <div class="row">
                    @foreach($selectedServices as $serviceId)
                    @php
                    $service = $appointmentServices->find($serviceId) ?? \App\Models\AppointmentService::find($serviceId);
                    @endphp
                    @if($service)
                    <div class="col-md-4">
                        <div class="service-card">
                            <p class="service-name">{{ $service->service_name }}</p>
                            <p class="service-duration">{{ $service->duration }} minutes</p>
                            <p class="service-amount">${{ $service->amount }}</p>
                            <input type="date" id="date-{{ $serviceId }}" class="form-control" placeholder="Select Date">
                            <select id="time-{{ $serviceId }}" class="form-control mt-2">
                                @for ($hour = 0; $hour < 24; $hour++) @for ($minute=0; $minute < 60; $minute +=5) <option value="{{ sprintf('%02d:%02d', $hour, $minute) }}">
                                    {{ date('h:i A', strtotime(sprintf('%02d:%02d', $hour, $minute))) }}
                                    </option>
                                    @endfor
                                    @endfor
                            </select>
                            <button onclick="selectDateTime({{ $service->id }})" class="btn btn-regulars mt-2">Set Date & Time</button>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                <button wire:click="bookAppointments" class="btn appointment-btns mt-3">Book Appointments</button>
            </div>
        </section>
        @endif

        <script>
            function selectDateTime(serviceId) {
                const date = document.getElementById('date-' + serviceId).value;
                const time = document.getElementById('time-' + serviceId).value;
                @this.selectDateTime(serviceId, date, time);
            }

        </script>



        <!-- Subscribe Section -->
        <section id="subscribe">
            <img src="{{ asset('assets/images/subscribe-petal-left.png')}}" alt="" class="subscribe-petal-left img-fluid">
            <div class="container">
                <div class="subscribe-content-wrapper">
                    <h2 class="my-5">Subscribe To Receive <br> Waxly News & Offers</h2>
                    <div class="col-md-7 mx-auto subscribe-email">
                        <form id="email-collector" class="d-flex">
                            <input type="email" name="email" class="w-100 p-3" placeholder="Email">
                            <button type="submit" class="btn"><img src="{{ asset('assets/images/submit.svg')}}"></button>
                        </form>
                    </div>
                </div>
                <img src="{{ asset('assets/images/subscribe-petal-right.png')}}" alt="" class="subscribe-petal-right img-fluid">
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        <script>
            document.addEventListener('livewire:load', function() {
                initializeSlider();

                Livewire.hook('message.processed', (message, component) => {
                    initializeSlider();
                });

                // Ensure the first slider item is active
                document.querySelector('.appointment-slider ul li:first-child .nav-link').classList.add('active');
            });

            function initializeSlider() {
                $('.appointment-slider ul').slick({
                    infinite: true
                    , slidesToShow: 7, // Number of items to show
                    slidesToScroll: 1
                    , autoplay: true
                    , autoplaySpeed: 1500
                    , arrows: false
                    , dots: false
                    , pauseOnHover: false
                    , responsive: [{
                            breakpoint: 1380, // Extra-large width breakpoint
                            settings: {
                                slidesToShow: 6
                                , slidesToScroll: 1
                            }
                        }
                        , {
                            breakpoint: 1200
                            , settings: {
                                slidesToShow: 4
                                , slidesToScroll: 1
                            }
                        }
                        , {
                            breakpoint: 1020
                            , settings: {
                                slidesToShow: 3
                                , slidesToScroll: 1
                            }
                        }
                        , {
                            breakpoint: 800
                            , settings: {
                                slidesToShow: 2
                                , slidesToScroll: 1
                            }
                        }
                        , {
                            breakpoint: 400
                            , settings: {
                                slidesToShow: 1
                                , slidesToScroll: 1
                            }
                        }
                    ]
                });
            }

            document.addEventListener('livewire:load', function() {
                initializeSlider();

                Livewire.hook('message.processed', (message, component) => {
                    initializeSlider();
                });
            });

            document.addEventListener('DOMContentLoaded', function() {
                const container = document.querySelector('.appointment-slider ul');
                const items = container.querySelectorAll('li');
                let isDown = false;
                let startX;
                let scrollLeft;

                container.addEventListener('mousedown', (e) => {
                    isDown = true;
                    container.classList.add('active');
                    startX = e.pageX - container.offsetLeft;
                    scrollLeft = container.scrollLeft;
                });

                container.addEventListener('mouseleave', () => {
                    isDown = false;
                    container.classList.remove('active');
                });

                container.addEventListener('mouseup', () => {
                    isDown = false;
                    container.classList.remove('active');
                });

                container.addEventListener('mousemove', (e) => {
                    if (!isDown) return;
                    e.preventDefault();
                    const x = e.pageX - container.offsetLeft;
                    const walk = (x - startX) * 3; //scroll-fast
                    container.scrollLeft = scrollLeft - walk;
                });
            });

        </script>
    </div>
</div>
