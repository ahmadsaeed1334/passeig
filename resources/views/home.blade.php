<x-app-layout meta-title="Laravel Blog" meta-description="Lorem ipsum dolor sit amet, consectetur adipisicing elit">
	<div class="container mx-auto max-w-4xl py-6">

		<div class="mb-8 grid grid-cols-1 gap-8 md:grid-cols-3">
			<!-- Latest Post -->
			<div class="col-span-2">
				<h2 class="mb-3 border-b-2 border-blue-500 pb-1 text-lg font-bold uppercase text-blue-500 sm:text-xl">
					Latest Post
				</h2>

				@if ($latestPost)
					<x-post-item :post="$latestPost" />
				@endif
			</div>

			<!-- Popular 3 post -->
			<div>
				<h2 class="mb-3 border-b-2 border-blue-500 pb-1 text-lg font-bold uppercase text-blue-500 sm:text-xl">
					Popular Posts
				</h2>
				@foreach ($popularPosts as $post)
					<div class="mb-4 grid grid-cols-4 gap-2">
						<a href="{{ route('view', $post) }}" class="pt-1">
							<img src="{{ $post->getThumbnail() }}" alt="{{ $post->title }}" />
						</a>
						<div class="col-span-3">
							<a href="{{ route('view', $post) }}">
								<h3 class="truncate whitespace-nowrap text-sm uppercase">{{ $post->title }}</h3>
							</a>
							<div class="mb-2 flex gap-4">
								@foreach ($post->categories as $category)
									<a href="#" class="rounded bg-blue-500 p-1 text-xs font-bold uppercase text-white">
										{{ $category->title }}
									</a>
								@endforeach
							</div>
							<div class="text-xs">
								{{ $post->shortBody(10) }}
							</div>
							<a href="{{ route('view', $post) }}" class="text-xs uppercase text-gray-800 hover:text-black">Continue
								Reading <i class="fas fa-arrow-right"></i>
							</a>
						</div>
					</div>
				@endforeach
			</div>
		</div>

		<!-- Recommended posts -->
		<div class="mb-8">
			<h2 class="mb-3 border-b-2 border-blue-500 pb-1 text-lg font-bold uppercase text-blue-500 sm:text-xl">
				Recommended Posts
			</h2>

			<div class="grid grid-cols-1 gap-3 md:grid-cols-3">
				@foreach ($recommendedPosts as $post)
					<x-post-item :post="$post" :show-author="false" />
				@endforeach
			</div>
		</div>

		<!-- Latest Categories -->

		@foreach ($categories as $category)
			<div>
				<h2 class="mb-3 border-b-2 border-blue-500 pb-1 text-lg font-bold uppercase text-blue-500 sm:text-xl">
					Category "{{ $category->title }}"
					<a href="{{ route('by-category', $category) }}">
						<i class="fas fa-arrow-right"></i>
					</a>
				</h2>

				<div class="mb-6">
					<div class="grid grid-cols-1 gap-3 md:grid-cols-3">
						@foreach ($category->publishedPosts()->limit(3)->get() as $post)
							<x-post-item :post="$post" :show-author="false" />
						@endforeach
					</div>
				</div>
			</div>
		@endforeach

	</div>
