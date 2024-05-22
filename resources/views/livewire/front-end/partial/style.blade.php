 <!-- site favicon -->
 <link rel="icon" type="image/png" href="{{ env('APP_URL') . '/storage' . '/' . setting('general_settings.favicon') }}" sizes="16x16">
 {{-- <link rel="icon" type="image/png" href="{{ asset('front-end/assets/images/favicon.png') }}" sizes="16x16"> --}}
 {{-- <a href="{{ setting('copy_right_url') }}" target="_blank"
									class="text-dark text-hover-{{ primary_color() }} px-2">
									<img alt="{{ setting('general_settings.app_name') }}"
										src="{{ env('APP_URL') . '/storage' . '/' . setting('general_settings.favicon') }}" class="h-15px" />
									{{ setting('copy_right') }}
								</a> --}}
 <!-- bootstrap 4  -->
 <link rel="stylesheet" href="{{ asset('front-end/assets/css/vendor/bootstrap.min.css') }}">
 <!-- fontawesome 5  -->
 <link rel="stylesheet" href="{{ asset('front-end/assets/css/all.min.css') }}">
 <!-- line-awesome webfont -->
 <link rel="stylesheet" href="{{ asset('front-end/assets/css/line-awesome.min.css') }}">
 <!-- custom select css -->
 <link rel="stylesheet" href="{{ asset('front-end/assets/css/vendor/nice-select.css') }}">
 <!-- animate css  -->
 <link rel="stylesheet" href="{{ asset('front-end/assets/css/vendor/animate.min.css') }}">
 <!-- lightcase css -->
 <link rel="stylesheet" href="{{ asset('front-end/assets/css/vendor/lightcase.css') }}">
 <!-- slick slider css -->
 <link rel="stylesheet" href="{{ asset('front-end/assets/css/vendor/slick.css') }}">
 <!-- jquery ui css -->
 <link rel="stylesheet" href="{{ asset('front-end/assets/css/vendor/jquery-ui.min.css') }}">
 <!-- datepicker css -->
 <link rel="stylesheet" href="{{ asset('front-end/assets/css/vendor/datepicker.min.css') }}">
 <!-- style main css -->
 
 <link rel="stylesheet" href="{{ asset('front-end/assets/css/main.css') }}">
 <link rel="stylesheet" href="{{ asset('/node_modules/owl.carousel/dist/assets/owl.carousel.min.css')}}" />
 <link rel="stylesheet" href="{{ asset('/bower_components/owl.carousel/dist/assets/owl.carousel.min.css')}}" />
 @stack('styles')

 <link rel="stylesheet" href="{{ asset('owl.carousel.min.css')}}">
 <link rel="stylesheet" href="{{ asset('owl.theme.default.min.css')}}">

 <!-- Stylesheets -->
 <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="../assets/css/docs.theme.min.css">

 <!-- Owl Stylesheets -->
 <link rel="stylesheet" href="../assets/owlcarousel/assets/owl.carousel.min.css">
 <link rel="stylesheet" href="../assets/owlcarousel/assets/owl.theme.default.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

 @livewireStyles

 <style>
	.contest-card {
	 position: relative;
   }
   
   .item-link {
	 position: absolute;
	 top: 0;
	 left: 0;
	 right: 0;
	 bottom: 0;
	 z-index: 1;
   }
   
   .action-icon, .action-btn-wrapper {
	 /* position: relative; */
	 z-index: 2;
   }
   .action-btn[disabled] {
	   cursor: not-allowed;
	   opacity: 0.6;
   }
   
   .action-btn {
	position: absolute;
    top: 20px;
    left: 20px;
    width: 30px;
    height: 30px;
    text-align: center;
    line-height: 30px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
   }
   </style>