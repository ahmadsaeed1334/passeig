<header class="navbar-pading ">
    <!-- Full-screen Header -->
    <nav class="navbar navbar-expand-lg navbar-light  shift position-absolute bg-transparent w-100 d-xxl-block d-none">
        <div class="container">
            <a class="navbar-brand" href="{{ env('APP_URL') }}">
                <img src="{{ env('APP_URL') . '/storage/' . general('logo') }}" alt="Logo"  width="50px" height="50px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @php
            $route_name = route_name();    
            @endphp
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ env('APP_URL') }}">Home</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link {{ $route_name == 'services' ? 'active show' : '' }}" href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link  {{ $route_name == 'products' ? 'active show' : '' }}" href="{{ route('products') }}">Products</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link  {{ $route_name == 'blogs' ? 'active show' : '' }}" href="{{ route('blogs') }}">Blogs</a>
                    </li>
                    {{--  <li class="nav-item">
                        <a class="nav-link  {{ $route_name == 'services' ? 'active show' : '' }}" href="{{ route('appointments') }}">Appointments</a>
                    </li>  --}}
                    <li class="nav-item ms-2">
                        <a class="nav-link  {{ $route_name == 'about-us' ? 'active show' : '' }}" href="{{ route('about-us') }}">About Us</a>
                    </li>
                </ul>
            </div>
            <a href="{{ route('appointments') }}"><button type="button" class="custom-btn btn-11">Book Appointment<div class="dot"></div></button></a>
                {{--  <a href="{{ route('appointments') }}"><button type="button" class="btn btn-regular mb-2 glow-on-hover">Book Appointment</button></a>  --}}
            @auth
            <a href="{{ route('user-dashboard') }}"><button type="button" class="custom-btn btn-11 ms-3">Dashboard</button></a>
            @else
            <a href="{{ route('login') }}"><button type="button" class="custom-btn btn-11 ms-3">Login</button></a>
            @endauth
        </div>
    </nav>
    <!-- Mobile Header -->
    <nav class="navbar bg-body-tertiary shift fixed-top d-xxl-none d-block">
        <div class="container-fluid " >
            <a class="navbar-brand ms-3 " href="{{ env('APP_URL') }}"><img src="{{ env('APP_URL') . '/storage/' . general('logo') }}"  width="50px" height="50px"  alt="Logo"></a>
            <button class="navbar-toggler mr-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" style="85%" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <a class="offcanvas-title" id="offcanvasNavbarLabel" href="{{ env('APP_URL') }}"><img src="{{ env('APP_URL') . '/storage/' . general('logo') }}"  width="50px" height="50px" alt="Logo"></a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ env('APP_URL') }}">
                            Home
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link {{ $route_name == 'services' ? 'active show' : '' }}" href="{{ route('services') }}">Services</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link {{ $route_name == 'products' ? 'active show' : '' }}" href="{{ route('products') }}">Products</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link {{ $route_name == 'blogs' ? 'active show' : '' }}" href="{{ route('blogs') }}">Blogs</a>
                        </li>
                        {{--  <li class="nav-item mb-2">
                            <a class="nav-link" href="{{ route('appointments') }}">About Us</a>
                        </li>  --}}
                        <li class="nav-item mb-2">
                            <a class="nav-link {{ $route_name == 'about-us' ? 'active show' : '' }}" href="{{ route('about-us') }}">About Us</a>
                        </li>
                    </ul>
                    <a href="{{ route('appointments') }}"><button type="button" class="custom-btn btn-11  glow-on-hover">Book Appointment<div class="dot"></div></button></a>
                        {{--  <a href="{{ route('appointments') }}"><button type="button" class="btn btn-regular mb-2 glow-on-hover">Book Appointment</button></a>  --}}
                    @auth
                    <a href="{{ route('user-dashboard') }}"><button type="button" class="custom-btn btn-11 ms-3">Dashboard</button></a>
                    @else
                    <a href="{{ route('login') }}"><button type="button" class="custom-btn btn-11 ms-3">Login</button></a>
                    @endauth
                   
                   
              
                
                </div>
            </div>
        </div>
    </nav>
</header>
