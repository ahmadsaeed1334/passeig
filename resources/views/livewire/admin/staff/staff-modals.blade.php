<!-- Modal-->
<div wire:ignore.self class="modal fade" id="usersModal" data-backdrop="static" tabindex="-1" role="dialog"
	aria-labelledby="staticBackdrop" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-{{ primary_color() }}" id="usersModalLabel">
					Change Password
				</h5>
				<div class="btn btn-icon btn-sm btn-active-icon-{{ primary_color() }}" data-bs-dismiss="modal" id="usersModal">
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
			</div>
			<div class="modal-body">
				<form class="form">
					@csrf
					<div class="card-body row">
						<div class="form-group col-lg-12">
							<label>
								<span class="required">
									New Password:
								</span></label>
							<div class="input-group">
								<input wire:model="password" type="text" class="form-control" placeholder="Enter password" />
								<div class="input-group-append">
									<button wire:click.prevent="changePassword()"
										onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" class="btn btn-{{ primary_color() }}"
										type="button">Change</button>
								</div>
							</div>
							@error('password')
								<div class="text-danger">{{ $message }}</div>
							@enderror
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal-->
<div wire:ignore.self class="modal fade" id="addStaffModal" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header">
				<h5 class="modal-title text-{{ primary_color() }}" id="addStaffModalLabel">
					@if ($staffId)
						Update Staff: {{ $staffName }}
					@else
						Create Staff
					@endif
				</h5>
				<div wire:click.prevent="$dispatch('reset')" class="btn btn-icon btn-sm btn-active-icon-{{ primary_color() }}"
					data-bs-dismiss="modal" id="addStaffModal">
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
			</div>
			<div class="modal-body">
				@include('livewire.admin.staff.form')
			</div>
			<div class="modal-footer">
				<button wire:click.prevent="$dispatch('reset')" type="button" class="btn btn-light font-weight-bold"
					data-bs-dismiss="modal">Discard</button>
				<button wire:click.prevent="store()" type="button" class="btn btn-{{ primary_color() }} font-weight-bold">Save
					changes</button>
			</div>
		</div>
	</div>
</div>

<!--Profile Modal-->
<div wire:ignore.self class="modal fade" id="profileModal" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-lg">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header">
				<h5 class="modal-title text-{{ primary_color() }}" id="profileModalLabel">
					{{ $staffName }}
				</h5>
				<div wire:click.prevent="$dispatch('reset')" class="btn btn-icon btn-sm btn-active-icon-{{ primary_color() }}"
					data-bs-dismiss="modal" id="profileModal">
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
					<span class="svg-icon svg-icon-1">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
								transform="rotate(-45 6 17.3137)" fill="currentColor" />
							<rect x="7.41422" y="6" width="16" height="2" rx="1"
								transform="rotate(45 7.41422 6)" fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</div>
			</div>
			<div class="modal-body">
				@include('livewire.admin.staff.staff-profile-form')
			</div>
			<div class="modal-footer">
				<button wire:click.prevent="$dispatch('reset')" type="button" class="btn btn-light font-weight-bold"
					data-bs-dismiss="modal">Discard</button>
				<button wire:click.prevent="saveProfile()" type="button"
					class="btn btn-{{ primary_color() }} font-weight-bold">Save
					changes</button>
			</div>
		</div>
	</div>
</div>
