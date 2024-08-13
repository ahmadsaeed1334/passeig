<div class="col-lg-5 bg-white text-black" style="margin-left: -11px">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <!-- Helvatica Font -->
    <link href="https://fonts.cdnfonts.com/css/helvetica-neue-55" rel="stylesheet">
    <!-- Brown Sugar Font -->
    <link href="https://fonts.cdnfonts.com/css/brown-sugar-2" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">


    <style>
        .load_animation {
            min-height: 100vh;
            background: url(../images/hero_bg.png);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        #hero {
            padding: 170px 0 180px 0;
        }

        .py_section {
            padding: 40px 0px;
        }

        /* #preview-title {
            color: black
        } */

        #hero {
            background-image: url(/assets/images/hero_bg.png);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .single_cards .img img {
            border-radius: 35.52px;
        }

        .single_cards .img img,
        .card_main img {
            width: 100%;
            padding-bottom: 25px;
        }

        .single_cards .other_card {
            border: 1px solid #6452424F;
            border-radius: 53.28px;
            padding: 40px;
        }

        .single_cards .dic_single_card {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* .single_cards .dic_single_card .btn-regular { */
        /* width: 50px;
            height: 50px; */
        /* background: var(--secondary-color); */
        /* border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        } */

        .single_cards .dic_single_card p {
            margin: 0;
            font-family: var(--helvatica-font);
            font-size: 19.98px;
            font-weight: 400;
            line-height: 28.97px;
            color: var(--secondary-color);
            overflow: hidden;
            white-space: nowrap !important;
            text-overflow: ellipsis;
            width: 87%;
        }

        .single_cards .other_card .card_info h4 {
            font-family: var(--helvatica-font);
            font-size: 39.4px;
            font-weight: 200;
            line-height: 55.5px;
        }

        .single_cards .other_card .card_info p.price {
            font-family: var(--helvatica-font);
            font-size: 28.86px;
            font-weight: 300;
            line-height: 36.07px;
            margin-bottom: 5px;
        }

        .single_cards .card_main p {
            font-family: var(--helvatica-font);
            font-size: 20.38px;
            font-weight: 300;
            line-height: 34.3px;
            letter-spacing: -0.01em;
            text-align: center;
            color: var(--secondary-color);
        }

        h2 {
            font-size: 40px;
            font-weight: 400;
            color: #645242;
            font-family: 'Brown-Sugar';
            /* font-family: var(--brownSugar-font); */
        }

        :root {
            --primary-color: #F1F0E7;
            --secondary-color: #645242;
            --white-clr: #fff;
            --black-clr: #000;
            --helvatica-font: Helvatica;
            --brownSugar-font: Brown-Sugar;
        }

        .p-below {
            font-size: 15px;
            color: var(--secondary-color);
        }

        .navbar {
            background-color: white;
        }

        .navbar .navbar-brand img {
            width: 75px;
        }

        /* .navbar-nav .nav-item .nav-link {
            color: black;
        } */

        .navbar-nav .nav-item .nav-link:hover {
            color: #645242;
        }

        .btn-regular {
            /* background-color: var(--secondary-color); */
            /* color: white; */
        }

        header .navbar-nav a {
            font-size: 10px !important;
            padding: 6px 7px !important;
        }

        .btn-regular {
            border: 1px solid var(--secondary-color);
            /* border-radius: 0; */
            padding: 20px 32px;
            font-size: 15px !important;
            color: var(--secondary-color);
        }

    </style>
    <header class="animation">
        <!-- Full-screen Header -->
        {{--  <nav class="navbar navbar-expand-lg navbar-light position-absolute bg-transparent w-30 d-xxl-block d-none">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="{{env('APP_URL').'/storage' .'/'.general('logo')}}" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active show">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('services') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products') }}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blogs') }}">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('appointments') }}">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                        </li>
                    </ul>
                </div>
                <a href="{{ route('appointments') }}"><button type="button" class="btn btn-regular" style="border: 1px solid #645242;    border-radius: 0;
    margin-left: 35px;">Book Appointment</button></a>
        </nav>  --}}
        <!-- Mobile Header -->
        <nav class="navbar bg-body-tertiary fixed-top d-xxl-none d-block">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="{{asset('assets/images/logo.png')}}" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <a class="offcanvas-title" id="offcanvasNavbarLabel" href="#"><img src="../images/logo.png" alt="Logo"></a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Home</a>
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
                                <a class="nav-link" href="{{ route('appointments') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about-us') }}">Contact Us</a>
                            </li>

                        </ul>
                        <a href={{ route('appointments') }}><button type="button" class="btn btn-regular mt-3" style="border: 1px solid black">Book Appointment</button></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section id="hero">
        <div class="container">
            <div class="text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="animation" id="preview-title">Title</h2>
                    <p class="lead mb-4 p-below animation" id="preview-short-description">Short Description</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py_section">
        <div class="container">
            <div class="single_cards">
                <div class="row gy-5">
                    <div class="col-12 card_main">
                        {{-- <img id="preview-image" src="{{ asset('assets/images/services_card1.png') }}" class="img-fluid" alt="services"> --}}
                        <img id="preview-image" src="{{ asset('assets/images/services_card1.png') }}" alt="Preview" style=" width: 100%; height: auto;">
                        <p id="preview-long-description">Long Description</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
