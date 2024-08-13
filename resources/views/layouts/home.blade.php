<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page_title ?? general('app_name') }} - {{ $page_title ? general('app_name') : '' }}</title>
    <link rel="shortcut icon" href="{{ env('APP_URL') . '/storage' . '/' . setting('general_settings.favicon') }}" data-navigate-track />
    @include('front.partial.style')


    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }

        #videoContainer {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: fill;
        }

        #contentContainer {
            position: absolute;
            bottom: -100%;
            left: 0;
            width: 100%;
            max-height: 100vh;
            background-color: #f8f5f0;
            transition: right 0.1s ease-out;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .navbar-pading {
            padding: 10px;
        }

        #content {
            padding: 20px;
        }

        /* Global CSS */
        :root {
            --primary-color: #F1F0E7;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        @font-face {
            font-family: Brown-Sugar;
            src: url(../fonts/Brown-Sugar.otf);
        }

        @font-face {
            font-family: Helvetica;
            src: url(../fonts/HelveticaNeueRoman.otf);
        }

        body {
            background-color: #F1F0E7;
            overflow-x: hidden;
        }

        /* Existing CSS */

        /* Background image for the body */
        /* #contentContainer {
        background-image: url('../images/hero_bg.png');
        background-repeat: repeat;
    } */

        button.btn.btn-regular {
            border: 1px solid #645242;
            border-radius: 0;
            padding: 20px 32px;
            font-size: 22px;
            color: #645242;
        }

        .load_animation {
            min-height: 100vh;
            background: url(../images/bg\ .png);
            background-size: cover;
            background-position: center;

        }

        #hero {
            padding: 170px 0 180px 0;
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
    @include('front.partial.home-page-content')

    {{-- <div id="videoContainer">
        <video id="backgroundVideo" autoplay muted onended="handleVideoEnd()">
            <source src="{{ asset('assets/1720076221375.mp4_1720076778665.mp4')}}" type="video/mp4">
    Your browser does not support the video tag.
    </video>
    </div> --}}

    {{-- <div id="contentContainer">
        <div class="load_animation"> --}}
    <!-- Desktop Header -->

    <!-- Desktop Header -->
    {{-- <header class="navbar-pading desktop-header">
                <nav class="navbar navbar-expand-lg shift navbar-light bg-transparent">
                    <div class="container">
                        <a class="navbar-brand moveLeftRight" href="{{ env('APP_URL') }}">
    <img src="{{ env('APP_URL') . '/storage' . '/' . general('logo') }}" alt="Logo" width="50px" height="50px">
    </a>
    @php
    $route_name = route_name();
    @endphp
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active show">
                <a class="nav-link " href="{{ env('APP_URL') }}">Home</a>
            </li>
            <li class="nav-item ms-3">
                <a class="nav-link {{ $route_name == 'services' ? 'active show' : '' }}" href="{{ route('services') }}">Services</a>
            </li>
            <li class="nav-item ms-3">
                <a class="nav-link {{ $route_name == 'products' ? 'active show' : '' }}" href="{{ route('products') }}">Products</a>
            </li>
            <li class="nav-item ms-3">
                <a class="nav-link {{ $route_name == 'blogs' ? 'active show' : '' }}" href="{{ route('blogs') }}">Blogs</a>
            </li>
            <li class="nav-item ms-3">
                <a class="nav-link {{ $route_name == 'about-us' ? 'active show' : '' }}" href="{{ route('about-us') }}">About</a>
            </li>
        </ul>

        <div class="d-flex align-items-center ms-auto">
            <a href="{{ route('appointments') }}" class="ms-3">
                <button type="button" class="custom-btn btn-11">Book Appointment
                    <div class="dot"></div>
                </button>
            </a>
            @auth
            <a href="{{ route('user-dashboard') }}" class="ms-3">
                <button type="button" class="custom-btn btn-11">Dashboard</button>
            </a>
            @else
            <a href="{{ route('login') }}" class="ms-3">
                <button type="button" class="custom-btn btn-11">Login</button>
            </a>
            @endauth
        </div>
    </div>
    </div>
    </nav>
    </header> --}}

    <!-- Mobile Header -->
    {{-- <header class="navbar-pading mobile-header">
                <nav class="navbar navbar-light bg-transparent">
                    <div class="container d-flex justify-content-between">
                        <a class="navbar-brand" href="{{ env('APP_URL') }}">
    <img src="{{ env('APP_URL') . '/storage' . '/' . general('logo') }}" alt="Logo" width="50px" height="50px">
    </a>
    <button class="btn" id="mobileSidebarToggle"><i class="fa-solid fa-bars"></i></button>
    </div>
    </nav>
    <div class="mobile-sidebar">
        <nav class="navbar navbar-light bg-transparent">
            <div class="container d-flex justify-content-between">
                <a class="navbar-brand" href="{{ env('APP_URL') }}">
                    <img src="{{ env('APP_URL') . '/storage' . '/' . general('logo') }}" alt="Logo" width="50px" height="50px">
                </a>
            </div>
        </nav>
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active show  ms-3 me-3">
                <a class="nav-link" href="{{ env('APP_URL') }}">Home</a>
            </li>
            <li class="nav-item ms-3">
                <a class="nav-link {{ $route_name == 'services' ? 'active show' : '' }}" href="{{ route('services') }}">Services</a>
            </li>
            <li class="nav-item ms-3">
                <a class="nav-link {{ $route_name == 'products' ? 'active show' : '' }}" href="{{ route('products') }}">Products</a>
            </li>
            <li class="nav-item ms-3">
                <a class="nav-link {{ $route_name == 'blogs' ? 'active show' : '' }}" href="{{ route('blogs') }}">Blogs</a>
            </li>
            <li class="nav-item ms-3">
                <a class="nav-link {{ $route_name == 'about-us' ? 'active show' : '' }}" href="{{ route('about-us') }}">About Us</a>
            </li>
        </ul>
        <div class=" align-items-center ms-auto">
            <a href="{{ route('appointments') }}" class="ms-3">
                <button type="button" class="custom-btn btn-11">Book Appointment
                    <div class="dot"></div>
                </button>
            </a>
            @auth
            <a href="{{ route('user-dashboard') }}" class="ms-3">
                <button type="button" class="custom-btn btn-11">Dashboard</button>
            </a>
            @else
            <a href="{{ route('login') }}" class="ms-3">
                <button type="button" class="custom-btn btn-11 mt-3">Login</button>
            </a>
            @endauth
        </div>
    </div>
    </header> --}}






    {{-- @if (isset($slot))
            {{ $slot }}
    @else
    @yield('content')
    @endif
    @livewire('front.footers')
    </div>

    </div> --}}

    {{-- <main class="content">

    </main> --}}



    {{-- <script src="path/to/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.getElementById('mobileSidebarToggle');
            const mobileSidebar = document.querySelector('.mobile-sidebar');
            const body = document.querySelector('body');

            sidebarToggle.addEventListener('click', () => {
                mobileSidebar.classList.toggle('show');
                body.classList.toggle('sidebar-open');
            });

            body.addEventListener('click', function(e) {
                if (!mobileSidebar.contains(e.target) && !sidebarToggle.contains(e.target)) {
                    mobileSidebar.classList.remove('show');
                    body.classList.remove('sidebar-open');
                }
            });
        });

    </script> --}}
    <script>
        // Function to handle the end of the video
        function handleVideoEnd() {
            // Slide up the content container
            document.getElementById('contentContainer').style.bottom = '0';

            // Enable scrolling
            document.body.style.overflowY = 'scroll';

            // Animate all child elements of the content container with a fade-in-left effect
            gsap.from('#contentContainer > *', {
                opacity: 0
                , x: 500
                , duration: 0.1
                , stagger: 0 // Optional: adds delay between the start of each animation
            });
        }

        document.body.style.overflow = 'hidden';

        // GSAP Animation with ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);
        document.addEventListener('scroll', function() {
            var fadeElements = document.querySelectorAll('.fade-left, .fade-right');
            var scrollPosition = window.scrollY + window.innerHeight;

            fadeElements.forEach(function(el) {
                if (scrollPosition > el.offsetTop + el.offsetHeight / 4) {
                    el.classList.add('visible');
                }
            });
        });

        document.dispatchEvent(new Event('scroll'));

    </script>
    @include('front.partial.script')

</body>

</html>
