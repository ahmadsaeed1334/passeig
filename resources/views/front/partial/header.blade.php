<header>
    <!-- Full-screen Header -->
    <nav class="navbar navbar-expand-lg navbar-light position-absolute bg-transparent w-100 d-xxl-block d-none">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="{{env('APP_URL').'/storage' .'/'.general('logo')}}" alt="Logo" width="120px"></a>
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
                        <a class="nav-link" href="{{ route('appointments') }}">Appointments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                    </li>
                </ul>
            </div>
            <a href="{{ route('appointments') }}"><button type="button" class="btn btn-regular">Book Appointment</button></a>
            @if (Auth::check())
            <a href="{{ route('user-dashboard') }}"><button type="button" class="btn btn-regular ms-3">Dashboard</button></a>
            @else
            <a href="{{ route('login') }}"><button type="button" class="btn btn-regular ms-3">Login</button></a>
            @endif
        </div>
    </nav>
    <!-- Mobile Header -->
    <nav class="navbar bg-body-tertiary fixed-top d-xxl-none d-block">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="{{asset('assets/images/logo.png')}}" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <a class="offcanvas-title" id="offcanvasNavbarLabel" href="#"><img src="{{env('APP_URL').'/storage' .'/'.general('logo')}}" width="100px" alt="Logo"></a>
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
                    <a href="{{ route('appointments') }}"><button type="button" class="btn btn-regular mt-3">Book Appointment</button></a>
                    @if (Auth::check())
                    <a href="{{ route('user-dashboard') }}"><button type="button" class="btn btn-regular ms-3 mt-3">Dashboard</button></a>
                    @else
                    <a href="{{ route('login') }}"><button type="button" class="btn btn-regular ms-3 mt-3">Login</button></a>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</header>
