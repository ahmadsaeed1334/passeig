<div wire:ignore.self class="modal fade" id="addRolesModel" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	{{-- mw-750px --}}
	<div class="modal-dialog modal-xl">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header">
				<!--begin::Modal title-->
				<h2 class="fw-bold text-{{ primary_color() }}">
					@if ($roleId)
						Update Role: {{ $roleName }}
					@else
						Add a Role
					@endif
				</h2>
				<!--end::Modal title-->
				<!--begin::Close-->
				<div wire:click.prevent="$dispatch('reset')" class="btn btn-icon btn-sm btn-active-icon-{{ primary_color() }}"
					data-bs-dismiss="modal">
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
			<div class="modal-body scroll-y mx-lg-5 my-7">
				<!--begin::Form-->
				@if ($isAdd)
					@include('livewire.admin.staff.role-form')
					
				@endif
				<!--end::Form-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
