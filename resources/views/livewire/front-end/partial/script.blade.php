{{-- https://www.microsoft.com/software-download/windows11 --}}
<script src="{{ asset('front-end/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('front-end/assets/js//owl.carousel.js')}}"></script>
<script>
window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("navbar").style.padding = "30px 10px";
        document.getElementById("logo").style.fontSize = "25px";
      } else {
        document.getElementById("navbar").style.padding = "80px 10px";
        document.getElementById("logo").style.fontSize = "35px";
      }
    }
</script>
<script>
    $(document).ready(function(){
   $(".owl-carousel").owlCarousel({
     loop: false, // Disable looping
     autoplay: false, // Disable auto-play
     nav: false, // Hide navigation buttons
     responsive:{
       0:{
         items:1
       },
       600:{
         items:3
       },
       1000:{
         items:5
       }
     }
   });
 });
 </script>
 <script src="{{ asset('https://code.jquery.com/jquery-3.7.1.js')}}" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
 <script src="{{ asset('https://code.jquery.com/jquery-3.7.1.min.js')}}" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
 <script src="{{ asset('https://code.jquery.com/jquery-3.7.1.slim.min.js')}}" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
 @livewireScripts
 <script src="/node_modules/jquery/dist/jquery.js"></script>
 <script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
 <script src="/bower_components/jquery/dist/jquery.js"></script>
 <script src="/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

 <!-- jQuery library -->
<script src="{{ asset('front-end/assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
 <!-- bootstras -->
<script src="{{ asset('front-end/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<!-- custom  -->
<script src="{{ asset('front-end/assets/js/vendor/jquery.nice-select.min.js') }}"></script> 
<!-- lightcas -->
<script src="{{ asset('front-end/assets/js/vendor/lightcase.js') }}"></script>
<!-- wow js -->
<script src="{{ asset('front-end/assets/js/vendor/wow.min.js') }}"></script>
<!-- slick sl-->
<script src="{{ asset('front-end/assets/js/vendor/slick.min.js') }}"></script>
<!-- countdow -->
<script src="{{ asset('front-end/assets/js/vendor/jquery.countdown.js') }}"></script>
<!-- jquery u-->
<script src="{{ asset('front-end/assets/js/vendor/jquery-ui.min.js') }}"></script>
<!-- datepicker js -->
<script src="{{ asset('front-end/assets/js/vendor/datepicker.min.js') }}"></script>
<script src="{{ asset('front-end/assets/js/vendor/datepicker.en.js') }}"></script>
<!-- preloader -->
<script src='{{ asset('front-end/assets/js/vendor/TweenMax.min.js') }}'></script>
<script src='{{ asset('front-end/assets/js/vendor/MorphSVGPlugin.min.js') }}'></script>
<script src="{{ asset('front-end/assets/js/preloader.js') }}"></script>
<!-- contactjs -->
<script src="{{ asset('front-end/assets/js/contact.js') }}"></script>
<!-- custom js -->
<script src="{{ asset('front-end/assets/js/app.js') }}"></script>
@stack('scripts')
@stack('modals')


<x-livewire-alert::scripts />