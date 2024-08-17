<div>
    <x-slot name="page_title">
        {{ $page_title ?? 'Gallery' }}
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
            /* padding: 10px; */
            /* margin-top: 10px; */
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
        }

    </style>
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{ asset('assets/images/banner/gallery-banner.jpg') }});">
        <div class="overlay-main opacity-07 bg-black"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Appointment</h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                <li>Appointment</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->



    <!-- PRICING SECTION START -->
    <div class="section-full bg-gray p-t100 p-b70">
        <x-slot name="page_title">
            {{ $page_title ?? 'Appointments' }}
        </x-slot>

        <div class="container">
            <!-- TITLE START-->
            <div class="section-head text-center">
                <h1><span class="site-text-primary">{{ $servicesTitle->title ?? 'Appointments' }}</span> </h1>
                <div class="wt-separator-outer">
                    <div class="wt-separator style-icon">
                        <i class="fa fa-leaf text-black"></i>
                        <span class="separator-left site-bg-primary"></span>
                        <span class="separator-right site-bg-primary"></span>
                    </div>
                </div>
                <p>{{ $servicesTitle->long_description ?? 'Choose your desired appointment services' }}</p>
            </div>
            <!-- TITLE END-->
            <div wire:ignore class="section-content">
                <div class="owl-carousel our-pricing-carousel owl-btn-vertical-center owl-btn-hover nav nav-tabs">
                    @foreach ($categories as $category)
                    <div class="item {{ $loop->first ? 'active-arrow active' : '' }} br-10">
                        <a data-bs-toggle="tab" href="#appointment-item{{ $category->id }}" class="tab-block onHover br-10">
                            <div class="our-pricing-tab radius-sm bdr-1 bdr-gray br-10">
                                <div class="wt-icon-box-wraper center p-lr10">
                                    <div class="icon-lg m-b5">
                                        <span class="icon-cell text-black">
                                            <img src="{{ asset('storage/' . $category->icon_image) }}" alt="{{ $category->name }}">
                                        </span>
                                    </div>
                                    <div class="icon-content">
                                        <span class="wt-tilte text-uppercase p-b10 font-weight-600 inline-block">
                                            {{ $category->name }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>

                <div class="tab-content m-b30">
                    @foreach ($categories as $category)
                    <div id="appointment-item{{ $category->id }}" class="pricing-tab-content-block tab-pane {{ $loop->first ? 'active-arrow' : '' }} br-10">
                        <div class="section-content p-t50">
                            <div class="wt-tabs vertical bg-tabs">
                                <ul class="nav nav-tabs">
                                    @foreach ($category->appointmentServices as $service)
                                    <li class="nav-item br-10">
                                        <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-bs-toggle="tab" href="#appointment-tab{{ $service->id }}">
                                            {{ $service->service_name }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="tab-content p-l50">
                                    @foreach ($category->appointmentServices as $service)
                                    <div id="appointment-tab{{ $service->id }}" class="tab-pane {{ $loop->first ? 'active' : '' }} br-10">
                                        <div class="pricing-tab-inner">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="wt-media wt-img-effect zoom-slow br-10">
                                                        <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->service_name }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="wt-tilte">
                                                        <h3 class="font-26 font-weight-400">{{ $service->service_name }}</h3>
                                                        <h4 class="site-text-primary">{{ $service->amount }}€</h4>
                                                        <p>{!! $service->description !!}</p>
                                                        <button wire:click="toggleServiceSelection({{ $service->id }})" class="site-button skew-icon-btn radius-sm br-10">
                                                            <span class="font-weight-700 text-uppercase p-lr15 inline-block">
                                                                @if (in_array($service->id, $selectedServices))
                                                                Deselect
                                                                @else
                                                                Select
                                                                @endif
                                                                Service
                                                            </span>
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Selected Services Section -->
            @if (count($selectedServices) > 0)
            <section class="selected-services">
                <div class="container">
                    <h3>Selected Services</h3>
                    <div class="row">
                        @foreach ($selectedServices as $serviceId)
                        @php
                        $service = $appointmentServices->find($serviceId) ?? \App\Models\AppointmentService::find($serviceId);
                        @endphp
                        @if ($service)
                        <div class="col-md-4">
                            <div class="service-card">
                                <p class="service-name">{{ $service->service_name }}</p>
                                <p class="service-duration">{{ $service->duration }} minutes</p>
                                <p class="service-amount">${{ $service->amount }}</p>
                                <input type="date" wire:model.defer="selectedDateTime.{{ $service->id }}.date" class="form-control" placeholder="Select Date">
                                <select wire:model.defer="selectedDateTime.{{ $service->id }}.time" class="form-control mt-2">
                                    @for ($hour = 0; $hour < 24; $hour++) @for ($minute=0; $minute < 60; $minute +=5) <option value="{{ sprintf('%02d:%02d', $hour, $minute) }}">
                                        {{ date('h:i A', strtotime(sprintf('%02d:%02d', $hour, $minute))) }}
                                        </option>
                                        @endfor
                                        @endfor
                                </select>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>



                    <button style="--clr:#225260" wire:click="bookAppointments" class="button appointment-btns mt-3"><span>Book
                            Appointments</span><i></i></button>
                    {{-- <button wire:click="bookAppointments" class="btn appointment-btns mt-3">Book Appointments</button> --}}
                </div>
            </section>
            @endif



        </div>
    </div>
    <!-- PRICING SECTION END -->

    <script>
        function selectDateTime(serviceId) {
            const date = document.getElementById('date-' + serviceId).value;
            const time = document.getElementById('time-' + serviceId).value;

            if (date && time) {
                @this.call('selectDateTime', serviceId, date, time);
            } else {
                alert('Please select both date and time.');
            }
        }

    </script>
    @livewireScripts

</div>
