<header class="animation">
    <!-- Full-screen Header -->
    <nav class="navbar navbar-expand-lg navbar-light position-absolute bg-transparent w-100 d-xxl-block d-none">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{asset('assets/images/logo.png')}}" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./assets/pages/services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./assets/pages/Products.html">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./assets/pages/aboutus.html">About Us</a>
                    </li>
                </ul>
            </div>
            <a href="./assets/pages/appointment.html"><button type="button" class="btn btn-regular">Book Appointment</button></a>
        </div>
    </nav>
    <!-- Mobile Header -->
    <nav class="navbar bg-body-tertiary fixed-top d-xxl-none d-block">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="{{asset('assets/images/logo.png')}}" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <a class="offcanvas-title" id="offcanvasNavbarLabel" href="#"><img src="../images/logo.png"
                            alt="Logo"></a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>

                    </ul>
                    <a href="#"><button type="button" class="btn btn-regular mt-3">Book Appointment</button></a>
                </div>
            </div>
        </div>
    </nav>
</header>
