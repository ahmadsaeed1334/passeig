<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	@include('livewire.admin.partial.preloader')
	<div class="d-flex flex-column flex-column-fluid">
		<x-slot name="page_title">
			{{ $page_title ?? 'Permissions' }}
		</x-slot>
		<!--begin::Toolbar-->
		<div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
			<!--begin::Toolbar container-->
			<div id="kt_app_toolbar_container" class="app-container container-{{ general('layout') }} d-flex flex-stack">
				<!--begin::Page title-->
				<div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
					<!--begin::Title-->
					<h1 wire:click.prevent="$dispatch('refresh')"
						class="page-heading d-flex text-{{ primary_color() }} fw-bold fs-3 flex-column justify-content-center pointer my-0">
						Permissions List</h1>
					<!--end::Title-->
					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">
							Total Permissions
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet w-5px h-2px bg-white-400"></span>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item text-{{ primary_color() }}">
							{{ sprintf('%02d', $total_permissions) }}</li>
						<!--end::Item-->
					</ul>
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
			<div id="kt_app_content_container" class="app-container container{{ general('layout') }}">
				<!--begin::Card-->
				@include('livewire.admin.staff.permissions-card')
				<!--end::Card-->
				@if ($total_permissions > general('page_size'))
					{{ $permissions->links() }}
				@endif
				<!--begin::Modals-->
				<!--begin::Modal - Add permissions-->
				@include('livewire.admin.staff.permission-model')
				<!--end::Modal - Add permissions-->
				<!--end::Modals-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
</div>
