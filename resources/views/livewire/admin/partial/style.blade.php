<meta charset="utf-8" />
<meta name="description" content="{{ setting('general_settings.app_description') }}" />
<meta name="keywords" content="crm,firedirect" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{ setting('general_settings.app_description') }}" />
<meta property="og:url" content="{{ setting('copy_right_url') }}" />
<meta property="og:site_name" content="{{ setting('general_settings.app_name') }}" />
<link rel="canonical" href="{{ setting('copy_right_url') }}" data-navigate-track />
<link rel="shortcut icon" href="{{ env('APP_URL') . '/storage' . '/' . setting('general_settings.favicon') }}"
	data-navigate-track />
<!--begin::Fonts(mandatory for all pages)-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" data-navigate-track />
<!--end::Fonts-->
<!-- Include Jodit CSS Styling -->
<style>
	body {
		cursor: none;
	}
</style>

<link type="text/css" href="{{ asset('assets/sample/css/sample.css') }}" rel="stylesheet" media="screen" />
<link rel="stylesheet" href="https://unpkg.com/jodit@4.0.1/es2021/jodit.min.css" />
<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
<link href="https://cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/richtexteditor/rte_theme_default.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/res/style.css') }}" />
{{-- <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" /> --}}
<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"
	data-navigate-track />
<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" data-navigate-track />
<!--end::Global Stylesheets Bundle-->
<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"
	data-navigate-track />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
	data-navigate-track />
@include('livewire.admin.partial.animation-css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
	data-navigate-track />
<link rel="stylesheet" type="text/css"
	href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" data-navigate-track />
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
@stack('styles')

@livewireStyles
