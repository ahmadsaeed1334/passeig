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
    <div id="contentContainer" class="">
        <div class="load_animation">
            <div class="page-wraper">
                {{-- @include('front.partial.home-page-content') --}}
                @include('front.partial.header')
                <div class="page-content">
                    @if (isset($slot))
                    {{ $slot }}
                    @else

                    @endif
                </div>
                @livewire('front.footers')

            </div>
        </div>
    </div>
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

        // Sticky Header with Color Fill on Scroll
        document.addEventListener('scroll', function() {
            var header = document.querySelector('.sticky-header');
            var scrollPosition = window.scrollY;

            console.log("Scroll position:", scrollPosition); // Debugging: Check the scroll position
            if (scrollPosition > 50) { // Adjust the value as needed
                header.classList.add('color-fill');
                console.log("Class added"); // Debugging: Confirm if the class is being added
            } else {
                header.classList.remove('color-fill');
                console.log("Class removed"); // Debugging: Confirm if the class is being removed
            }
        });

    </script>

    @include('front.partial.script')

</body>

</html>
