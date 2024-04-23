<!--begin::Modal - View Users-->
<div wire:ignore.self class="modal fade" id="viewMembersModal" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header justify-content-end border-0 pb-0">
				<!--begin::Close-->
				<div wire:click.prevent="$set('isView',false)" class="btn btn-sm btn-icon btn-active-color-{{ primary_color() }}"
					data-bs-dismiss="modal">
					<i class="ki-duotone ki-cross fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
				<!--end::Close-->
			</div>
			<!--begin::Modal header-->
			<!--begin::Modal body-->

			<div class="modal-body scroll-y mx-xl-18 pb-15 mx-5 pt-0">
				@if ($isView)
					@include('livewire.admin.messenger.messenger-memebers')
				@endif
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - View Users-->
<!--begin::Modal - Users Search-->
<div wire:ignore.self class="modal fade" id="createChatModal" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header justify-content-end border-0 pb-0">
				<!--begin::Close-->
				<div wire:click.prevent="resetChat" class="btn btn-sm btn-icon btn-active-color-{{ primary_color() }}"
					data-bs-dismiss="modal">
					<i class="ki-duotone ki-cross fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
				<!--end::Close-->
			</div>
			<!--begin::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y mx-xl-18 pb-15 mx-5 pt-0">
				<!--begin::Content-->
				<div class="mb-13 text-center">
					<h1 class="mb-3">Create Ne Chat/Group</h1>
					<div class="text-muted fw-semibold fs-5">You can create new private chat or group with multiple users</div>
				</div>
				<!--end::Content-->
				<div class="fv-row mb-7">
					<!--begin::Input-->
					<input wire:model="subject" class="form-control form-control-solid" type="text"
						placeholder="Chat Or Group Name" name="subject" id="subject" />
					@error('subject')
						<div class="text-{{ primary_color() }}">{{ $message }}</div>
					@enderror
					<!--end::Input-->
				</div>
				<!--begin::Search-->
				<div id="kt_modal_users_search_handler">
					<!--begin::Form-->
					<form class="w-100 position-relative mb-5" autocomplete="off">
						<!--begin::Hidden input(Added to disable form autocomplete)-->
						<input type="hidden" />
						<!--end::Hidden input-->
						<!--begin::Icon-->
						<i class="ki-duotone ki-magnifier fs-2 fs-lg-1 position-absolute top-50 ms-5 translate-middle-y text-gray-500">
							<span class="path1"></span>
							<span class="path2"></span>
						</i>
						<!--end::Icon-->
						<!--begin::Input-->
						<input wire:model.500ms="search" type="text" class="form-control form-control-lg form-control-solid px-15"
							name="search" value="" placeholder="Search by id, full name or email..." />
						<!--end::Input-->
					</form>
					<!--end::Form-->
					<!--begin::Wrapper-->
					<div class="py-5">
						@if ($search)
							<!--begin::Suggestions-->
							@include('livewire.admin.messenger.messenger-contact-search')
						@endif
						<!--end::Suggestions-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Search-->
			</div>
			<!--end::Modal body-->
			<div class="modal-footer d-flex justify-content-end">
				<button wire:click.prevent="resetChat" type="button" class="btn btn-light font-weight-bold"
					data-bs-dismiss="modal">Discard</button>

				<button wire:click.prevent="createThread" type="button" class="btn btn-{{ primary_color() }} font-weight-bold">Save
					changes</button>
			</div>
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - Users Search-->

<div wire:ignore.self class="modal fade" id="addContactModal" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header justify-content-end border-0 pb-0">
				<!--begin::Close-->
				<div wire:click.prevent="resetChat" class="btn btn-sm btn-icon btn-active-color-{{ primary_color() }}"
					data-bs-dismiss="modal">
					<i class="ki-duotone ki-cross fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
				<!--end::Close-->
			</div>
			<!--begin::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y mx-xl-18 pb-15 mx-5 pt-0">
				<!--begin::Search-->
				<div id="kt_modal_users_search_handler">
					<!--begin::Form-->
					<form class="w-100 position-relative mb-5" autocomplete="off">
						<!--begin::Hidden input(Added to disable form autocomplete)-->
						<input type="hidden" />
						<!--end::Hidden input-->
						<!--begin::Icon-->
						<i class="ki-duotone ki-magnifier fs-2 fs-lg-1 position-absolute top-50 ms-5 translate-middle-y text-gray-500">
							<span class="path1"></span>
							<span class="path2"></span>
						</i>
						<!--end::Icon-->
						<!--begin::Input-->
						<input wire:model.500ms="search" type="text" class="form-control form-control-lg form-control-solid px-15"
							name="search" value="" placeholder="Search by id, full name or email..." />
						<!--end::Input-->
					</form>
					<!--end::Form-->
					<!--begin::Wrapper-->
					<div class="py-5">
						@if ($search)
							<!--begin::Suggestions-->
							@include('livewire.admin.messenger.messenger-contact-search')
						@endif
						<!--end::Suggestions-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Search-->
			</div>
			<!--end::Modal body-->
			<div class="modal-footer d-flex justify-content-end">
				<button wire:click.prevent="resetChat" type="button" class="btn btn-light font-weight-bold"
					data-bs-dismiss="modal">Discard</button>

				<button wire:click.prevent="addContact" type="button" class="btn btn-{{ primary_color() }} font-weight-bold">Save
					changes</button>
			</div>
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
