@livewireScripts
<x-livewire-alert::scripts />

<!-- JAVASCRIPT  FILES ========================================= -->
<script src="{{ asset('assets/js/jquery-3.6.1.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script><!-- POPPER.MIN JS -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('assets/js/jquery.bootstrap-touchspin.min.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
<script src="{{ asset('assets/js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script src="{{ asset('assets/js/waypoints-sticky.min.js') }}"></script><!-- COUNTERUP JS -->
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script><!-- MASONRY  -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->
<script src="{{ asset('assets/js/scrolla.min.js') }}"></script><!-- ON SCROLL CONTENT ANIMTE   -->
<script src="{{ asset('assets/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{ asset('assets/js/shortcode.js') }}"></script><!-- SHORTCODE FUCTIONS  -->
<script src="{{ asset('assets/js/switcher.js') }}"></script><!-- SWITCHER FUCTIONS  -->

<!-- REVOLUTION JS FILES -->

<script src="{{ asset('assets/plugin/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('assets/plugin/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ asset('assets/plugin/revolution/revolution/js/extensions/revolution-plugin.js') }}"></script>

<!-- REVOLUTION SLIDER FUNCTION  ===== -->
<script src="{{ asset('assets/js/rev-script-5.js') }}"></script>


<script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/js/lightbox.min.js"></script>

<script>
    $(document).ready(function() {
        $('.circle-block-outer .nav-link').hover(function() {
            $(this).tab('show');
        });
    })

</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@livewireScripts
<x-livewire-alert::scripts />
@stack('scripts')
