<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page_title ?? general('app_name') }} - {{ $page_title ? general('app_name') : '' }}</title>
    <link rel="shortcut icon" href="{{ env('APP_URL') . '/storage' . '/' . setting('general_settings.favicon') }}" data-navigate-track />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>


    <link rel="stylesheet" href="{{ asset('assets/css/home.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <style>
        @media (min-width: 768px) {

            .custom-margin {
                margin-left: 150px;
                /* Adjust the value as needed */
            }

            .custom-margin-bottom {
                margin-bottom: 20%;
            }

        }

        @media (min-width:585px) and (max-width: 990px) {

            .margin-about-t20 {
                margin-bottom: 50%;

            }

        }

        @media (min-width:450px) and (max-width: 585px) {

            .margin-about-t20 {
                margin-bottom: 60%;

            }

        }

        @media (max-width: 450px) {

            .margin-about-t20 {
                margin-bottom: 70%;

            }

        }

    </style>
</head>

<body>
    <div id="videoContainer">
        <video id="backgroundVideo" autoplay muted onended="handleVideoEnd()">
            <source src="{{ asset('assets/background.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    {{-- <div id="videoContainer">
        <video id="backgroundVideo" autoplay muted onended="handleVideoEnd()">
            <source src="{{ asset('assets/1720076221375.mp4_1720076778665.mp4')}}" type="video/mp4">
    Your browser does not support the video tag.
    </video>
    </div> --}}

    <div id="contentContainer">
        <div class="load_animation">
            <header class="navbar-pading ">
                <nav class="navbar navbar-expand-lg navbar-light bg-transparent ">
                    <div class="container">
                        <a class="navbar-brand" href="#"><img src="{{env('APP_URL').'/storage' .'/'.general('logo')}}" alt="Logo" width="120px"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('services') }}">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('products') }}">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('blogs') }}">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('appointments') }}">Appointment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                                </li>
                            </ul>
                            <a href="{{ route('appointments') }}"><button type="button" class="btn btn-regular mb-2">Book Appointment</button></a>
                            @if (Auth::check())
                            <a href="{{ route('user-dashboard') }}"><button type="button" class="btn btn-regular ms-3 mb-2">Dashboard</button></a>
                            @else
                            <a href="{{ route('login') }}"><button type="button" class="btn btn-regular ms-3 mb-2">Login</button></a>
                            @endif
                        </div>
                    </div>
                </nav>
            </header>


            <section class="services ">
                <h1 class="text-center bold ">Services</h1>
                <div class="container margin-t20">
                    <img src="assets/images/swatch.png" class="corner-image" alt="Swatch Image" width="500px">
                    <div class="card service-card custom-margin">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-5 margin-col-text">
                                    <div class="ms-4 fade-left">
                                        <h2 class="bold-text-h mt-3 mb-3">MANICURAS PEDICURAS</h2>
                                        <p class="bold-text-p">Déjate llevar por una manicura única! Nuestro servicio de manicura es el atributo perfecto para manos cariñosas y uñas destacadas.</p>

                                        <a href="#" class="btn btn-secondry mt-3">Book Appointment</a>
                                    </div>
                                </div>
                                <div class="col-lg-7 position-relative mt-5">
                                    <div class="containers ms-md-4 fade-right">
                                        <img src="{{ asset('assets/images/Passeig 19.04.24-42 2.png') }}" class="main-image" alt="Manicure Pedicure">
                                        <img src="{{ asset('assets/images/Rectangle 21.png') }}" class="overlay-image" alt="Overlay">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @if (isset($slot))
            {{ $slot }}
            @else
            @yield('content')
            @endif
            {{-- <section id="hero">
                <div class="container">
                    <div class="text-center">
                        <div class="col-lg-8 mx-auto">
                            <img class="d-block mx-auto mb-4 img-fluid" src="{{env('APP_URL').'/storage' .'/'.general('logo_black')}}" alt="Passeig Logo">
            <p class="lead mb-4 p-below">Risus scelerisque a non turpis vitae malesuada sed venenatis. In
                fringilla sollicitudin euismod sed.</p>
        </div>
    </div>
    </div>
    </section> --}}


    </div>

    @include('front.partial.footer')
    </div>

    {{-- <main class="content">

    </main> --}}



    <script src="{{ asset('assets/js/home.js')}}"></script>

    {{-- @include('front.partial.script') --}}

</body>

</html>
