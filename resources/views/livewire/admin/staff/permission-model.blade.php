<div wire:ignore.self class="modal fade" id="addPermissionsModel" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header">
				<!--begin::Modal title-->
				<h2 class="fw-bold text-{{ primary_color() }}">
					@if ($permissionId)
						Update Permission: {{ $permissionName }}
					@else
						Add Permission
					@endif
				</h2>
				<!--end::Modal title-->
				<!--begin::Close-->
				<div wire:click.prevent="$dispatch('reset')" class="btn btn-icon btn-sm btn-active-icon-{{ primary_color() }}"
					data-bs-dismiss="modal" id="addPermissionsModel">
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
					<span class="svg-icon svg-icon-1">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
								transform="rotate(-45 6 17.3137)" fill="currentColor" />
							<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
								fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</div>
				<!--end::Close-->
			</div>
			<!--end::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y mx-xl-15 mx-5 my-7">
				@if ($permissionId)
					<!--begin::Notice-->
					<div class="notice d-flex bg-light-warning border-warning mb-9 rounded border border-dashed p-6">
						<!--begin::Icon-->
						<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
						<span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
									fill="currentColor" />
								<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)"
									fill="currentColor" />
								<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
						<!--end::Icon-->
						<!--begin::Wrapper-->
						<div class="d-flex flex-stack flex-grow-1">
							<!--begin::Content-->
							<div class="fw-semibold">
								<div class="fs-6 text-white-700">
									<strong class="me-1">Warning!</strong>By editing the permission name, you might break the system
									permissions functionality. Please ensure you're absolutely certain before proceeding.
								</div>
							</div>
							<!--end::Content-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Notice-->
				@endif
				<!--begin::Form-->
				@include('livewire.admin.staff.permission-form')
				<!--end::Form-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
