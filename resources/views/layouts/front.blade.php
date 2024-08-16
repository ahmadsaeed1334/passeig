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
	@include('front.partial.custom-styles')


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
	@include('front.partial.custom-scripts')
	@include('front.partial.support')
</body>

</html>
