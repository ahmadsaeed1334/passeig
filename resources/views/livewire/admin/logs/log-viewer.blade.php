<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<x-slot name="page_title">
		{{ $page_title ?? 'App Logs' }}
	</x-slot>
	<div class="d-flex flex-column flex-column-fluid">
		<!--begin::Toolbar-->
		<div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
			<!--begin::Toolbar container-->
			<div id="kt_app_toolbar_container"
				class="app-container container-{{ setting('general_settings.layout') }} d-flex flex-stack">
				<!--begin::Page title-->
				<div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
					<!--begin::Title-->

					<!--end::Breadcrumb-->
				</div>
				<!--end::Page title-->
			</div>
			<!--end::Toolbar container-->
		</div>
		<!--end::Toolbar-->
		<!--begin::Content-->
		<div id="kt_app_content" class="app-content flex-column-fluid">
			<!--begin::Content container-->
			<div id="kt_app_content_container" class="app-container container{{ setting('general_settings.layout') }}">
				<div class="card card-flush">
					<iframe src="{{ env('APP_URL') . '/admin/logss' }}" height="1500px" style="overflow: hidden!important;"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
