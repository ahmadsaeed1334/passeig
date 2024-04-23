<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<x-slot name="page_title">
		{{ $page_title ?? 'Backups' }}
	</x-slot>
	@include('livewire.admin.partial.preloader')
	<!--begin::Subheader-->
	<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
		@include('livewire.admin.partial.preloader')
		<div class="d-flex flex-column flex-column-fluid">
			<!--begin::Toolbar-->
			<div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
				<!--begin::Toolbar container-->
				<div id="kt_app_toolbar_container"
					class="app-container container{{ setting('general_settings.layout') }} d-flex justify-content-between flex-stack">
					<!--begin::Page title-->
					<div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
						<!--begin::Title-->
						<h1
							class="page-heading d-flex text-{{ setting('general_settings.primary_color') }} fw-bold fs-3 flex-column justify-content-center my-0">
							System Backups
						</h1>
						<!--end::Title-->
						<!--begin::Breadcrumb-->
						<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
							<!--begin::Item-->
							<li class="breadcrumb-item text-muted">
								Files and Database backup on daily bases.
							</li>
							<!--end::Item-->
						</ul>
						<!--end::Breadcrumb-->
					</div>
					<!--end::Page title-->
					<div class="d-flex align-items-center g-5 g-xl-9 g-md-6 g-sm-3 flex-wrap">
						@if (auth()->user()->user_type == -1)
							<div class="me-1 mt-1">
								<button wire:click.prevent="cleanBackup" class="btn btn-light-warning font-weight-bold ml-2" data-toggle="modal"
									data-target="#courseModal">Clean Backup</button>
							</div>
							<div class="me-1 mt-1">
								<button wire:click.prevent="runBackup" class="btn btn-light-primary font-weight-bold ml-2" data-toggle="modal"
									data-target="#courseModal">Backup Now</button>
							</div>
						@endif
					</div>
				</div>

				<!--end::Toolbar container-->
			</div>
			<!--end::Subheader-->
			<!--begin::Entry-->
			<div id="kt_app_content" class="app-content flex-column-fluid">
				<!--begin::Content container-->
				<div id="kt_app_content_container" class="app-container container{{ setting('general_settings.layout') }}">
					<div class="row">
						@include('livewire.admin.settings.local_backups')
						@include('livewire.admin.settings.dropbox_backups')
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
