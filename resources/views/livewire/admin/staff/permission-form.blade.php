<form id="addPermissionsModel_form" class="form" action="#">
	@csrf
	<!--begin::Input group-->
	<div class="fv-row mb-7">
		<!--begin::Label-->
		<label class="fs-6 fw-semibold form-label mb-2">
			<span class="required">Permission Name</span>
			<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true"
				data-bs-content="Permission names is required to be unique."></i>
		</label>
		<!--end::Label-->
		<!--begin::Input-->
		<input wire:model="permissionName" class="form-control form-control-solid" type="text"
			placeholder="Enter a permission name" name="permissionName" id="permissionName" />
		@error('permissionName')
			<div class="text-{{ primary_color() }}">{{ $message }}</div>
		@enderror
		<!--end::Input-->
	</div>
	<div class="pt-15 text-center">
		<button wire:click.prevent="$dispatch('reset')" type="reset" class="btn btn-light me-3"
			data-bs-dismiss="modal">Discard</button>
		<button wire:click.prevent="save()" type="submit" class="btn btn-{{ primary_color() }}"
			data-kt-permissions-modal-action="submit">
			<span class="indicator-label">Submit</span>
			<span class="indicator-progress">Please wait...
				<span class="spinner-border spinner-border-sm ms-2 align-middle"></span></span>
		</button>
	</div>
	<!--end::Actions-->
</form>
