<div>
    <x-slot name="page_title">
        {{ $page_title ?? 'Appointments' }}
    </x-slot>
    <main>
        <!-- Appointment Section -->
        <section class="appointment-page">
            <div class="container">
                <div class="pb-5 px-lg-2 px-1">
                    <h2 class="aniamtion">Make Appointments</h2>
                    <div class="col-lg-8">
                        <p class="p-below aniamtion">Risus scelerisque a non turpis vitae malesuada sed venenatis. In fringilla
                            sollicitudin euismod sed.</p>
                    </div>
                </div>
                <div class="appointment-slider">
                    <ul class="nav nav-tabs appointment-tabs">
                        <li class="nav-item">
                            <a class="nav-link appointment-nav-container" id="menu1-tab" data-bs-toggle="tab"
                                href="#menu1" role="tab">
                                <div class="appointment-tab-inner flex-column d-flex align-items-center gap-3">
                                    <img src="{{ asset('assets/images/appo-icon1.png')}}" alt="" width="30px" height="30px">
                                    <span>Pelo</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link appointment-nav-container" id="menu2-tab" data-bs-toggle="tab"
                                href="#menu2" role="tab">
                                <div class="appointment-tab-inner flex-column d-flex align-items-center gap-3">
                                    <img src="{{ asset('assets/images/appo-icon2.png')}}" alt="" width="30px" height="30px">
                                    <span>Pelo</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link appointment-nav-container" id="menu3-tab" data-bs-toggle="tab"
                                href="#menu3" role="tab">
                                <div class="appointment-tab-inner flex-column d-flex align-items-center gap-3">
                                    <img src="{{ asset('assets/images/appo-icon3.png')}}" alt="" width="30px" height="30px">
                                    <span>Uñas</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link appointment-nav-container" id="menu4-tab" data-bs-toggle="tab"
                                href="#menu4" role="tab">
                                <div class="appointment-tab-inner flex-column d-flex align-items-center gap-3">
                                    <img src="{{ asset('assets/images/appo-icon4.png')}}" alt="" width="30px" height="30px">
                                    <span>Depilación</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link appointment-nav-container" id="menu5-tab" data-bs-toggle="tab"
                                href="#menu5" role="tab">
                                <div class="appointment-tab-inner flex-column d-flex align-items-center gap-3">
                                    <img src="{{ asset('assets/images/appo-icon5.png')}}" alt="" width="30px" height="30px">
                                    <span>Facial</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link appointment-nav-container" id="menu6-tab" data-bs-toggle="tab"
                                href="#menu6" role="tab">
                                <div class="appointment-tab-inner flex-column d-flex align-items-center gap-3">
                                    <img src="{{ asset('assets/images/appo-icon7.png')}}" alt="" width="30px" height="30px">
                                    <span>Masaje</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link appointment-nav-container" id="menu7-tab" data-bs-toggle="tab"
                                href="#menu7" role="tab">
                                <div class="appointment-tab-inner flex-column d-flex align-items-center gap-3">
                                    <img src="{{ asset('assets/images/appo-icon1.png')}}" alt="" width="30px" height="30px">
                                    <span>Médico y Dental</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>


                <div class="tab-content">
                    <div id="menu1" class="tab-pane fade show active" role="tabpanel" aria-labelledby="menu1-tab">
                        <div class="services-container d-flex flex-xl-row flex-column gap-5">
                            <div class="services-left border border-1 border-dark order-xl-1 order-2">
                                <p class="mb-5 px-3">Services</p>
                                <div class="inner-content">
                                    <p class="py-3 px-3">Hair Treatments <span>(4)</span></p>
                                    <p class="py-3 px-3">Men's Cut <span> (4)</span></p>
                                    <p class="py-3 px-3">Hair Treatments <span> (4)</span></p>
                                    <p class="py-3 px-3">Hairstyles <span>(4)</span> </p>
                                    <p class="last px-3">Cuts <span>(4)</span></p>
                                </div>
                            </div>
                            <div class="services-right border border-1 border-dark order-xl-2 order-1">
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div id="menu2" class="tab-pane fade" role="tabpanel" aria-labelledby="menu2-tab">
                        <div class="services-container d-flex flex-xl-row flex-column gap-5">
                            <div class="services-left border border-1 border-dark order-xl-1 order-2">
                                <p class="mb-5 px-3">Services</p>
                                <div class="inner-content">
                                    <p class="py-3 px-3">Hair Treatments <span>(4)</span></p>
                                    <p class="py-3 px-3">Men's Cut <span> (4)</span></p>
                                    <p class="py-3 px-3">Hair Treatments <span> (4)</span></p>
                                    <p class="py-3 px-3">Hairstyles <span>(4)</span> </p>
                                    <p class="last px-3">Cuts <span>(4)</span></p>
                                </div>
                            </div>
                            <div class="services-right border border-1 border-dark order-xl-2 order-1">
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>


                            </div>
                        </div>F
                    </div>
                    <div id="menu3" class="tab-pane fade" role="tabpanel" aria-labelledby="menu3-tab">
                        <div class="services-container d-flex flex-xl-row flex-column gap-5">
                            <div class="services-left border border-1 border-dark order-xl-1 order-2">
                                <p class="mb-5 px-3">Services</p>
                                <div class="inner-content">
                                    <p class="py-3 px-3">Hair Treatments <span>(4)</span></p>
                                    <p class="py-3 px-3">Men's Cut <span> (4)</span></p>
                                    <p class="py-3 px-3">Hair Treatments <span> (4)</span></p>
                                    <p class="py-3 px-3">Hairstyles <span>(4)</span> </p>
                                    <p class="last px-3">Cuts <span>(4)</span></p>
                                </div>
                            </div>
                            <div class="services-right border border-1 border-dark order-xl-2 order-1">
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div id="menu4" class="tab-pane fade" role="tabpanel" aria-labelledby="menu4-tab">
                        <div class="services-container d-flex flex-xl-row flex-column gap-5">
                            <div class="services-left border border-1 border-dark order-xl-1 order-2">
                                <p class="mb-5 px-3">Services</p>
                                <div class="inner-content">
                                    <p class="py-3 px-3">Hair Treatments <span>(4)</span></p>
                                    <p class="py-3 px-3">Men's Cut <span> (4)</span></p>
                                    <p class="py-3 px-3">Hair Treatments <span> (4)</span></p>
                                    <p class="py-3 px-3">Hairstyles <span>(4)</span> </p>
                                    <p class="last px-3">Cuts <span>(4)</span></p>
                                </div>
                            </div>
                            <div class="services-right border border-1 border-dark order-xl-2 order-1">
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div id="menu5" class="tab-pane fade" role="tabpanel" aria-labelledby="menu5-tab">
                        <div class="services-container d-flex flex-xl-row flex-column gap-5">
                            <div class="services-left border border-1 border-dark order-xl-1 order-2">
                                <p class="mb-5 px-3">Services</p>
                                <div class="inner-content">
                                    <p class="py-3 px-3">Hair Treatments <span>(4)</span></p>
                                    <p class="py-3 px-3">Men's Cut <span> (4)</span></p>
                                    <p class="py-3 px-3">Hair Treatments <span> (4)</span></p>
                                    <p class="py-3 px-3">Hairstyles <span>(4)</span> </p>
                                    <p class="last px-3">Cuts <span>(4)</span></p>
                                </div>
                            </div>
                            <div class="services-right border border-1 border-dark order-xl-2 order-1">
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div id="menu6" class="tab-pane fade" role="tabpanel" aria-labelledby="menu6-tab">
                        <div class="services-container d-flex flex-xl-row flex-column gap-5">
                            <div class="services-left border border-1 border-dark order-xl-1 order-2">
                                <p class="mb-5 px-3">Services</p>
                                <div class="inner-content">
                                    <p class="py-3 px-3">Hair Treatments <span>(4)</span></p>
                                    <p class="py-3 px-3">Men's Cut <span> (4)</span></p>
                                    <p class="py-3 px-3">Hair Treatments <span> (4)</span></p>
                                    <p class="py-3 px-3">Hairstyles <span>(4)</span> </p>
                                    <p class="last px-3">Cuts <span>(4)</span></p>
                                </div>
                            </div>
                            <div class="services-right border border-1 border-dark order-xl-2 order-1">
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div id="menu7" class="tab-pane fade" role="tabpanel" aria-labelledby="menu7-tab">
                        <div class="services-container d-flex flex-xl-row flex-column gap-5">
                            <div class="services-left border border-1 border-dark order-xl-1 order-2">
                                <p class="mb-5 px-3">Services</p>
                                <div class="inner-content">
                                    <p class="py-3 px-3">Hair Treatments <span>(4)</span></p>
                                    <p class="py-3 px-3">Men's Cut <span> (4)</span></p>
                                    <p class="py-3 px-3">Hair Treatments <span> (4)</span></p>
                                    <p class="py-3 px-3">Hairstyles <span>(4)</span> </p>
                                    <p class="last px-3">Cuts <span>(4)</span></p>
                                </div>
                            </div>
                            <div class="services-right border border-1 border-dark order-xl-2 order-1">
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-center border-b p-4">
                                    <div
                                        class="d-flex flex-md-column flex-row align-items-center mt-md-0 mt-4 order-md-1 order-2 gap-md-0 gap-3">
                                        <p class="fs-5 fw-light m-0">Scalp Hydrafacial</p>
                                        <p class="fs-4 fw-light m-0">15 minutes</p>
                                    </div>
                                    <div
                                        class="d-flex flex-sm-row flex-column gap-md-5 gap-3 align-items-center order-md-2 order-1">
                                        <p class="fw-bolder fs-4 sec-clr fw-400">$100</p>
                                        <button>Select Service</button>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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

            </div>
            <img src="{{ asset('assets/images/subscribe-petal-right.png')}}" alt="" class="subscribe-petal-right img-fluid">
        </section>

    </main>

</div>
