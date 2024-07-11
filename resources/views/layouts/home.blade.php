<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $page_title ?? general('app_name') }} - {{ $page_title ? general('app_name') : '' }}</title>
  <link rel="shortcut icon" href="{{ env('APP_URL') . '/storage' . '/' . setting('general_settings.favicon') }}" data-navigate-track/>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
  <!-- GSAP ScrollTrigger -->
  {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.js"></script> --}}

  <link rel="stylesheet" href="{{ asset('assets/css/frontend.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
</head>

<body id="services-fullpage">
  <div id="videoContainer">
    <video id="backgroundVideo" autoplay muted onended="handleVideoEnd()">
      <source src="{{ asset('assets/1720076221375.mp4_1720076778665.mp4')}}" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>


  <div id="contentContainer">
      <div class="load_animation">
        @include('front.partial.header')

        <section id="hero">
          <div class="container">
            <div class="text-center">
              <div class="col-lg-8 mx-auto">
                <img class="d-block mx-auto mb-4 img-fluid" src="{{env('APP_URL').'/storage' .'/'.general('logo_black')}}" alt="Passeig Logo">
                <p class="lead mb-4 p-below">Risus scelerisque a non turpis vitae malesuada sed venenatis. In
                  fringilla sollicitudin euismod sed.</p>
              </div>
            </div>
          </div>
        </section>
    </div>
  </section>
  <main class="content">
    @if (isset($slot))
        {{ $slot }}
    @else
        @yield('content')
    @endif
</main>


@livewire('front.footers')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
<script>
 // Function to handle the end of the video
function handleVideoEnd() {
  // Slide up the content container
  document.getElementById('contentContainer').style.bottom = '0';

  // Enable scrolling
  document.body.style.overflowY = 'scroll';

  // Animate all child elements of the content container with a fade-in-left effect
  gsap.from('#contentContainer > *', {
      opacity: 0,
      x: -100,
      duration: 1,
      stagger: 0.2 // Optional: adds delay between the start of each animation
  });
}

// Initially, hide the scrollbar
document.body.style.overflow = 'hidden';

// GSAP Animation with ScrollTrigger
gsap.registerPlugin(ScrollTrigger);

gsap.utils.toArray('.block').forEach((element) => {
  gsap.to(element, {
      opacity: 1,
      x: 0,
      duration: 1,
      scrollTrigger: {
          trigger: element,
          start: 'top 80%',
          end: 'bottom 60%',
          scrub: 1
      }
  });
});

gsap.from('.navbar-brand, .nav-link, .btn', {
  opacity: 0,
  x: -50,
  duration: 1,
  delay: 0.5
});

// Home Slider
$(document).ready(function(){
  $('.customer-logos').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1500,
      arrows: false,
      dots: false,
      pauseOnHover: false,
      responsive: [{
          breakpoint: 768,
          settings: {
              slidesToShow: 4
          }
      }, {
          breakpoint: 520,
          settings: {
              slidesToShow: 3
          }
      }]
  });
});

document.addEventListener('DOMContentLoaded', function() {
  window.scrollTo(0, 0);
  gsap.timeline()
      .fromTo(".load_animation", {
          duration: 1.5,
          clipPath: 'inset(84% 43% 0 42% round 120px)',
          ease: "power2.inOut"
      },
      {
          duration: 1.5,
          clipPath: 'inset(48% 43% 0 42% round 120px)',
          ease: "power2.inOut"
      })
      .to(".load_animation", {
          duration: 1.5,
          delay: 0.4,
          clipPath: 'inset(0% 0% 0% 0% round 0px)',
          ease: "power2.inOut"
      });
});

// Register the ScrollTrigger plugin with GSAP
gsap.registerPlugin(ScrollTrigger);

gsap.utils.toArray('.animation').forEach(function(element) {
  gsap.fromTo(element,
      {
          opacity: 0,
          y: 50 // Start 50px below the initial position
      },
      {
          duration: 1,
          opacity: 1,
          y: 0, // End at the initial position
          ease: "power2.inOut",
          scrollTrigger: {
              trigger: element,
              start: "top 80%", // Trigger animation when the top of the element hits 80% of the viewport height
              toggleActions: "play none none none", // Play animation on scroll, no repeat
          }
      }
  );
});

// HOme Slider

</script>
{{-- @include('front.partial.script') --}}

</body>

</html>
