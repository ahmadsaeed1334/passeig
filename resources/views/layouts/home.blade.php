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
            cursor: none;
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

<body id="bg">
    <div id="videoContainer">
        <video id="backgroundVideo" autoplay muted onended="handleVideoEnd()">
            <source src="{{ asset('assets/background.mp4') }}" type="video/mp4">
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
                @include('front.partial.footer')
                <!-- BUTTON TOP START -->
                <button class="scroltop"><span class="iconmoon-house relative" id="btn-vibrate"></span>Top</button>
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

    </script>
    @include('front.partial.script')
    <script>
        const cursor = document.createElement('div')
        const child = document.createElement('div')

        const cursorDefaultStyle = `
    width: 28px;
    height: 28px;
    border-radius: 9999px;
    border: 2px solid #2B697E;
    position: fixed;
    transform: translate(-50%, -50%);
    top: 0; left: '0';
    transition: 300ms ease-out;
    pointer-events: none;
`

        const childDefaultStyle = `
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: #2B697E;
    position: fixed;
    top: 0; left: '0';
    transform: translate(-50%, -50%);
    pointer-events: none;
`

        cursor.style.cssText = cursorDefaultStyle
        child.style.cssText = childDefaultStyle

        document.body.appendChild(cursor)
        document.body.appendChild(child)

        let isActived = false

        window.addEventListener('mousemove', (event) => {
            if (isActived) return

            cursor.style.top = child.style.top = `${event.clientY}px`
            cursor.style.left = child.style.left = `${event.clientX}px`
        })

        const onHover = document.querySelectorAll('.onHover')
        const fixed = (event, getTransition) => {
            event.stopPropagation()
            isActived = true
            const element = event.currentTarget
            const {
                width
                , height
                , top
                , left
            } = element.getBoundingClientRect()

            const style = window.getComputedStyle(element)
            const borderRadius = style.getPropertyValue('border-radius')
            const transition = style.getPropertyValue('transition')

            cursor.style.cssText = `
            ${cursorDefaultStyle}
            width: ${width}px;
            height: ${height}px;
            border-radius: ${borderRadius};
            top: ${top}px;
            left: ${left}px;
            transform: translate(0, 0);
            border-color: white;
            ${(getTransition) ? `transition: ${transition};`: ''}
        `

            child.style.cssText = `
            ${childDefaultStyle}
            display: none
        `
        }

        for (const hover of onHover) {
            hover.addEventListener('mousedown', (event) => fixed(event, true))
            hover.addEventListener('mouseup', (event) => fixed(event, true))
            hover.addEventListener('mouseover', (event) => fixed(event, false))
            hover.addEventListener('mouseleave', (event) => {
                isActived = false

                cursor.style.cssText = cursorDefaultStyle
                child.style.cssText = childDefaultStyle
            })
        }

    </script>
    <script>
        // Function to get the time difference in minutes
        function timeDifferenceInMinutes(previousTime) {
            const currentTime = new Date().getTime();
            const differenceInMinutes = Math.floor((currentTime - previousTime) / (1000 * 60));
            return differenceInMinutes;
        }

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

            // Store the current time as the last video play time
            localStorage.setItem('lastVideoPlayTime', new Date().getTime());
        }

        // Check if the video should be played
        function shouldPlayVideo() {
            const lastVideoPlayTime = localStorage.getItem('lastVideoPlayTime');

            if (!lastVideoPlayTime) {
                // No record of the last play, play the video
                return true;
            }

            const minutesSinceLastPlay = timeDifferenceInMinutes(parseInt(lastVideoPlayTime));

            // Play the video if more than 30 minutes have passed since the last play
            return minutesSinceLastPlay > 30;
        }

        // Main function to handle video playback
        function initializeVideoPlayback() {
            if (shouldPlayVideo()) {
                // Show the video and hide the content initially
                document.getElementById('videoContainer').style.display = 'block';
                document.getElementById('contentContainer').style.bottom = '-100%';
                document.body.style.overflow = 'hidden';

                // Play the video and set up the onended event to handle when the video finishes
                const video = document.getElementById('backgroundVideo');
                video.play();
                video.onended = handleVideoEnd;
            } else {
                // Hide the video container and show the content immediately
                document.getElementById('videoContainer').style.display = 'none';
                document.getElementById('contentContainer').style.bottom = '0';
                document.body.style.overflowY = 'scroll';
            }
        }

        // Initialize video playback when the page loads
        document.addEventListener('DOMContentLoaded', initializeVideoPlayback);

    </script>


</body>

</html>
