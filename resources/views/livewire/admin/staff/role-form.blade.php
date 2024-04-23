<form id="addRolesModel_form" class="form" action="#">
	@csrf
	<!--begin::Scroll-->
	<div class="d-flex flex-column scroll-y me-n7 pe-7" id="addRolesModel_scroll" data-kt-scroll="true"
		data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
		data-kt-scroll-dependencies="#addRolesModel_header" data-kt-scroll-wrappers="#addRolesModel_scroll"
		data-kt-scroll-offset="300px">
		<!--begin::Input group-->
		<div class="fv-row mb-10">
			<!--begin::Label-->
			<label class="fs-5 fw-bold form-label mb-2">
				<span class="required">Role name</span>
			</label>
			<!--end::Label-->
			<!--begin::Input-->
			<input wire:model="roleName" class="form-control form-control-solid" type="text" id="roleName"
				placeholder="Enter a role name" name="roleName" />
			@error('roleName')
				<div class="text-{{ primary_color() }}">{{ $message }}</div>
			@enderror
			<!--end::Input-->
		</div>
		<!--end::Input group-->
		<!--begin::Permissions-->
		<div class="row">
			<!--begin::Label-->
			<label class="fs-5 fw-bold form-label mb-2">
				<span class="required">Role Permissions</span>
			</label>
			<!--end::Label-->
			@php
				$groupedPermissions = $permissions->groupBy(function ($permission) {
				    return substr($permission->name, 0, 3);
				});
			@endphp
			@foreach ($groupedPermissions as $group => $permissions)
				<label class="fs-5 fw-bold form-label mb-2">
					<span class="mt-3">{{ $group }}</span>
				</label>
				@foreach ($permissions->sortby('name') as $permission)
					<div class="form-group col-sm-4 mt-1 mb-3">
						<!--begin::Checkbox-->
						<div class="form-check form-check-custom form-check-{{ primary_color() }} form-check-solid me-9">

							<input wire:model="per" class="form-check-input pointer" type="checkbox" name="per_{{ $permission->id }}"
								value="{{ $permission->id }}" id="per_{{ $permission->id }}" />
							<span class="form-check-label" for="per_{{ $permission->id }}">
								{{ $permission->name }}</span>
						</div>
						<!--end::Checkbox-->
					</div>
				@endforeach
			@endforeach
			@error('per')
				<div class="text-{{ primary_color() }} mt-3">{{ $message }}</div>
			@enderror
		</div>
		<!--end::Table wrapper-->
	</div>
	<!--end::Scroll-->
	<!--begin::Actions-->
	<div class="pt-15 text-center">
		<button wire:click.prevent="$dispatch('reset')" type="reset" class="btn btn-light me-3"
			data-bs-dismiss="modal">Discard</button>
		<button wire:click.prevent="save()" type="submit" class="btn btn-{{ primary_color() }}"
			data-kt-roles-modal-action="submit">
			<span class="indicator-label">Submit</span>
			<span class="indicator-progress">Please wait...
				<span class="spinner-border spinner-border-sm ms-2 align-middle"></span></span>
		</button>
	</div>
	<!--end::Actions-->
</form>
