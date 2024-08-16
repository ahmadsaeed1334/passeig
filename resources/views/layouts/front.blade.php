<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="description" content="">
	<title>{{ $page_title ?? general('app_name') }} - {{ $page_title ? general('app_name') : '' }}</title>
	<link rel="shortcut icon" href="{{ env('APP_URL') . '/storage' . '/' . setting('general_settings.favicon') }}"
		data-navigate-track />
	@include('front.partial.style')
	<style>
		.br-10 {
			border-radius: 10px !important;
		}

		.animated-button1 {
			-webkit-transform: translate(0%, 0%);
			transform: translate(0%, 0%);
			overflow: hidden;
			-webkit-box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
			box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
		}

		.animated-button1::before {
			content: '';
			position: absolute;
			top: 0px;
			left: 0px;
			width: 100%;
			height: 100%;
			background-color: #ad8585;
			opacity: 0;
			-webkit-transition: .2s opacity ease-in-out;
			transition: .2s opacity ease-in-out;
		}

		.animated-button1:hover::before {
			opacity: 0.2;
		}

		.animated-button1 span {
			position: absolute;
		}

		.animated-button1 span:nth-child(1) {
			top: 0px;
			left: 0px;
			width: 100%;
			height: 2px;
			background: -webkit-gradient(linear, right top, left top, from(rgba(43, 8, 8, 0)), to(#2B697E));
			background: linear-gradient(to left, rgba(43, 8, 8, 0), #2B697E);
			-webkit-animation: 2s animateTop linear infinite;
			animation: 2s animateTop linear infinite;
		}

		@keyframes animateTop {
			0% {
				-webkit-transform: translateX(100%);
				transform: translateX(100%);
			}

			100% {
				-webkit-transform: translateX(-100%);
				transform: translateX(-100%);
			}
		}

		.animated-button1 span:nth-child(2) {
			top: 0px;
			right: 0px;
			height: 100%;
			width: 2px;
			background: -webkit-gradient(linear, left bottom, left top, from(rgba(43, 8, 8, 0)), to(#2a7d99));
			background: linear-gradient(to top, rgba(43, 8, 8, 0), #2a7d99);
			-webkit-animation: 2s animateRight linear -1s infinite;
			animation: 2s animateRight linear -1s infinite;
		}

		@keyframes animateRight {
			0% {
				-webkit-transform: translateY(100%);
				transform: translateY(100%);
			}

			100% {
				-webkit-transform: translateY(-100%);
				transform: translateY(-100%);
			}
		}

		.animated-button1 span:nth-child(3) {
			bottom: 0px;
			left: 0px;
			width: 100%;
			height: 2px;
			background: -webkit-gradient(linear, left top, right top, from(rgba(43, 8, 8, 0)), to(#2B697E));
			background: linear-gradient(to right, rgba(43, 8, 8, 0), #2B697E);
			-webkit-animation: 2s animateBottom linear infinite;
			animation: 2s animateBottom linear infinite;
		}

		@keyframes animateBottom {
			0% {
				-webkit-transform: translateX(-100%);
				transform: translateX(-100%);
			}

			100% {
				-webkit-transform: translateX(100%);
				transform: translateX(100%);
			}
		}

		.animated-button1 span:nth-child(4) {
			top: 0px;
			left: 0px;
			height: 100%;
			width: 2px;
			background: -webkit-gradient(linear, left top, left bottom, from(rgba(43, 8, 8, 0)), to(#2B697E));
			background: linear-gradient(to bottom, rgba(43, 8, 8, 0), #2B697E);
			-webkit-animation: 2s animateLeft linear -1s infinite;
			animation: 2s animateLeft linear -1s infinite;
		}

		@keyframes animateLeft {
			0% {
				-webkit-transform: translateY(-100%);
				transform: translateY(-100%);
			}

			100% {
				-webkit-transform: translateY(100%);
				transform: translateY(100%);
			}
		}

		/* @import url(https://fonts.googleapis.com/css?family=Nova+Mono); */






		#button {
			width: 100px;
			height: 40px;
			background: #6959ff;
			/* margin: 100px auto; */
			z-index: 1;
			overflow: hidden;
			border: 1px solid #606060;
			border-radius: 10px;
			box-shadow: 0px 2px 1px rgba(0, 0, 0, 0.3);



		}






		#second {
			color: whitesmoke !important;
			width: 100px;
			height: 40px;
			background: linear-gradient(#ffcc60, #efb134);
			background: -webkit-linear-gradient(#ffcc60, #efb134);
			-webkit-transform: translatex(-310px) skew(0deg);
			-moz-transform: translatex(-310px) skew(0deg);
			-ms-transform: translatex(-310px) skew(0deg);
			-o-transform: translatex(-310px) skew(0deg);
			transform: translatex(-310px) skew(0deg);
			text-align: center;
			line-height: 70px;
			z-index: 3;
			position: relative;
			border-radius: 10px;
			box-shadow: inset 0px 2px 1px rgba(255, 255, 255, 0.5);
			-webkit-animation: removesecond 1s reverse;





		}


		#first {
			color: whitesmoke !important;
			width: 100px;
			height: 70px;
			background: linear-gradient(#3570d6, #215dc4);
			background: -webkit-linear-gradient(#3570d6, #215dc4);
			position: relative;
			top: -55px;
			text-align: center;
			line-height: 70px;
			z-index: 2;
			border-radius: 10px;
			box-shadow: inset 0px 2px 1px rgba(255, 255, 255, 0.5);
		}

		#first a {
			color: whitesmoke !important;
		}


		#second a {
			color: whitesmoke !important;
			display: block;
			top: -15px;
			position: relative;
		}



		#button:hover #second {
			-webkit-animation: movesecond 1s forwards;
			-moz-animation: movesecond 1s forwards;
			-ms-animation: movesecond 1s forwards;
			-o-animation: movesecond 1s forwards;
			animation: movesecond 1s forwards;
		}



		#Third {
			width: 100px;
			height: 40px;
			background: linear-gradient(#9944ff, #7a22e5);
			background: -webkit-linear-gradient(#9944ff, #7a22e5);
			border-radius: 10px;
			-webkit-transform: translateY(10px);
			-moz-transform: translateY(10px);
			-ms-transform: translateY(10px);
			-o-transform: translateY(10px);
			transform: translateY(10px);
			box-shadow: inset 0px 2px 1px rgba(255, 255, 255, 0.5);

		}

		#second:active #Third {
			-webkit-animation: moveThird 1s forwards;
			-moz-animation: moveThird 1s forwards;
			-ms-animation: moveThird 1s forwards;
			-o-animation: moveThird 1s forwards;
			animation: moveThird 1s forwards;
		}





		/********************
Animation Keyframes
********************/

		/* This animation for second button (Click me Yellow)*/

		@-webkit-keyframes removesecond {
			0% {
				-webkit-transform: translateX(-320px) skew(0deg);
			}

			20% {
				-webkit-transform: translateX(50px) skew(-20deg);
			}

			40% {
				-webkit-transform: translateX(-50dpx) skew(20deg);
			}

			60% {
				-webkit-transform: translateX(25dpx) skew(-8deg);
			}

			80% {
				-webkit-transform: translateX(-15px) skew(8deg);
			}

			100% {
				-webkit-transform: translateX(0px) skew(0deg);
			}
		}

		@-webkit-keyframes movesecond {
			0% {
				-webkit-transform: translateX(-320px) skew(0deg);
			}

			20% {
				-webkit-transform: translateX(50px) skew(-20deg);
			}

			40% {
				-webkit-transform: translateX(-50dpx) skew(20deg);
			}

			60% {
				-webkit-transform: translateX(25dpx) skew(-8deg);
			}

			80% {
				-webkit-transform: translateX(-15px) skew(8deg);
			}

			100% {
				-webkit-transform: translateX(0px) skew(0deg);
			}
		}

		@-moz-keyframes movesecond {
			0% {
				-webkit-transform: translateX(-320px) skew(0deg);
			}

			20% {
				-webkit-transform: translateX(50px) skew(-20deg);
			}

			40% {
				-webkit-transform: translateX(-50dpx) skew(20deg);
			}

			60% {
				-webkit-transform: translateX(25dpx) skew(-8deg);
			}

			80% {
				-webkit-transform: translateX(-15px) skew(8deg);
			}

			100% {
				-webkit-transform: translateX(0px) skew(0deg);
			}
		}

		@-ms-keyframes movesecond {
			0% {
				-webkit-transform: translateX(-320px) skew(0deg);
			}

			20% {
				-webkit-transform: translateX(50px) skew(-20deg);
			}

			40% {
				-webkit-transform: translateX(-50dpx) skew(20deg);
			}

			60% {
				-webkit-transform: translateX(25dpx) skew(-8deg);
			}

			80% {
				-webkit-transform: translateX(-15px) skew(8deg);
			}

			100% {
				-webkit-transform: translateX(0px) skew(0deg);
			}
		}

		@-o-keyframes movesecond {
			0% {
				-webkit-transform: translateX(-320px) skew(0deg);
			}

			20% {
				-webkit-transform: translateX(50px) skew(-20deg);
			}

			40% {
				-webkit-transform: translateX(-50dpx) skew(20deg);
			}

			60% {
				-webkit-transform: translateX(25dpx) skew(-8deg);
			}

			80% {
				-webkit-transform: translateX(-15px) skew(8deg);
			}

			100% {
				-webkit-transform: translateX(0px) skew(0deg);
			}
		}

		@keyframes movesecond {
			0% {
				-webkit-transform: translateX(-320px) skew(0deg);
			}

			20% {
				-webkit-transform: translateX(50px) skew(-20deg);
			}

			40% {
				-webkit-transform: translateX(-50dpx) skew(20deg);
			}

			60% {
				-webkit-transform: translateX(25dpx) skew(-8deg);
			}

			80% {
				-webkit-transform: translateX(-15px) skew(8deg);
			}

			100% {
				-webkit-transform: translateX(0px) skew(0deg);
			}
		}



		/* This animation for third button ( that's it purple)*/

		@-webkit-keyframes moveThird {
			0% {
				-webkit-transform: translateY(10px);
			}

			20% {
				-webkit-transform: translateY(-170px);
			}

			40% {
				-webkit-transform: translateY(50dpx);
			}

			60% {
				-webkit-transform: translateY(-25dpx);
			}

			80% {
				-webkit-transform: translateY(15px);
			}

			100% {
				-webkit-transform: translateY(-70px);
			}
		}

		@-moz-keyframes moveThird {
			0% {
				-webkit-transform: translateY(10px);
			}

			20% {
				-webkit-transform: translateY(-170px);
			}

			40% {
				-webkit-transform: translateY(50dpx);
			}

			60% {
				-webkit-transform: translateY(-25dpx);
			}

			80% {
				-webkit-transform: translateY(15px);
			}

			100% {
				-webkit-transform: translateY(-70px);
			}
		}

		@-ms-keyframes moveThird {
			0% {
				-webkit-transform: translateY(10px);
			}

			20% {
				-webkit-transform: translateY(-170px);
			}

			40% {
				-webkit-transform: translateY(50dpx);
			}

			60% {
				-webkit-transform: translateY(-25dpx);
			}

			80% {
				-webkit-transform: translateY(15px);
			}

			100% {
				-webkit-transform: translateY(-70px);
			}
		}

		@-o-keyframes moveThird {
			0% {
				-webkit-transform: translateY(10px);
			}

			20% {
				-webkit-transform: translateY(-170px);
			}

			40% {
				-webkit-transform: translateY(50dpx);
			}

			60% {
				-webkit-transform: translateY(-25dpx);
			}

			80% {
				-webkit-transform: translateY(15px);
			}

			100% {
				-webkit-transform: translateY(-70px);
			}
		}

		@keyframes moveThird {
			0% {
				-webkit-transform: translateY(10px);
			}

			20% {
				-webkit-transform: translateY(-170px);
			}

			40% {
				-webkit-transform: translateY(50dpx);
			}

			60% {
				-webkit-transform: translateY(-25dpx);
			}

			80% {
				-webkit-transform: translateY(-95px);
			}

			100% {
				-webkit-transform: translateY(-70px);
			}
		}
	</style>

</head>

<body id="bg">
	<div class="page-wraper">
		{{-- @include('front.partial.home-page-content') --}}
		@include('front.partial.header')
		<div class="page-content">
			@if (isset($slot))
				{{ $slot }}
			@else
				@yield('content')
			@endif
		</div>
		{{-- @include('front.partial.footer') --}}

	</div>
	@livewire('front.footers')
	@include('front.partial.script')
</body>

</html>