</x-app-layout>
{{-- <!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic | Bootstrap HTML, VueJS, React, Angular, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
	<base href="" />
	<title>Metronic - the world's #1 selling Bootstrap Admin Theme Ecosystem for HTML, Vue, React, Angular & Laravel by
		Keenthemes</title>
	<meta charset="utf-8" />
	<meta name="description"
		content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel versions. Grab your copy now and get life-time updates for free." />
	<meta name="keywords"
		content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title"
		content="Metronic | Bootstrap HTML, VueJS, React, Angular, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel Admin Dashboard Theme" />
	<meta property="og:url" content="https://keenthemes.com/metronic" />
	<meta property="og:site_name" content="Keenthemes | Metronic" />
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
	<!--begin::Fonts(mandatory for all pages)-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Vendor Stylesheets(used for this page only)-->
	<link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
		type="text/css" />
	<!--end::Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
	<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
	<style>
		.page-bg {
			background-size: cover;
			background-attachment: fixed;
			background-repeat: no-repeat;
			background-position: center;
			background-image: url({{ asset('assets/media/misc/page-bg.jpg') }});
		}
	</style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="page-bg">
	<!--begin::Theme mode setup on page load-->
	<script>
		var defaultThemeMode = "light";
		var themeMode;
		if (document.documentElement) {
			if (document.documentElement.hasAttribute("data-theme-mode")) {
				themeMode = document.documentElement.getAttribute("data-theme-mode");
			} else {
				if (localStorage.getItem("data-theme") !== null) {
					themeMode = localStorage.getItem("data-theme");
				} else {
					themeMode = defaultThemeMode;
				}
			}
			if (themeMode === "system") {
				themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
			}
			document.documentElement.setAttribute("data-theme", themeMode);
		}
	</script>
	<!--end::Theme mode setup on page load-->
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page launcher sidebar-enabled d-flex flex-column-fluid me-lg-5 flex-row" id="kt_page">
			<!--begin::Content-->
			<div class="d-flex flex-row-fluid">
				<!--begin::Container-->
				<div class="d-flex flex-column flex-row-fluid align-items-center">
					<!--begin::Menu-->
					<div class="d-flex flex-column flex-column-fluid mb-lg-10 mb-5">
						<!--begin::Brand-->
						<div class="d-flex flex-center pt-lg-0 mb-lg-0 h-lg-225px mb-10 pt-10">
							<!--begin::Logo-->
							<a href="{{ route('home') }}">
								<img alt="{{ setting('general_settings.app_name') }}"
									src="{{ env('APP_URL') . '/storage' . '/' . setting('general_settings.logo') }}" class="h-150px" />
							</a>
							<!--end::Logo-->
						</div>
						<!--end::Brand-->
						<!--begin::Row-->
						<div class="row g-7 w-xxl-850px">
							<!--begin::Col-->
							<div class="col-xxl-5">
								<!--begin::Card-->
								<div class="card h-lg-100 border-0 shadow-none" style="background-color: #A838FF">
									<!--begin::Card body-->
									<div class="card-body d-flex flex-column flex-center pt-15 pb-0">
										<!--begin::Wrapper-->
										<div class="mb-10 px-10">
											<!--begin::Heading-->
											<h3 class="fw-bolder ttext-center text-uppercase mb-2 mb-6 text-white">Stock Management</h3>
											<!--end::Heading-->
											<!--begin::List-->
											<div class="mb-7">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-2">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
													<span class="svg-icon svg-icon-4 svg-icon-white me-3 opacity-75">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
															<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<span class="text-white opacity-75">Stock Requests</span>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-2">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
													<span class="svg-icon svg-icon-4 svg-icon-white me-3 opacity-75">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
															<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<span class="text-white opacity-75">Stationery Requests</span>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-2">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
													<span class="svg-icon svg-icon-4 svg-icon-white me-3 opacity-75">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
															<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<span class="text-white opacity-75">Uniform Requests</span>
												</div>
												<!--end::Item-->
											</div>
											<!--end::List-->
											<!--begin::Link-->
											<a href="../../demo10/dist/dashboard.html"
												class="btn btn-hover-rise text-uppercase fs-7 fw-bold bg-white bg-opacity-10 text-white">Go To
												Dashboard</a>
											<!--end::Link-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Illustrations-->
										<img class="mw-100 h-225px mb-lg-n18 mx-auto"
											src="{{ asset('assets/media/illustrations/sigma-1/12.png') }}" />
										<!--end::Illustrations-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Card-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-xxl-7">
								<!--begin::Row-->
								<div class="row g-lg-7">
									<!--begin::Col-->
									<div class="col-sm-6">
										<!--begin::Card-->
										<a href="{{ route('admin/dashboard') }}" class="card min-h-200px mb-7 border-0 shadow-none"
											style="background-color: #F9666E">
											<!--begin::Card body-->
											<div class="card-body d-flex flex-column flex-center text-center">
												<!--begin::Illustrations-->
												<img class="mw-100 h-100px mx-auto mb-7" src="{{ asset('assets/media/illustrations/sigma-1/4.png') }}" />
												<!--end::Illustrations-->
												<!--begin::Heading-->
												<h4 class="fw-bold text-uppercase text-white">Human Resource</h4>
												<!--end::Heading-->
											</div>
											<!--end::Card body-->
										</a>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-sm-6">
										<!--begin::Card-->
										<a href="{{ route('admin/dashboard') }}" class="card min-h-200px mb-7 border-0 shadow-none"
											style="background-color: #35D29A">
											<!--begin::Card body-->
											<div class="card-body d-flex flex-column flex-center text-center">
												<!--begin::Illustrations-->
												<img class="mw-100 h-100px mx-auto mb-7" src="{{ asset('assets/media/illustrations/sigma-1/5.png') }}" />
												<!--end::Illustrations-->
												<!--begin::Heading-->
												<h4 class="fw-bold text-uppercase text-white">ADMINISTRATION</h4>
												<!--end::Heading-->
											</div>
											<!--end::Card body-->
										</a>
										<!--end::Card-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Card-->
								<div class="card min-h-200px border-0 shadow-none" style="background-color: #D5D83D">
									<!--begin::Card body-->
									<div class="card-body d-flex flex-center flex-wrap">
										<!--begin::Illustrations-->
										<img class="mw-100 h-200px me-4 mb-lg-0 mb-5"
											src="{{ asset('assets/media/illustrations/sigma-1/11.png') }}" />
										<!--end::Illustrations-->
										<!--begin::Wrapper-->
										<div class="d-flex flex-column align-items-center align-items-md-start flex-grow-1" data-theme="light">
											<!--begin::Heading-->
											<h3 class="fw-bolder text-uppercase mb-5 text-gray-900">Vehicles</h3>
											<!--end::Heading-->
											<!--begin::List-->
											<div class="text-md-start mb-5 text-center text-gray-800">
												Company Vehicles
												<br />Management
											</div>
											<!--end::List-->
											<!--begin::Link-->
											<a href="https://preview.keenthemes.com/html/metronic/docs"
												class="btn btn-hover-rise text-uppercase fs-7 fw-bold text-gray-900"
												style="background-color: #EBEE51">Dashboard</a>
											<!--end::Link-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Card-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Menu-->
					<!--begin::Footer-->
					<div class="d-flex flex-column-auto flex-center">
						<!--begin::Navs-->
						<ul class="menu fw-semibold order-1">
							<li class="menu-item">
								<div class="text-dark order-md-1 order-2">
									<span class="fw-semibold me-1 text-white">{{ date('Y') }} &copy;</span>
									<a href="{{ setting('copy_right_url') }}" target="_blank"
										class="text-hover-{{ setting('general_settings.primary_color') }} text-white">{{ setting('copy_right') }}</a>
								</div>
							</li>
						</ul>
						<!--end::Navs-->
					</div>
					<!--end::Footer-->
				</div>
				<!--begin::Content-->
			</div>
			<!--begin::Content-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Root-->
	<!--end::Main-->
	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
		<span class="svg-icon">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
					transform="rotate(90 13 6)" fill="currentColor" />
				<path
					d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
					fill="currentColor" />
			</svg>
		</span>
		<!--end::Svg Icon-->
	</div>
	<!--end::Scrolltop-->
	<!--begin::Javascript-->
	<script>
		var hostUrl = "assets/";
	</script>
	<!--begin::Global Javascript Bundle(mandatory for all pages)-->
	<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
	<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
	<!--end::Global Javascript Bundle-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html> --}}
