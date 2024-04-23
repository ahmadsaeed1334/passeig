<div id="kt_app_footer" class="app-footer">
	<!--begin::Footer container-->
	<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
		<!--begin::Copyright-->
		<div class="text-dark order-md-1 order-2">
			<span class="text-muted fw-semibold me-1">{{ date('Y') }} &copy;</span>
			<a href="{{ setting('copy_right_url') }}" target="_blank"
				class="text-hover-{{ primary_color() }} text-{{ primary_color() }}">

				<img alt="{{ setting('general_settings.app_name') }}"
					src="{{ env('APP_URL') . '/storage' . '/' . setting('general_settings.favicon') }}" class="h-15px" />

				{{ setting('copy_right') }}
			</a>
		</div>
		<!--end::Copyright-->
		<!--begin::Menu-->
		{{-- <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
			<li class="menu-item">
				<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
			</li>
			<li class="menu-item">
				<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
			</li>
			<li class="menu-item">
				<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
			</li>
		</ul> --}}
		<!--end::Menu-->
	</div>
	<!--end::Footer container-->
</div>
