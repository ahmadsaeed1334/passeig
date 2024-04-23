<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<x-slot name="page_title">
		{{ $page_title ?? 'Settings' }}
	</x-slot>
	<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
		@include('livewire.admin.partial.preloader')
		<!--begin::Subheader-->
		<div class="d-flex flex-column flex-column-fluid">
			<!--begin::Toolbar-->
			<div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
				<!--begin::Toolbar container-->
				<div id="kt_app_toolbar_container"
					class="app-container container{{ setting('general_settings.layout') }} d-flex flex-stack">
					<!--begin::Page title-->
					<div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
						<!--begin::Title-->
						<h1 class="page-heading d-flex text-{{ primary_color() }} fw-bold fs-3 flex-column justify-content-center my-0">
							System Settings
						</h1>
						<!--end::Title-->
						<!--begin::Breadcrumb-->
						<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
							<!--begin::Item-->
							<li class="breadcrumb-item text-muted">
								Application all settings.
							</li>
							<!--end::Item-->
						</ul>
						<!--end::Breadcrumb-->
					</div>
					<!--end::Page title-->
				</div>
				<div class="d-flex align-items-end gap-lg-3 gap-2">
					<!--end::Primary button-->
				</div>
				<!--end::Toolbar container-->
			</div>
			<!--end::Subheader-->
			<!--begin::Entry-->
			<div id="kt_app_content" class="app-content flex-column-fluid">
				<!--begin::Container-->
				<div id="kt_app_content_container" class="app-container container{{ setting('general_settings.layout') }}">
					<!--begin::Card-->

					@livewire('admin.settings.general-settings')
					@livewire('admin.settings.alert-settings')
					<!--end::Card-->
					<!--begin::Card-->
					@livewire('admin.settings.email-settings')
					<!--end::Card-->

					@if ($user && $user->user_type == -1)
						<!--begin::Card-->
						@livewire('admin.settings.backup-settings')
						<!--end::Card-->
						<!--begin::Card-->
						@livewire('admin.settings.env-settings')
						<!--end::Card-->
						<!--begin::Card-->
						@livewire('admin.settings.tokens-settings')
						<!--end::Card-->
						<!--begin::Card-->
						@livewire('admin.settings.connection-settings')
						<!--end::Card-->
						<!--begin::Card-->
						@livewire('admin.settings.mail-settings')
						<!--end::Card-->
						<!--begin::Card-->
						@livewire('admin.settings.copy-rights-settings')
						<!--end::Card-->
					@endif
				</div>
				<!--end::Container-->
			</div>
		</div>
	</div>
</div>
