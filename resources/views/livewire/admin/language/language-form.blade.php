<form id="addPermissionsModel_form" class="form" action="#">
	@csrf
	<!--begin::Input group-->
	<div class="fv-row mb-7">
		<!--begin::Label-->
		<label class="fs-6 fw-semibold form-label mb-2">
			<span class="required">Language Code</span>
			<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true"
				data-bs-content="Language Code is required to be unique."></i>
		</label>
		<!--end::Label-->
		<!--begin::Input-->
		<input wire:model="langCode" class="form-control form-control-solid" type="text"
			placeholder="Enter a Language Code" name="langCode" id="langCode" />
		@error('langCode')
			<div class="text-{{ primary_color() }}">{{ $message }}</div>
		@enderror
		<!--end::Input-->
	</div>
</form>
