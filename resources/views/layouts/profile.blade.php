<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="shortcut icon" href="{{ env('APP_URL') . '/storage' . '/' . setting('general_settings.favicon') }}" data-navigate-track />
            <title>{{ $page_title ?? general('app_name') }} - {{ $page_title ? general('app_name') : '' }}</title>


    {{-- <link rel="stylesheet" href="../assets/css/dashbord.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/dashbord.css')}}">
    <style>
        .mx-4.active {
            background-color: rgba(255, 255, 255, 0.2);
            /* Light white background */
            color: #fff;
            /* Ensure text color is readable */
            border-radius: 5px;
            /* Optional: Add some border radius for better appearance */
            padding: 5px 10px;
            /* Optional: Add some padding for better appearance */
        }

        /* Add this to your custom CSS file */

        /* Mobile view adjustments */
        @media (max-width: 768px) {
            .dashboard-container {
                display: flex;
                flex-direction: column;
            }

            .appointments-section,
            .past-appointments-section {
                width: 100%;
            }
        }

    </style>
</head>
<body>

    {{-- @include('front.partial.header') --}}
    <div class="main-content">
        <div class="sidebar">
            <div>
                <span class="navbar-toggler" type="button" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "><i class="bi bi-list"></i></span>
                </span>
                <div class="text-center">
                <a href="{{ route('home') }}">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" width="160px" class="mt-5">
                </a>
                    
                    <br>
                    <img src="{{ asset(auth()->user()->profile_photo_path ? 'storage/' . auth()->user()->profile_photo_path : 'assets/images/Bitmap.png') }}" alt="Profile Photo" width="65px"  height='65px' class="img-radius mt-5" id="navbarProfileImage">
                    <h4>{{ auth()->user()->name }}</h4>
                    <div class="line"></div>
                </div>
                <div class="mx-4">
                    <a href="{{ route('user-dashboard') }}" class="{{ request()->routeIs('user-dashboard') ? 'active' : '' }} text-center">Dashboard</a>
                    <a href="{{ route('user-appointments') }}" class="{{ request()->routeIs('user-appointments') ? 'active' : '' }} text-center">Appointments</a>
                    <a href="{{ route('profile.edit') }}" class="{{ request()->routeIs('profile.edit') ? 'active' : '' }} text-center">Profile</a>
                    {{--  <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>  --}}
                </div>
            </div>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="#" class="logout mx-3 mb-5" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="text-danger mx-3 mb-5"><i class="bi bi-box-arrow-right" style="font-size: 25px;"></i></span>Logout
            </a>
            {{-- <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type='submit' class="text-danger mx-3 mb-5"><i class="bi bi-box-arrow-right" style="font-size: 25px;"></i></button>Logout
            </form> --}}

        </div>



        @if (isset($slot))
        {{ $slot }}
        @else
        @yield('content')
        @endif
        {{-- <section id="hero">
                <div class="container">
                    <div class="text-center">
                        <div class="col-lg-8 mx-auto">
                            <img class="d-block mx-auto mb-4 img-fluid animation" src="assets/images/LOGO-PASSEIG.png"
                                alt="">
                            <p class="lead mb-4 p-below animation">Risus scelerisque a non turpis vitae
                                malesuada sed venenatis. In fringilla
                                sollicitudin euismod sed.</p>
                        </div>
                    </div>
                </div>
            </section> --}}

    </div>

    {{-- @include('front.partial.main') --}}
    {{-- @livewire('front.footers') --}}
    {{-- @include('front.partial.script') --}}
    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('profilePhotoUpdated', function(photoUrl) {
                document.getElementById('navbarProfileImage').src = photoUrl;
            });
            Livewire.on('profilePhotoPreviewUpdated', function(photoUrl) {
                document.getElementById('navbarProfileImage').src = photoUrl;
            });
        });

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/dashboard.js')}}"></script>
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/dashbord.css')}}"> --}}
    @livewireScripts
    <x-livewire-alert::scripts />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
