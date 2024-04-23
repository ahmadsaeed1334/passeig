<x-slot name="page_title">
	{{ $page_title ?? 'messages' }}
</x-slot>
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">
		<!--begin::Toolbar-->
		<div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
			<!--begin::Toolbar container-->
			<div id="kt_app_toolbar_container"
				class="app-container container{{ general('layout') }} d-flex justify-content-between flex-stack">
				<!--begin::Page title-->
				<div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
					<!--begin::Title-->
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
						Messenger
					</h1>
					<!--end::Title-->
					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">
							<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Unread conversations</a>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet w-5px h-2px bg-gray-400"></span>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">{{ sprintf('%02d', $user->newThreadsCount()) }}</li>
						<!--end::Item-->
					</ul>
					<!--end::Breadcrumb-->
				</div>
				<!--end::Page title-->
				<!--begin::Actions-->
				<div class="d-flex align-items-center gap-lg-3 gap-2">
					<!--begin::Secondary button-->
					<!--end::Secondary button-->
					<!--begin::Primary button-->
					<a href="#" class="btn btn-sm fw-bold btn-{{ primary_color() }}" data-bs-toggle="modal"
						data-bs-target="#createChatModal">Create Conversations</a>
					<!--end::Primary button-->
				</div>
				<!--end::Actions-->
			</div>
			<!--end::Toolbar container-->
		</div>
		<!--end::Toolbar-->
		<!--begin::Content-->
		<div id="kt_app_content" class="app-content flex-column-fluid">
			<!--begin::Content container-->
			<div id="kt_app_content_container" class="app-container container{{ general('layout') }}">
				<!--begin::Layout-->
				<div class="d-flex flex-column flex-lg-row">
					<!--begin::Sidebar-->
					@include('livewire.admin.messenger.messenger-sidebar')
					<!--end::Sidebar-->
					<!--begin::Content-->
					@if ($currentThread)
						@include('livewire.admin.messenger.messenger-chat')
					@endif
					<!--end::Content-->
				</div>
				<!--end::Layout-->
				<!--begin::Modals-->
				@include('livewire.admin.messenger.messenger-modals')
				<!--end::Modals-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
</div>
