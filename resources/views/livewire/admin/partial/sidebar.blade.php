<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
	data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
	data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
	<!--begin::Logo-->
	<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
		<!--begin::Logo image-->
		<a href="{{ route('home') }}">
			<img alt="{{ setting('general_settings.app_name') }}"
				src="{{ env('APP_URL') . '/storage' . '/' . setting('general_settings.logo') }}" class="h-50px" />
		</a>
		<!--end::Logo image-->
		<!--begin::Sidebar toggle-->
		<div id="kt_app_sidebar_toggle"
			class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-{{ setting('general_settings.primary_color') }} body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
			data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
			data-kt-toggle-name="app-sidebar-minimize">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
			<span class="svg-icon svg-icon-2 rotate-180">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path opacity="0.5"
						d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
						fill="currentColor" />
					<path
						d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
						fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Sidebar toggle-->
	</div>
	<!--end::Logo-->
	<!--begin::sidebar menu-->
	<div class="app-sidebar-menu flex-column-fluid overflow-hidden">
		<!--begin::Menu wrapper-->
		<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true"
			data-kt-scroll-activate="true" data-kt-scroll-height="auto"
			data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
			data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
			<!--begin::Menu-->
			<div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true"
				data-kt-menu-expand="false">
				{{-- @can('super dashboard') --}}
				<!--begin:Menu item-->
				@include('livewire.admin.partial.sidebar-menu-item', [
					'route' => 'admin/dashboard',
					'name' => 'dashboard',
					'icon' => 'fa-solid fa-house',
					'counter' => null,
				])
				<!--end:Menu item-->
				{{-- @endcan --}}
				@canany(['super staff', 'super roles', 'super permissions'])
					@include('livewire.admin.partial.sidebar-menu-header', [
						'name' => 'Front Pages',
					])
					<!--end:Menu item-->
					<!--begin:Menu item-->

					@include('livewire.admin.partial.sidebar-menu-item', [
						'route' => 'aboutus.index',
						'name' => 'About Us',
						'icon' => 'fa-solid fa-info',
						// 'counter' => auth()->user()->newThreadsCount(),
					])
					@include('livewire.admin.partial.sidebar-menu-item', [
						'route' => 'passions.index',
						'name' => 'Our Passions',
						'icon' => 'fa-solid fa-message',
						// 'counter' => auth()->user()->newThreadsCount(),
					])
					@include('livewire.admin.partial.sidebar-menu-item', [
						'route' => 'our-services.index',
						'name' => 'Services',
						'icon' => 'fa-brands fa-servicestack',
						// 'counter' => auth()->user()->newThreadsCount(),
					])
					@include('livewire.admin.partial.sidebar-menu-item', [
						'route' => 'footer.index',
						'name' => 'Footer',
						'icon' => 'fa-solid fa-shoe-prints',
						// 'counter' => auth()->user()->newThreadsCount(),
					])
					@include('livewire.admin.partial.sidebar-menu-item', [
						'route' => 'appointments.index',
						'name' => 'Appointment',
						'icon' => 'fa-solid fa-calendar-check',
						// 'counter' => auth()->user()->newThreadsCount(),
					])
					@include('livewire.admin.partial.sidebar-menu-item', [
						'route' => 'rev_slider.index',
						'name' => 'Rev Slider',
						'icon' => 'fa-solid fa-sliders',
						// 'counter' => auth()->user()->newThreadsCount(),
					])
					@include('livewire.admin.partial.sidebar-menu-item', [
						'route' => 'experts.index',
						'name' => 'Experts',
						'icon' => 'fa-solid fa-sliders',
						// 'counter' => auth()->user()->newThreadsCount(),
					])
					@include('livewire.admin.partial.sidebar-menu-item', [
						'route' => 'healths.index',
						'name' => 'Healths',
						'icon' => 'fa-solid fa-sliders',
						// 'counter' => auth()->user()->newThreadsCount(),
					])
					@include('livewire.admin.partial.sidebar-menu-item', [
						'route' => 'provides.index',
						'name' => 'Provides',
						'icon' => 'fa-solid fa-sliders',
						// 'counter' => auth()->user()->newThreadsCount(),
					])
					@include('livewire.admin.partial.sidebar-menu-item', [
						'route' => 'best_services.index',
						'name' => 'Best Services',
						'icon' => 'fa-solid fa-sliders',
						// 'counter' => auth()->user()->newThreadsCount(),
					])
					{{-- @include('livewire.admin.partial.sidebar-menu-item', [
=======
					@include('livewire.admin.partial.sidebar-menu-item', [
						'route' => 'aboutus.index',
						'name' => 'About Us',
						'icon' => 'fa-solid fa-info',
						// 'counter' => auth()->user()->newThreadsCount(),
					])
					@include('livewire.admin.partial.sidebar-menu-item', [
						'route' => 'passions.index',
						'name' => 'Our Passions',
						'icon' => 'fa-solid fa-message',
						// 'counter' => auth()->user()->newThreadsCount(),
					])
					@include('livewire.admin.partial.sidebar-menu-item', [
						'route' => 'our-services.index',
						'name' => 'Services',
						'icon' => 'fa-brands fa-servicestack',
						// 'counter' => auth()->user()->newThreadsCount(),
					])
					@include('livewire.admin.partial.sidebar-menu-item', [
						'route' => 'footer.index',
						'name' => 'Footer',
						'icon' => 'fa-solid fa-shoe-prints',
						// 'counter' => auth()->user()->newThreadsCount(),
					])
					@include('livewire.admin.partial.sidebar-menu-item', [
						'route' => 'appointments.index',
						'name' => 'Appointment',
						'icon' => 'fa-solid fa-calendar-check',
						// 'counter' => auth()->user()->newThreadsCount(),
					])
					@include('livewire.admin.partial.sidebar-menu-item', [
						'route' => 'rev_slider.index',
						'name' => 'Rev Slider',
						'icon' => 'fa-solid fa-sliders',
						// 'counter' => auth()->user()->newThreadsCount(),
					])
					{{-- @include('livewire.admin.partial.sidebar-menu-item', [
>>>>>>> 7ee96061edbd461ee31ab3419a70f7386a30bb31
                'route' => 'admin/about',
                'name' => 'Abouts',
                'icon' => 'fa-solid fa-message',
                // 'counter' => auth()->user()->newThreadsCount(),
                ]) --}}
					@include('livewire.admin.partial.sidebar-menu-item', [
						'route' => 'admin/partners',
						'name' => 'Partners',
						'icon' => 'fa-solid fa-handshake',
						// 'counter' => auth()->user()->newThreadsCount(),
					])

					@include('livewire.admin.partial.sidebar-menu-item', [
						'route' => 'gallery.index',
						'name' => 'Gallery',
						'icon' => 'fa-solid fa-handshake',
						// 'counter' => auth()->user()->newThreadsCount(),
					])
					@include('livewire.admin.partial.sidebar-menu-item', [
						'route' => 'faqs.index',
						'name' => 'FAQS',
						'icon' => 'fa-solid fa-question',
						// 'counter' => auth()->user()->newThreadsCount(),
					])

					@include('livewire.admin.partial.sidebar-menu-header', [
						'name' => 'Blogs section',
					])
					<!--end:Menu item-->
					<!--begin:Menu item-->
					@include('livewire.admin.partial.sidebar-menu-item', [
						'route' => 'blogs.index',
						'name' => 'Blogs',
						'icon' => 'fa-solid fa-newspaper',
						'counter' => count($this->slides),
					])
					@include('livewire.admin.partial.sidebar-menu-item', [
						'route' => 'admin/blog-categories',
						'name' => 'Categories',
						'icon' => 'fa-solid fa-newspaper',
						'counter' => count($this->slides),
					])
				@endcanany

				<!--end:Menu item-->
				<!--begin:Menu item-->
				@include('livewire.admin.partial.sidebar-menu-header', [
					'name' => 'Authentication',
				])
				<!--end:Menu item-->
				{{-- @endcanany --}}
				@canany(['super staff', 'super roles', 'super permissions'])
					<!--begin:Menu item here show-->
					<div data-kt-menu-trigger="click"
						class="menu-item menu-accordion @if ($route_name == 'admin/categories' || $route_name == 'admin/products') here show @endif">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-icon">
								<i class="fa-solid fa-user-gear fs-5"></i>
							</span>
							<span class="menu-title">{{ __('Product management') }}</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							{{-- @can('super staff') --}}
							<!--begin:Menu item-->
							@include('livewire.admin.partial.sidebar-menu-item', [
								'route' => 'admin/categories',
								'name' => 'Category',
								'icon' => null,
								'counter' => null,
							])
							@include('livewire.admin.partial.sidebar-menu-item', [
								'route' => 'products.index',
								'name' => 'Products',
								'icon' => null,
								'counter' => null,
							])
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->
				@endcanany
				@include('livewire.admin.partial.sidebar-menu-header', [
					'name' => 'Appoinment Services',
				])
				@canany(['super staff', 'super roles', 'super permissions'])
					<!--begin:Menu item here show-->
					<div data-kt-menu-trigger="click"
						class="menu-item menu-accordion @if ($route_name == 'services-category.index' || $route_name == 'appointment-services.index') here show @endif">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-icon">
								<i class="fa-solid fa-user-gear fs-5"></i>
							</span>
							<span class="menu-title">{{ __('Appoinment Management') }}</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							{{-- @can('super staff') --}}
							<!--begin:Menu item-->
							@include('livewire.admin.partial.sidebar-menu-item', [
								'route' => 'services-category.index',
								'name' => 'Services Category',
								'icon' => null,
								'counter' => null,
							])
							@include('livewire.admin.partial.sidebar-menu-item', [
								'route' => 'appointment-services.index',
								'name' => 'Appointment Service',
								'icon' => null,
								'counter' => null,
							])
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->
				@endcanany
				<!--begin:Menu item-->
				<!--begin:Menu item-->
				{{-- @include('livewire.admin.partial.sidebar-menu-header', [
						'name' => 'Home Page',
					]) --}}
				<!--end:Menu item-->
				<!--begin:Menu item-->


				<!--end:Menu item-->
				<!--begin:Menu item-->
				@include('livewire.admin.partial.sidebar-menu-header', [
					'name' => 'Communication',
				])
				<!--end:Menu item-->
				<!--begin:Menu item-->
				@include('livewire.admin.partial.sidebar-menu-item', [
					'route' => 'admin/messenger',
					'name' => 'Messages',
					'icon' => 'fa-solid fa-message',
					// 'counter' => auth()->user()->newThreadsCount(),
				])
				<!--end:Menu item-->
				{{-- @canany(['super staff', 'super roles', 'super permissions']) --}}
				<!--begin:Menu item-->
				@include('livewire.admin.partial.sidebar-menu-header', [
					'name' => 'Authentication',
				])
				<!--end:Menu item-->
				{{-- @endcanany --}}
				@canany(['super staff', 'super roles', 'super permissions'])
					<!--begin:Menu item here show-->
					<div data-kt-menu-trigger="click"
						class="menu-item menu-accordion @if ($route_name == 'admin/staff' || $route_name == 'admin/roles' || $route_name == 'admin/permissions') here show @endif">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-icon">
								<i class="fa-solid fa-user-gear fs-5"></i>
							</span>
							<span class="menu-title">{{ __('users management') }}</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							{{-- @can('super staff') --}}
							<!--begin:Menu item-->
							@include('livewire.admin.partial.sidebar-menu-item', [
								'route' => 'admin/staff',
								'name' => 'users',
								'icon' => null,
								'counter' => null,
							])
							<!--end:Menu item-->
							{{-- @endcan --}}
							{{-- @can('super roles') --}}
							<!--begin:Menu link-->
							@include('livewire.admin.partial.sidebar-menu-item', [
								'route' => 'admin/roles',
								'name' => 'roles',
								'icon' => null,
								'counter' => null,
							])
							<!--end:Menu item-->
							{{-- @endcan --}}
							@can('super permissions')
								<!--begin:Menu item-->
								@include('livewire.admin.partial.sidebar-menu-item', [
									'route' => 'admin/permissions',
									'name' => 'permissions',
									'icon' => null,
									'counter' => null,
								])
								<!--end:Menu link-->
							@endcan
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->
				@endcanany
				<!--begin:Menu item-->


				<!--end:Menu item-->
				<!--begin:Menu item-->
				@include('livewire.admin.partial.sidebar-menu-header', [
					'name' => 'news section',
				])
				<!--end:Menu item-->
				<!--begin:Menu item-->
				@include('livewire.admin.partial.sidebar-menu-item', [
					'route' => 'admin/news',
					'name' => 'latest news',
					'icon' => 'fa-solid fa-newspaper',
					'counter' => count($this->slides),
				])
				<!--end:Menu item-->

				<!--begin:Menu item-->
				@include('livewire.admin.partial.sidebar-menu-header', [
					'name' => 'administration',
				])
				<!--end:Menu item-->

				<!--begin:Menu link-->
				{{-- @include('livewire.admin.partial.sidebar-menu-item', [
                'route' => 'admin/mails-editor',
                'name' => 'Mails Editor',
                'icon' => 'fa-solid fa-envelope',
                'counter' => '3rd Party',
                ]) --}}
				<!--begin:Menu link-->
				@include('livewire.admin.partial.sidebar-menu-item', [
					'route' => 'admin/appointments-view',
					'name' => 'Appointments View',
					'icon' => 'fa-solid fa-calendar-check',
				
					// 'counter' => '3rd Party',
				])
				@include('livewire.admin.partial.sidebar-menu-item', [
					'route' => 'subscribers.index',
					'name' => 'Subscribers',
					'icon' => 'fa-solid fa-calendar-check',
				
					// 'counter' => '3rd Party',
				])
				<!--end:Menu item-->
				<!--begin:Menu link-->
				@include('livewire.admin.partial.sidebar-menu-item', [
					'route' => 'admin/backups',
					'name' => 'backups',
					'icon' => 'fa-solid fa-vault',
					'counter' => null,
				])
				<!--end:Menu item-->
				<!--begin:Menu link-->
				@include('livewire.admin.partial.sidebar-menu-item', [
					'route' => 'admin/settings',
					'name' => 'settings',
					'icon' => 'fa-solid fa-gear spin',
					'counter' => null,
				])
				<!--end:Menu item-->
				<!--begin:Menu link-->
				@include('livewire.admin.partial.sidebar-menu-item', [
					'route' => 'admin/logs',
					'name' => 'logs',
					'icon' => 'fa-solid fa-calendar-days',
					'counter' => '3rd Party',
				])
				<!--end:Menu item-->
			</div>
			<!--end::Menu-->
		</div>
		<!--end::Menu wrapper-->
	</div>
	<!--end::sidebar menu-->
	<!--begin::Footer-->
	<div class="app-sidebar-footer flex-column-auto px-6 pb-6 pt-2" id="kt_app_sidebar_footer">
		<button id="kt_server_toggle"
			class="btn btn-flex flex-center btn-custom btn-primary text-nowrap h-40px w-100 overflow-hidden px-0">
			<span class="btn-label">System/Server Information</span>
			<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
			<span class="svg-icon btn-icon svg-icon-2 m-0">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path opacity="0.3"
						d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z"
						fill="currentColor" />
					<rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor" />
					<rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor" />
					<rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor" />
					<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</button>
	</div>
	<!--end::Footer-->
</div>
