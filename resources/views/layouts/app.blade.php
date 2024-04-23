<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
	<base href="" />
	<title>{{ $page_title ?? general('app_name') }} - {{ $page_title ? general('app_name') : '' }}</title>
	@include('livewire.admin.partial.style')
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true"
	data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true"
	data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"
	class="app-default">
	<!--begin::Theme mode setup on page load-->
	<script>
		var defaultThemeMode = "dark";
		var themeMode;
		if (document.documentElement) {
			if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
				themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
			} else {
				if (localStorage.getItem("data-bs-theme") !== null) {
					themeMode = localStorage.getItem("data-bs-theme");
				} else {
					themeMode = defaultThemeMode;
				}
			}
			if (themeMode === "system") {
				themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
			}
			document.documentElement.setAttribute("data-bs-theme", themeMode);
		}
	</script>


	<!--begin::App-->
	<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
		<!--begin::Page-->
		@guest
			<div
				class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
				style="background-image: url({{ asset('assets/media/illustrations/dozzy-1/14.png') }}">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid pb-lg-20 p-10">
					<!--begin::Logo-->
					<a href="{{ url('/') }}" class="mb-12">
						<img alt="{{ setting('general_settings.app_name') }}"
							src="{{ env('APP_URL') . '/storage' . '/' . setting('general_settings.logo') }}"
							class="h-100px w-lg-500px theme-dark-show" />
						<img alt="{{ setting('general_settings.app_name') }}"
							src="{{ env('APP_URL') . '/storage' . '/' . setting('general_settings.logo_black') }}"
							class="h-100px w-lg-500px theme-light-show" />
					</a>
					<!--end::Logo-->
					<!--begin::Wrapper-->
					<div class="w-lg-500px bg-body p-lg-15 mx-auto rounded p-10 shadow-sm">
						{{ $slot }}
					</div>
					<!--begin::Footer-->
					<div class="d-flex flex-center flex-column-auto p-10">
						<!--begin::Links-->
						<div class="d-flex align-items-center fw-bold fs-6">
							<span class="text-muted px-2">Developed by:
								<a href="{{ setting('copy_right_url') }}" target="_blank"
									class="text-dark text-hover-{{ primary_color() }} px-2">
									<img alt="{{ setting('general_settings.app_name') }}"
										src="{{ env('APP_URL') . '/storage' . '/' . setting('general_settings.favicon') }}" class="h-15px" />
									{{ setting('copy_right') }}
								</a>
							</span>
						</div>
						<!--end::Links-->
					</div>
					<!--end::Footer-->
				</div>

				<!--end::Content-->

			</div>
		@endguest
		@auth
			<!--end::Authentication - Sign-in-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				@livewire('admin.partial.navbar')
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Sidebar-->
					@livewire('admin.partial.sidebar')
				
					<!--end::Sidebar-->
					<!--begin::Main-->

					<!--begin::Content wrapper-->
					{{ $slot }}
					<!--end::Content wrapper-->
					
					<!--begin::Footer-->
					@livewire('admin.partial.footer')
					<!--end::Footer-->
				</div>
				<!--end:::Main-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	@endauth
	</div>
	<!--end::App-->
	@auth
		<!--begin::Drawers-->
		<!--begin::Activities drawer-->
		@livewire('admin.partial.activities')
		<!--end::Activities drawer-->
		<!--begin::Chat drawer-->
		@livewire('admin.partial.chat')
		@livewire('admin.partial.control')
		@include('livewire.admin.partial.server')
		<!--end::Chat drawer-->
		<!--end::Drawers-->
		<!--begin::Engage drawers-->
		<!--begin::Help drawer-->
		 @livewire('admin.partial.help')
		{{-- @livewire('admin.staff.role-details')
		@livewire('admin.staff.permission-details') --}}
		<!--end::Help drawer-->
		<!--end::Engage drawers-->
		<!--begin::Engage toolbar-->
		<div class="engage-toolbar d-flex position-fixed fw-bold zindex-2 top-50 transform-90 mt-lg-20 end-0 mt-5 gap-2 px-5">
			<!--begin::Demos drawer toggle-->
			{{-- <button id="kt_engage_demos_toggle" class="engage-demos-toggle engage-btn btn fs-6 rounded-top-0 px-4 shadow-sm"
			title="Check out 24 more demos" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click"
			data-bs-trigger="hover">
			<span id="kt_engage_demos_label">Demos</span>
		</button> --}}
			<!--end::Demos drawer toggle-->
			<!--begin::Help drawer toggle-->
			{{-- <button id="kt_help_toggle" class="engage-help-toggle btn engage-btn rounded-top-0 px-5 shadow-sm"
				title="Learn & Get Inspired" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click"
				data-bs-trigger="hover">Help</button> --}}
			<!--end::Help drawer toggle-->
		</div>
		<!--end::Engage toolbar-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
						fill="currentColor" />
					<path
						d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
						fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
	@endauth
	<!--begin::Modals-->
	<!--end::Modals-->
	<!--begin::Javascript-->
	@include('livewire.admin.partial.scripts')
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>
