<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<x-slot name="page_title">
		{{ $page_title ?? 'Latest News' }}
	</x-slot>


	@include('livewire.admin.partial.preloader')
	<div class="d-flex flex-column flex-column-fluid">
		<!--begin::Toolbar-->
		<div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
			<!--begin::Toolbar container-->
			<div id="kt_app_toolbar_container"
				class="app-container container-{{ setting('general_settings.layout') }} d-flex flex-stack">
				<!--begin::Page title-->
				<div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
					<!--begin::Title-->
					<h1 wire:click.prevent="$dispatch('refresh')"
						class="page-heading d-flex text-{{ setting('general_settings.primary_color') }} fw-bold fs-3 flex-column justify-content-center pointer my-0">
						Latest News</h1>
					<!--end::Title-->
					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">
							Total
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet w-5px h-2px bg-gray-400"></span>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item text-{{ setting('general_settings.primary_color') }}">
							{{ sprintf('%02d', $total_slides) }}</li>
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
			<div id="kt_app_content_container" class="app-container container{{ setting('general_settings.layout') }}">
				<!--begin::Card-->
				@include('livewire.admin.news.news-card')


				{{-- @livewire('admin.logs.log-viewer') --}}
				<!--end::Card-->
				<!--begin::Modals-->
				<!--begin::Modal - Add news-->
				@include('livewire.admin.news.news-modal')
				<!--end::Modal - Add news-->
				<!--end::Modals-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
</div>
