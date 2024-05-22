<meta charset="utf-8" />
<meta name="description" content="{{ setting('general_settings.app_description') }}" />
<meta name="keywords" content="crm,firedirect" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{ setting('general_settings.app_description') }}"/>
<meta property="og:url" content="{{ setting('copy_right_url') }}" />
<meta property="og:site_name" content="{{ setting('general_settings.app_name') }}"/>
<link rel="canonical" href="{{ setting('copy_right_url') }}" data-navigate-track/>
<link rel="shortcut icon" href="{{ env('APP_URL') . '/storage' . '/' . setting('general_settings.favicon') }}" data-navigate-track/>
<!--begin::Fonts(mandatory for all pages)-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" data-navigate-track/>
<!--end::Fonts-->
<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" data-navigate-track/>
<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" data-navigate-track/>
<!--end::Global Stylesheets Bundle-->
<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" data-navigate-track/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" data-navigate-track/>

@include('livewire.admin.partial.animation-css')
<link rel="stylesheet" type="text/css" 
	href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" data-navigate-track />
<link rel="stylesheet" type="text/css"
	href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" data-navigate-track />
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
@stack('styles')

@livewireStyles
{{-- <script src="{{ asset(mix('js/app.js')) }}"></script> --}}
<style>
		.cmn-btn {
    padding: 15px 35px;
    font-size: 15px;
    font-weight: 400;
    text-transform: uppercase;
    border-radius: 999px;
    -webkit-border-radius: 999px;
    -moz-border-radius: 999px;
    -ms-border-radius: 999px;
    -o-border-radius: 999px;
    background-image: -moz-linear-gradient(86deg, rgb(236, 3, 139) 0%, rgb(251, 100, 104) 44%, rgb(251, 185, 54) 100%);
    background-image: -webkit-linear-gradient(86deg, rgb(236, 3, 139) 0%, rgb(251, 100, 104) 44%, rgb(251, 185, 54) 100%);
    background-image: -ms-linear-gradient(86deg, rgb(236, 3, 139) 0%, rgb(251, 100, 104) 44%, rgb(251, 185, 54) 100%);
    box-shadow: 0px 17px 40px 0px rgba(124, 78, 25, 0.35);
    -webkit-transition: background-size 0.3s;
    -o-transition: background-size 0.3s;
    transition: background-size 0.3s;
    color: #ffffff;
}
.cmn-btn:hover {
    background-size: 300%;
    color: #ffffff;
}

.cmn-btn.style--two {
    background-image: -moz-linear-gradient(45deg, rgb(215, 61, 245) 0%, rgb(143, 61, 245) 100%);
    background-image: -webkit-linear-gradient(45deg, rgb(215, 61, 245) 0%, rgb(143, 61, 245) 100%);
    background-image: -ms-linear-gradient(45deg, rgb(215, 61, 245) 0%, rgb(143, 61, 245) 100%);
    box-shadow: -1.113px 7.922px 16px 0px rgba(143, 61, 245, 0.63);
}

.cmn-btn.style--three {
    background-image: -moz-linear-gradient(7deg, rgb(236, 19, 121) 0%, rgb(108, 0, 146) 100%);
    background-image: -webkit-linear-gradient(7deg, rgb(236, 19, 121) 0%, rgb(108, 0, 146) 100%);
    background-image: -ms-linear-gradient(7deg, rgb(236, 19, 121) 0%, rgb(108, 0, 146) 100%);
    box-shadow: 0px 3px 7px 0px rgba(0, 0, 0, 0.35);
}
</style>