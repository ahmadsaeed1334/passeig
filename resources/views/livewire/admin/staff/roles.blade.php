<div class="d-flex flex-column flex-column-fluid">
	@include('livewire.admin.partial.preloader')
	<x-slot name="page_title">
		{{ $page_title ?? 'Roles' }}
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
					Roles</h1>
				<!--end::Title-->
				<!--begin::Breadcrumb-->
				<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">
						Total Roles
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet w-5px h-2px bg-white-400"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-{{ primary_color() }}">
						{{ sprintf('%02d', $total_roles) }}</li>
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
		<div id="kt_app_content_container" class="app-container container-{{ general('layout') }}">
			<!--begin::Row-->
			@include('livewire.admin.staff.roles-card')
			<!--end::Row-->
			@if ($total_roles > general('page_size'))
				{{ $roles->links() }}
			@endif
			<!--begin::Modals-->
			<!--begin::Modal - Add role-->
			@include('livewire.admin.staff.role-model')
			 {{-- @livewire('admin.staff.role-details')
		     @livewire('admin.staff.permission-details')  --}}
			{{-- @livewire('admin.staff.role-details')
		@livewire('admin.staff.permission-details') --}}
			<!--end::Modal - Add role-->

			{{-- @include('livewire.admin.staff.role-details-model') --}}

			<!--end::Modals-->
		</div>
		<!--end::Content container-->
	</div>
	<!--end::Content-->
</div>
