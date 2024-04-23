<div id="kt_app_header" class="app-header">
	<!--begin::Header container-->
	<div class="app-container container-fluid d-flex align-items-stretch justify-content-between"
		id="kt_app_header_container">
		<div class="app-header-menu app-header-mobile-drawer align-items-stretch">
			<!--begin::Menu-->
			<div class="menu menu-rounded menu-column menu-lg-row my-lg-0 align-items-stretch fw-semibold px-lg-0 my-5 px-2"
				id="kt_app_header_menu" data-kt-menu="true">
				{{-- @livewire('admin.partial.navbar-dropdown') --}}
				<!--begin:Menu item-->
				<div class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
					<!--begin:Menu link-->
					<span class="label label-lg label-dark label-inline mt-2">
						@livewire('partial.slider')
					</span>
					<!--end:Menu link-->
				</div>
				<!--end:Menu item-->
			</div>
			<!--end::Menu-->
		</div>
		<!--begin::sidebar mobile toggle-->
		<div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show sidebar menu">
			<div class="btn btn-icon btn-active-color-{{ setting('general_settings.primary_color') }} w-35px h-35px"
				id="kt_app_sidebar_mobile_toggle">
				<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
				<span class="svg-icon svg-icon-1">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
							fill="currentColor" />
						<path opacity="0.3"
							d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
							fill="currentColor" />
					</svg>
				</span>
				<!--end::Svg Icon-->
			</div>
		</div>
		<!--end::sidebar mobile toggle-->
		<!--begin::Mobile logo-->
		<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
			<a href="{{ url('/') }}" class="d-lg-none">
				<img alt="{{ setting('general_settings.app_name') }}"
					src="{{ env('APP_URL') . '/storage' . '/' . setting('general_settings.logo') }}" class="h-30px theme-dark-show" />
				<img alt="{{ setting('general_settings.app_name') }}"
					src="{{ env('APP_URL') . '/storage' . '/' . setting('general_settings.logo_black') }}"
					class="h-30px theme-light-show" />
			</a>
		</div>
		<!--end::Mobile logo-->
		<!--begin::Header wrapper-->
		<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
			<!--begin::Menu wrapper-->
			<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
				data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
				data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end"
				data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
				data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
				data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
				<!--begin::Menu-->

				<!--end::Menu-->
			</div>
			<!--end::Menu wrapper-->
			<!--begin::Navbar-->
			<div class="app-navbar flex-shrink-0">
				<!--begin::Search-->
				<div class="app-navbar-item align-items-stretch ms-1 ms-lg-3">
					<!--begin::Search-->
					<div id="kt_header_search" class="header-search d-flex align-items-stretch">
						<!--begin::Search toggle-->
						@if (auth()->user()->user_type == -1)
							<div class="d-flex align-items-center" id="kt_drawer_example_basic_button">
								<div
									class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-{{ setting('general_settings.primary_color') }} w-35px h-35px w-md-40px h-md-40px">
									<i class="fs-2 fa-solid fa-gear spin"></i>
								</div>
							</div>
						@endif
						<!--end::Search toggle-->
					</div>
					<!--end::Search-->
				</div>
				<!--end::Search-->
				<!--begin::Activities-->
				<div class="app-navbar-item ms-1 ms-lg-3">
					<!--begin::Drawer toggle-->
					<div
						class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-{{ setting('general_settings.primary_color') }} w-35px h-35px w-md-40px h-md-40px"
						id="kt_activities_toggle">
						<i class="ki-duotone ki-chart-simple fs-2 fs-lg-1">
							<span class="path1"></span>
							<span class="path2"></span>
							<span class="path3"></span>
							<span class="path4"></span>
						</i>
					</div>
					<!--end::Drawer toggle-->
				</div>
				<!--end::Activities-->
				<!--begin::Notifications-->
				<div class="app-navbar-item ms-1 ms-lg-3">
					<!--begin::Menu- wrapper-->
					<div
						class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-{{ setting('general_settings.primary_color') }} w-35px h-35px w-md-40px h-md-40px"
						data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
						data-kt-menu-placement="bottom-end">
						<i class="ki-duotone ki-abstract-4 fs-2 fs-lg-1">
							<span class="path1"></span>
							<span class="path2"></span>
						</i>
					</div>
					<!--begin::Menu-->
					<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
						<!--begin::Heading-->
						<div class="d-flex flex-column bgi-no-repeat rounded-top"
							style="background-image:url('{{ asset('assets/media/misc/menu-header-bg.jpg') }}')">
							<!--begin::Title-->
							<h3 class="fw-semibold mt-10 mb-6 px-9 text-white">Notifications
								<span class="fs-8 ps-3 opacity-75">24 reports</span>
							</h3>
							<!--end::Title-->
							<!--begin::Tabs-->
							<ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
								<li class="nav-item">
									<a class="nav-link opacity-state-100 pb-4 text-white opacity-75" data-bs-toggle="tab"
										href="#kt_topbar_notifications_1">Alerts</a>
								</li>
								<li class="nav-item">
									<a class="nav-link opacity-state-100 active pb-4 text-white opacity-75" data-bs-toggle="tab"
										href="#kt_topbar_notifications_2">Updates</a>
								</li>
								<li class="nav-item">
									<a class="nav-link opacity-state-100 pb-4 text-white opacity-75" data-bs-toggle="tab"
										href="#kt_topbar_notifications_3">Logs</a>
								</li>
							</ul>
							<!--end::Tabs-->
						</div>
						<!--end::Heading-->
						<!--begin::Tab content-->
						<div class="tab-content">
							<!--begin::Tab panel-->
							<div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
								<!--begin::Items-->
								<div class="scroll-y mh-325px my-5 px-8">
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center">
											<!--begin::Symbol-->
											<div class="symbol symbol-35px me-4">
												<span class="symbol-label bg-light-{{ setting('general_settings.primary_color') }}">
													<!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
													<span class="svg-icon svg-icon-2 svg-icon-{{ setting('general_settings.primary_color') }}">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3"
																d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z"
																fill="currentColor" />
															<path
																d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div class="me-2 mb-0">
												<a href="#"
													class="fs-6 text-hover-{{ setting('general_settings.primary_color') }} fw-bold text-gray-800">Project
													Alice</a>
												<div class="fs-7 text-gray-400">Phase 1 development</div>
											</div>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">1 hr</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center">
											<!--begin::Symbol-->
											<div class="symbol symbol-35px me-4">
												<span class="symbol-label bg-light-danger">
													<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
													<span class="svg-icon svg-icon-2 svg-icon-danger">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
																fill="currentColor" />
															<rect x="11" y="14" width="7" height="2" rx="1"
																transform="rotate(-90 11 14)" fill="currentColor" />
															<rect x="11" y="17" width="2" height="2" rx="1"
																transform="rotate(-90 11 17)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div class="me-2 mb-0">
												<a href="#"
													class="fs-6 text-hover-{{ setting('general_settings.primary_color') }} fw-bold text-gray-800">HR
													Confidential</a>
												<div class="fs-7 text-gray-400">Confidential staff documents</div>
											</div>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">2 hrs</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center">
											<!--begin::Symbol-->
											<div class="symbol symbol-35px me-4">
												<span class="symbol-label bg-light-warning">
													<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
													<span class="svg-icon svg-icon-2 svg-icon-warning">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3"
																d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
																fill="currentColor" />
															<path
																d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div class="me-2 mb-0">
												<a href="#"
													class="fs-6 text-hover-{{ setting('general_settings.primary_color') }} fw-bold text-gray-800">Company
													HR</a>
												<div class="fs-7 text-gray-400">Corporeate staff profiles</div>
											</div>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">5 hrs</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center">
											<!--begin::Symbol-->
											<div class="symbol symbol-35px me-4">
												<span class="symbol-label bg-light-success">
													<!--begin::Svg Icon | path: icons/duotune/files/fil023.svg-->
													<span class="svg-icon svg-icon-2 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3"
																d="M5 15C3.3 15 2 13.7 2 12C2 10.3 3.3 9 5 9H5.10001C5.00001 8.7 5 8.3 5 8C5 5.2 7.2 3 10 3C11.9 3 13.5 4 14.3 5.5C14.8 5.2 15.4 5 16 5C17.7 5 19 6.3 19 8C19 8.4 18.9 8.7 18.8 9C18.9 9 18.9 9 19 9C20.7 9 22 10.3 22 12C22 13.7 20.7 15 19 15H5ZM5 12.6H13L9.7 9.29999C9.3 8.89999 8.7 8.89999 8.3 9.29999L5 12.6Z"
																fill="currentColor" />
															<path d="M17 17.4V12C17 11.4 16.6 11 16 11C15.4 11 15 11.4 15 12V17.4H17Z" fill="currentColor" />
															<path opacity="0.3" d="M12 17.4H20L16.7 20.7C16.3 21.1 15.7 21.1 15.3 20.7L12 17.4Z"
																fill="currentColor" />
															<path d="M8 12.6V18C8 18.6 8.4 19 9 19C9.6 19 10 18.6 10 18V12.6H8Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div class="me-2 mb-0">
												<a href="#"
													class="fs-6 text-hover-{{ setting('general_settings.primary_color') }} fw-bold text-gray-800">Project
													Redux</a>
												<div class="fs-7 text-gray-400">New frontend admin theme</div>
											</div>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">2 days</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center">
											<!--begin::Symbol-->
											<div class="symbol symbol-35px me-4">
												<span class="symbol-label bg-light-{{ setting('general_settings.primary_color') }}">
													<!--begin::Svg Icon | path: icons/duotune/maps/map001.svg-->
													<span class="svg-icon svg-icon-2 svg-icon-{{ setting('general_settings.primary_color') }}">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M6 22H4V3C4 2.4 4.4 2 5 2C5.6 2 6 2.4 6 3V22Z" fill="currentColor" />
															<path d="M18 14H4V4H18C18.8 4 19.2 4.9 18.7 5.5L16 9L18.8 12.5C19.3 13.1 18.8 14 18 14Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div class="me-2 mb-0">
												<a href="#"
													class="fs-6 text-hover-{{ setting('general_settings.primary_color') }} fw-bold text-gray-800">Project
													Breafing</a>
												<div class="fs-7 text-gray-400">Product launch status update</div>
											</div>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">21 Jan</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center">
											<!--begin::Symbol-->
											<div class="symbol symbol-35px me-4">
												<span class="symbol-label bg-light-info">
													<!--begin::Svg Icon | path: icons/duotune/general/gen006.svg-->
													<span class="svg-icon svg-icon-2 svg-icon-info">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3"
																d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z"
																fill="currentColor" />
															<path
																d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div class="me-2 mb-0">
												<a href="#"
													class="fs-6 text-hover-{{ setting('general_settings.primary_color') }} fw-bold text-gray-800">Banner
													Assets</a>
												<div class="fs-7 text-gray-400">Collection of banner images</div>
											</div>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">21 Jan</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center">
											<!--begin::Symbol-->
											<div class="symbol symbol-35px me-4">
												<span class="symbol-label bg-light-warning">
													<!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
													<span class="svg-icon svg-icon-2 svg-icon-warning">
														<svg width="24" height="25" viewBox="0 0 24 25" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3"
																d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z"
																fill="currentColor" />
															<path
																d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
											</div>
											<!--end::Symbol-->
											<!--begin::Title-->
											<div class="me-2 mb-0">
												<a href="#"
													class="fs-6 text-hover-{{ setting('general_settings.primary_color') }} fw-bold text-gray-800">Icon
													Assets</a>
												<div class="fs-7 text-gray-400">Collection of SVG icons</div>
											</div>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">20 March</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
								</div>
								<!--end::Items-->
								<!--begin::View more-->
								<div class="border-top py-3 text-center">
									<a href="../../demo1/dist/pages/user-profile/activity.html"
										class="btn btn-color-gray-600 btn-active-color-{{ setting('general_settings.primary_color') }}">View All
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
										<span class="svg-icon svg-icon-5">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
													transform="rotate(-180 18 13)" fill="currentColor" />
												<path
													d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
													fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</a>
								</div>
								<!--end::View more-->
							</div>
							<!--end::Tab panel-->
							<!--begin::Tab panel-->
							<div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
								<!--begin::Wrapper-->
								<div class="d-flex flex-column px-9">
									<!--begin::Section-->
									<div class="pt-10 pb-0">
										<!--begin::Title-->
										<h3 class="text-dark fw-bold text-center">Get Pro Access</h3>
										<!--end::Title-->
										<!--begin::Text-->
										<div class="fw-semibold pt-1 text-center text-gray-600">Outlines keep you honest. They stoping you from
											amazing poorly about drive</div>
										<!--end::Text-->
										<!--begin::Action-->
										<div class="mt-5 mb-9 text-center">
											<a href="#" class="btn btn-sm btn-{{ setting('general_settings.primary_color') }} px-6"
												data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
										</div>
										<!--end::Action-->
									</div>
									<!--end::Section-->
									<!--begin::Illustration-->
									<div class="px-4 text-center">
										<img class="mw-100 mh-200px" alt="image"
											src="{{ asset('assets/media/illustrations/sketchy-1/1.png') }}" />
									</div>
									<!--end::Illustration-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Tab panel-->
							<!--begin::Tab panel-->
							<div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
								<!--begin::Items-->
								<div class="scroll-y mh-325px my-5 px-8">
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Code-->
											<span class="w-70px badge badge-light-success me-4">200 OK</span>
											<!--end::Code-->
											<!--begin::Title-->
											<a href="#"
												class="text-hover-{{ setting('general_settings.primary_color') }} fw-semibold text-gray-800">New order</a>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">Just now</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Code-->
											<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
											<!--end::Code-->
											<!--begin::Title-->
											<a href="#"
												class="text-hover-{{ setting('general_settings.primary_color') }} fw-semibold text-gray-800">New
												customer</a>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">2 hrs</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Code-->
											<span class="w-70px badge badge-light-success me-4">200 OK</span>
											<!--end::Code-->
											<!--begin::Title-->
											<a href="#"
												class="text-hover-{{ setting('general_settings.primary_color') }} fw-semibold text-gray-800">Payment
												process</a>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">5 hrs</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Code-->
											<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
											<!--end::Code-->
											<!--begin::Title-->
											<a href="#"
												class="text-hover-{{ setting('general_settings.primary_color') }} fw-semibold text-gray-800">Search
												query</a>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">2 days</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Code-->
											<span class="w-70px badge badge-light-success me-4">200 OK</span>
											<!--end::Code-->
											<!--begin::Title-->
											<a href="#"
												class="text-hover-{{ setting('general_settings.primary_color') }} fw-semibold text-gray-800">API
												connection</a>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">1 week</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Code-->
											<span class="w-70px badge badge-light-success me-4">200 OK</span>
											<!--end::Code-->
											<!--begin::Title-->
											<a href="#"
												class="text-hover-{{ setting('general_settings.primary_color') }} fw-semibold text-gray-800">Database
												restore</a>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">Mar 5</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Code-->
											<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
											<!--end::Code-->
											<!--begin::Title-->
											<a href="#"
												class="text-hover-{{ setting('general_settings.primary_color') }} fw-semibold text-gray-800">System
												update</a>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">May 15</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Code-->
											<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
											<!--end::Code-->
											<!--begin::Title-->
											<a href="#"
												class="text-hover-{{ setting('general_settings.primary_color') }} fw-semibold text-gray-800">Server OS
												update</a>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">Apr 3</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Code-->
											<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
											<!--end::Code-->
											<!--begin::Title-->
											<a href="#"
												class="text-hover-{{ setting('general_settings.primary_color') }} fw-semibold text-gray-800">API
												rollback</a>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">Jun 30</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Code-->
											<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
											<!--end::Code-->
											<!--begin::Title-->
											<a href="#"
												class="text-hover-{{ setting('general_settings.primary_color') }} fw-semibold text-gray-800">Refund
												process</a>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">Jul 10</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Code-->
											<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
											<!--end::Code-->
											<!--begin::Title-->
											<a href="#"
												class="text-hover-{{ setting('general_settings.primary_color') }} fw-semibold text-gray-800">Withdrawal
												process</a>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">Sep 10</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-stack py-4">
										<!--begin::Section-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Code-->
											<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
											<!--end::Code-->
											<!--begin::Title-->
											<a href="#"
												class="text-hover-{{ setting('general_settings.primary_color') }} fw-semibold text-gray-800">Mail
												tasks</a>
											<!--end::Title-->
										</div>
										<!--end::Section-->
										<!--begin::Label-->
										<span class="badge badge-light fs-8">Dec 10</span>
										<!--end::Label-->
									</div>
									<!--end::Item-->
								</div>
								<!--end::Items-->
								<!--begin::View more-->
								<div class="border-top py-3 text-center">
									<a href="../../demo1/dist/pages/user-profile/activity.html"
										class="btn btn-color-gray-600 btn-active-color-{{ setting('general_settings.primary_color') }}">View All
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
										<span class="svg-icon svg-icon-5">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
													transform="rotate(-180 18 13)" fill="currentColor" />
												<path
													d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
													fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</a>
								</div>
								<!--end::View more-->
							</div>
							<!--end::Tab panel-->
						</div>
						<!--end::Tab content-->
					</div>
					<!--end::Menu-->
					<!--end::Menu wrapper-->
				</div>
				<!--end::Notifications-->
				<!--begin::Chat-->
				<div class="app-navbar-item ms-1 ms-lg-3">
					<!--begin::Menu wrapper-->
					<div
						class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-{{ setting('general_settings.primary_color') }} w-35px h-35px w-md-40px h-md-40px position-relative"
						id="kt_drawer_chat_toggle">
						<i class="ki-duotone ki-message-text-2 fs-2 fs-lg-1">
							<span class="path1"></span>
							<span class="path2"></span>
							<span class="path3"></span>
						</i>
						<span
							class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle start-50 animation-blink top-0"></span>
					</div>
					<!--end::Menu wrapper-->
				</div>
				<!--end::Chat-->
				<!--begin::My apps links-->
				<div class="app-navbar-item ms-1 ms-lg-3">
					<!--begin::Menu wrapper-->
					<div
						class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-{{ setting('general_settings.primary_color') }} w-35px h-35px w-md-40px h-md-40px"
						data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
						data-kt-menu-placement="bottom-end">
						<i class="ki-duotone ki-element-11 fs-2 fs-lg-1">
							<span class="path1"></span>
							<span class="path2"></span>
							<span class="path3"></span>
							<span class="path4"></span>
						</i>
					</div>
					<!--begin::My apps-->
					<div class="menu menu-sub menu-sub-dropdown menu-column w-100 w-sm-350px" data-kt-menu="true">
						<!--begin::Card-->
						<div class="card">
							<!--begin::Card header-->
							<div class="card-header">
								<!--begin::Card title-->
								<div class="card-title">My Apps</div>
								<!--end::Card title-->
								<!--begin::Card toolbar-->
								<div class="card-toolbar">
									<!--begin::Menu-->
									<button type="button"
										class="btn btn-sm btn-icon btn-active-light-{{ setting('general_settings.primary_color') }} me-n3"
										data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
										<span class="svg-icon svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path
													d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
													fill="currentColor" />
												<path opacity="0.3"
													d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
													fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--begin::Menu 3-->
									<div
										class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-{{ setting('general_settings.primary_color') }} fw-semibold w-200px py-3"
										data-kt-menu="true">
										<!--begin::Heading-->
										<div class="menu-item px-3">
											<div class="menu-content text-muted fs-7 text-uppercase px-3 pb-2">Payments</div>
										</div>
										<!--end::Heading-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Create Invoice</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link flex-stack px-3">Create Payment
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
													title="Specify a target name for future usage and reference"></i></a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Generate Bill</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
											<a href="#" class="menu-link px-3">
												<span class="menu-title">Subscription</span>
												<span class="menu-arrow"></span>
											</a>
											<!--begin::Menu sub-->
											<div class="menu-sub menu-sub-dropdown w-175px py-4">
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Plans</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Billing</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Statements</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu separator-->
												<div class="separator my-2"></div>
												<!--end::Menu separator-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<div class="menu-content px-3">
														<!--begin::Switch-->
														<label class="form-check form-switch form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked"
																name="notifications" />
															<!--end::Input-->
															<!--end::Label-->
															<span class="form-check-label text-muted fs-6">Recuring</span>
															<!--end::Label-->
														</label>
														<!--end::Switch-->
													</div>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu sub-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item my-1 px-3">
											<a href="#" class="menu-link px-3">Settings</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu 3-->
									<!--end::Menu-->
								</div>
								<!--end::Card toolbar-->
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body py-5">
								<!--begin::Scroll-->
								<div class="mh-450px scroll-y me-n5 pe-5">
									<!--begin::Row-->
									<div class="row g-2">
										<!--begin::Col-->
										<div class="col-4">
											<a href="#"
												class="d-flex flex-column flex-center text-hover-{{ setting('general_settings.primary_color') }} bg-hover-light mb-3 rounded py-4 px-3 text-center text-gray-800">
												<img src="{{ asset('assets/media/svg/brand-logos/amazon.svg') }}" class="w-25px h-25px mb-2"
													alt="" />
												<span class="fw-semibold">AWS</span>
											</a>
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-4">
											<a href="#"
												class="d-flex flex-column flex-center text-hover-{{ setting('general_settings.primary_color') }} bg-hover-light mb-3 rounded py-4 px-3 text-center text-gray-800">
												<img src="{{ asset('assets/media/svg/brand-logos/angular-icon-1.svg') }}" class="w-25px h-25px mb-2"
													alt="" />
												<span class="fw-semibold">AngularJS</span>
											</a>
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-4">
											<a href="#"
												class="d-flex flex-column flex-center text-hover-{{ setting('general_settings.primary_color') }} bg-hover-light mb-3 rounded py-4 px-3 text-center text-gray-800">
												<img src="{{ asset('assets/media/svg/brand-logos/atica.svg') }}" class="w-25px h-25px mb-2"
													alt="" />
												<span class="fw-semibold">Atica</span>
											</a>
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-4">
											<a href="#"
												class="d-flex flex-column flex-center text-hover-{{ setting('general_settings.primary_color') }} bg-hover-light mb-3 rounded py-4 px-3 text-center text-gray-800">
												<img src="{{ asset('assets/media/svg/brand-logos/beats-electronics.svg') }}" class="w-25px h-25px mb-2"
													alt="" />
												<span class="fw-semibold">Music</span>
											</a>
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-4">
											<a href="#"
												class="d-flex flex-column flex-center text-hover-{{ setting('general_settings.primary_color') }} bg-hover-light mb-3 rounded py-4 px-3 text-center text-gray-800">
												<img src="{{ asset('assets/media/svg/brand-logos/codeigniter.svg') }}" class="w-25px h-25px mb-2"
													alt="" />
												<span class="fw-semibold">Codeigniter</span>
											</a>
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-4">
											<a href="#"
												class="d-flex flex-column flex-center text-hover-{{ setting('general_settings.primary_color') }} bg-hover-light mb-3 rounded py-4 px-3 text-center text-gray-800">
												<img src="{{ asset('assets/media/svg/brand-logos/bootstrap-4.svg') }}" class="w-25px h-25px mb-2"
													alt="" />
												<span class="fw-semibold">Bootstrap</span>
											</a>
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-4">
											<a href="#"
												class="d-flex flex-column flex-center text-hover-{{ setting('general_settings.primary_color') }} bg-hover-light mb-3 rounded py-4 px-3 text-center text-gray-800">
												<img src="{{ asset('assets/media/svg/brand-logos/google-tag-manager.svg') }}" class="w-25px h-25px mb-2"
													alt="" />
												<span class="fw-semibold">GTM</span>
											</a>
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-4">
											<a href="#"
												class="d-flex flex-column flex-center text-hover-{{ setting('general_settings.primary_color') }} bg-hover-light mb-3 rounded py-4 px-3 text-center text-gray-800">
												<img src="{{ asset('assets/media/svg/brand-logos/disqus.svg') }}" class="w-25px h-25px mb-2"
													alt="" />
												<span class="fw-semibold">Disqus</span>
											</a>
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-4">
											<a href="#"
												class="d-flex flex-column flex-center text-hover-{{ setting('general_settings.primary_color') }} bg-hover-light mb-3 rounded py-4 px-3 text-center text-gray-800">
												<img src="{{ asset('assets/media/svg/brand-logos/dribbble-icon-1.svg') }}" class="w-25px h-25px mb-2"
													alt="" />
												<span class="fw-semibold">Dribble</span>
											</a>
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-4">
											<a href="#"
												class="d-flex flex-column flex-center text-hover-{{ setting('general_settings.primary_color') }} bg-hover-light mb-3 rounded py-4 px-3 text-center text-gray-800">
												<img src="{{ asset('assets/media/svg/brand-logos/google-play-store.svg') }}" class="w-25px h-25px mb-2"
													alt="" />
												<span class="fw-semibold">Play Store</span>
											</a>
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-4">
											<a href="#"
												class="d-flex flex-column flex-center text-hover-{{ setting('general_settings.primary_color') }} bg-hover-light mb-3 rounded py-4 px-3 text-center text-gray-800">
												<img src="{{ asset('assets/media/svg/brand-logos/google-podcasts.svg') }}" class="w-25px h-25px mb-2"
													alt="" />
												<span class="fw-semibold">Podcasts</span>
											</a>
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-4">
											<a href="#"
												class="d-flex flex-column flex-center text-hover-{{ setting('general_settings.primary_color') }} bg-hover-light mb-3 rounded py-4 px-3 text-center text-gray-800">
												<img src="{{ asset('assets/media/svg/brand-logos/figma-1.svg') }}" class="w-25px h-25px mb-2"
													alt="" />
												<span class="fw-semibold">Figma</span>
											</a>
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-4">
											<a href="#"
												class="d-flex flex-column flex-center text-hover-{{ setting('general_settings.primary_color') }} bg-hover-light mb-3 rounded py-4 px-3 text-center text-gray-800">
												<img src="{{ asset('assets/media/svg/brand-logos/github.svg') }}" class="w-25px h-25px mb-2"
													alt="" />
												<span class="fw-semibold">Github</span>
											</a>
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-4">
											<a href="#"
												class="d-flex flex-column flex-center text-hover-{{ setting('general_settings.primary_color') }} bg-hover-light mb-3 rounded py-4 px-3 text-center text-gray-800">
												<img src="{{ asset('assets/media/svg/brand-logos/gitlab.svg') }}" class="w-25px h-25px mb-2"
													alt="" />
												<span class="fw-semibold">Gitlab</span>
											</a>
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-4">
											<a href="#"
												class="d-flex flex-column flex-center text-hover-{{ setting('general_settings.primary_color') }} bg-hover-light mb-3 rounded py-4 px-3 text-center text-gray-800">
												<img src="{{ asset('assets/media/svg/brand-logos/instagram-2-1.svg') }}" class="w-25px h-25px mb-2"
													alt="" />
												<span class="fw-semibold">Instagram</span>
											</a>
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-4">
											<a href="#"
												class="d-flex flex-column flex-center text-hover-{{ setting('general_settings.primary_color') }} bg-hover-light mb-3 rounded py-4 px-3 text-center text-gray-800">
												<img src="{{ asset('assets/media/svg/brand-logos/pinterest-p.svg') }}" class="w-25px h-25px mb-2"
													alt="" />
												<span class="fw-semibold">Pinterest</span>
											</a>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
								</div>
								<!--end::Scroll-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Card-->
					</div>
					<!--end::My apps-->
					<!--end::Menu wrapper-->
				</div>
				<!--end::My apps links-->
				<!--begin::Theme mode-->
				<div class="app-navbar-item ms-1 ms-lg-3">
					<!--begin::Menu toggle-->
					<a href="#"
						class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-{{ setting('general_settings.primary_color') }} w-35px h-35px w-md-40px h-md-40px"
						data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
						data-kt-menu-placement="bottom-end">
						<i class="ki-duotone ki-night-day theme-light-show fs-2 fs-lg-1">
							<span class="path1"></span>
							<span class="path2"></span>
							<span class="path3"></span>
							<span class="path4"></span>
							<span class="path5"></span>
							<span class="path6"></span>
							<span class="path7"></span>
							<span class="path8"></span>
							<span class="path9"></span>
							<span class="path10"></span>
						</i>
						<i class="ki-duotone ki-moon theme-dark-show fs-2 fs-lg-1">
							<span class="path1"></span>
							<span class="path2"></span>
						</i>
					</a>
					<!--begin::Menu toggle-->
					<!--begin::Menu-->
					<div
						class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-muted menu-active-bg menu-state-color fw-semibold fs-base w-175px py-4"
						data-kt-menu="true" data-kt-element="theme-mode-menu">
						<!--begin::Menu item-->
						<div class="menu-item text-hover-{{ setting('general_settings.primary_color') }} my-0 px-3">
							<a href="#"
								class="menu-link text-hover-{{ setting('general_settings.primary_color') }} text-active-{{ setting('general_settings.primary_color') }} px-3 py-2"
								data-kt-element="mode" data-kt-value="light">
								<span class="menu-icon" data-kt-element="icon">
									<i class="ki-duotone ki-night-day fs-2">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
										<span class="path4"></span>
										<span class="path5"></span>
										<span class="path6"></span>
										<span class="path7"></span>
										<span class="path8"></span>
										<span class="path9"></span>
										<span class="path10"></span>
									</i>
								</span>
								<span class="text-hover-{{ setting('general_settings.primary_color') }}">Light</span>
							</a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item text-hover-{{ setting('general_settings.primary_color') }} my-0 px-3">
							<a href="#"
								class="menu-link text-hover-{{ setting('general_settings.primary_color') }} text-active-{{ setting('general_settings.primary_color') }} px-3 py-2"
								data-kt-element="mode" data-kt-value="dark">
								<span class="menu-icon" data-kt-element="icon">
									<i class="ki-duotone ki-moon fs-2">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</span>
								<span class="text-hover-{{ setting('general_settings.primary_color') }}">Dark</span>
							</a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item text-hover-{{ setting('general_settings.primary_color') }} my-0 px-3">
							<a href="#"
								class="menu-link text-hover-{{ setting('general_settings.primary_color') }} text-active-{{ setting('general_settings.primary_color') }} px-3 py-2"
								data-kt-element="mode" data-kt-value="system">
								<span class="menu-icon" data-kt-element="icon">
									<i class="ki-duotone ki-screen fs-2">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
										<span class="path4"></span>
									</i>
								</span>
								<span class="text-hover-{{ setting('general_settings.primary_color') }}">System</span>
							</a>
						</div>
						<!--end::Menu item-->
					</div>
					<!--end::Menu-->
				</div>
				<!--end::Theme mode-->
				<!--begin::User menu-->
				<div class="app-navbar-item ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
					<!--begin::Menu wrapper-->
					<div class="symbol symbol-35px symbol-md-40px cursor-pointer"
						data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
						data-kt-menu-placement="bottom-end">
						<img src="{{ $user->profile_photo_path ? $user->profile_photo_url : name_avatar($user->name) }}"
							alt="{{ $user->name }}" />
					</div>
					<!--begin::User account menu-->
					<div
						class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold fs-6 w-275px py-4"
						data-kt-menu="true">
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<div class="menu-content d-flex align-items-center px-3">
								<!--begin::Avatar-->
								<div class="symbol symbol-50px me-5">
									<img alt="Logo"
										src="{{ $user->profile_photo_path ? $user->profile_photo_url : name_avatar($user->name) }}" />
								</div>
								<!--end::Avatar-->
								<!--begin::Username-->
								<div class="d-flex flex-column">
									<div class="fw-bold d-flex align-items-center fs-5">{{ $user->name }}
										<span
											class="badge badge-light-{{ primary_color() }} fw-bold fs-8 ms-2 px-2 py-1">{{ Str::between($user->getRoleNames(), '["', '"]') }}</span>
									</div>
									<a href="#"
										class="fw-semibold text-muted text-hover-{{ setting('general_settings.primary_color') }} fs-7">{{ $user->email }}</a>
								</div>
								<!--end::Username-->
							</div>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu separator-->
						<div class="separator my-2"></div>
						<!--end::Menu separator-->
						<!--begin::Menu item-->
						<div class="menu-item px-5">
							<a href="../../demo1/dist/account/overview.html" class="menu-link text-hover-{{ primary_color() }} px-5">My
								Profile</a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						{{-- <div class="menu-item px-5">
							<a href="../../demo1/dist/apps/projects/list.html" class="menu-link px-5">
								<span class="menu-text">My Projects</span>
								<span class="menu-badge">
									<span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
								</span>
							</a>
						</div> --}}
						<!--end::Menu item-->

						<!--begin::Menu item-->
						<div class="menu-item my-1 px-5">
							<a href="../../demo1/dist/account/settings.html"
								class="menu-link text-hover-{{ primary_color() }} px-5">Account Settings</a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu separator-->
						<div class="separator my-2"></div>
						<!--end::Menu separator-->
						<!--begin::Menu item-->
						<div class="menu-item text-hover-{{ primary_color() }} text-active-{{ primary_color() }} px-5"
							data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start"
							data-kt-menu-offset="-15px, 0">
							<a href="#" class="menu-link text-hover-{{ primary_color() }} text-active-{{ primary_color() }} px-5">
								<span
									class="menu-title position-relative text-hover-{{ primary_color() }} text-active-{{ primary_color() }}">Language
									<span class="fs-8 bg-light position-absolute translate-middle-y top-50 end-0 rounded px-3 py-2">
										{{ getLanguageName($user->lang) }}
										<img class="w-15px h-15px rounded-1 ms-2" src="{{ getLanguageFlag($user->lang ?: 'en') }}"
											alt="" />
									</span>
								</span>
							</a>
							<!--begin::Menu sub-->
							<div class="menu-sub menu-sub-dropdown w-175px py-4">
								<!--begin::Menu item-->
								@foreach ($languages as $key => $lang)
									@if ($lang != 'vendor' && $lang != $user->lang)
										<div class="menu-item px-3">
											<a wire:click.prevent="setLang('{{ $lang }}')" href="#"
												class="menu-link text-hover-{{ primary_color() }} text-{{ $lang == default_lang() ? primary_color() : '' }} d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="{{ getLanguageFlag($lang) }}" alt="" />
												</span>
												{{ getLanguageName($lang) }}
											</a>
										</div>
									@endif
								@endforeach
								<!--end::Menu item-->
							</div>
							<!--end::Menu sub-->
						</div>
						<!--end::Menu item-->
						<!--begin::Menu separator-->
						<div class="separator my-2"></div>
						<!--end::Menu separator-->
						@impersonating($guard = null)
							<div class="menu-item my-1 px-5">
								<a href="{{ route('impersonate.leave') }}" class="menu-link text-hover-{{ primary_color() }} px-5">Leave
									impersonation</a>
							</div>
							<div class="separator my-2"></div>
						@endImpersonating
						<!--begin::Menu item-->
						<div class="menu-item px-5">
							<a href="{{ route('logout') }}" class="menu-link text-hover-{{ primary_color() }} px-5"
								onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign
								Out</a>
							<form method="POST" id="logout-form" action="{{ route('logout') }}">
								@csrf
							</form>
						</div>
						<!--end::Menu item-->
					</div>
					<!--end::User account menu-->
					<!--end::Menu wrapper-->
				</div>
				<!--end::User menu-->
				<!--begin::Header menu toggle-->
				{{-- <div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
					<div class="btn btn-icon btn-active-color-{{ setting('general_settings.primary_color') }} w-35px h-35px" id="kt_app_header_menu_toggle">
						<!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
						<span class="svg-icon svg-icon-1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path
									d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z"
									fill="currentColor" />
								<path opacity="0.3"
									d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
				</div> --}}
				<!--end::Header menu toggle-->
			</div>
			<!--end::Navbar-->
		</div>
		<!--end::Header wrapper-->
	</div>
	<!--end::Header container-->
</div>
