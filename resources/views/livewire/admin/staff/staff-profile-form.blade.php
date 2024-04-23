<form class="form">
	@csrf
	<div class="card-body row">
		<!--begin::Input group-->
		<div class="form-group col-lg-4 mb-5">
			<div class="form-floating">
				<input wire:model="phone" type="text" class="form-control form-control-solid" id="phone"
					placeholder="Full Name" />
				<label for="phone">Phone Number</label>
			</div>
			<span class="form-text text-muted">Please Enter Phone Number</span>
			@error('phone')
				<div class="text-{{ primary_color() }}">{{ $message }}</div>
			@enderror
		</div>
		<!--end::Input group-->
		<!--begin::Input group-->
		<div class="form-group col-lg-4 mb-5">
			<div class="form-floating">
				<input wire:model="code" type="text" class="form-control form-control-solid" id="code"
					placeholder="Full Name" />
				<label for="code">Employee Code</label>
			</div>
			<span class="form-text text-muted">Please Enter Employee Code</span>
			@error('code')
				<div class="text-{{ primary_color() }}">{{ $message }}</div>
			@enderror
		</div>
		<!--end::Input group-->
		<!--begin::Input group-->
		<div class="form-group col-lg-4 mb-5">
			<div class="form-floating">
				<input wire:model="iqama" type="text" class="form-control form-control-solid" id="iqama"
					placeholder="Email" />
				<label for="iqama">Iqama Number</label>
			</div>
			<span class="form-text text-muted">Please Enter Iqama Number</span>
			@error('iqama')
				<div class="text-{{ primary_color() }}">{{ $message }}</div>
			@enderror
		</div>
		<!--end::Input group-->
		<!--begin::Input group-->
		<div class="form-group col-lg-12 mb-5">
			<div class="form-floating">
				<textarea wire:model="address" type="text" class="form-control form-control-solid" id="address"
				 placeholder="Email" style="height: 100px"></textarea>
				<label for="address">Address</label>
			</div>
			<span class="form-text text-muted">Please Enter Address</span>
			@error('address')
				<div class="text-{{ primary_color() }}">{{ $message }}</div>
			@enderror
		</div>
		<!--end::Input group-->
		<!--begin::Input group-->
		<div class="form-group col-lg-6 mb-5">
			<div class="form-floating">
				<input wire:model="country" type="text" class="form-control form-control-solid" id="country"
					placeholder="Email" />
				<label for="country">Country</label>
			</div>
			<span class="form-text text-muted">Please Enter Country</span>
			@error('country')
				<div class="text-{{ primary_color() }}">{{ $message }}</div>
			@enderror
		</div>
		<!--end::Input group-->
		<!--begin::Input group-->
		<div class="form-group col-lg-6 mb-5">
			<div class="form-floating">
				<input wire:model="salary" type="text" class="form-control form-control-solid" id="salary"
					placeholder="Email" />
				<label for="salary">Salary</label>
			</div>
			<span class="form-text text-muted">Please Enter Salary</span>
			@error('salary')
				<div class="text-{{ primary_color() }}">{{ $message }}</div>
			@enderror
		</div>
		<!--end::Input group-->
		<!--begin::Input group-->
		<div class="form-group col-lg-6 mb-5">
			<div class="mb-0">
				<label for="dob" class="form-label">Date Of Birth</label>
				<input wire:model="dob" class="form-control form-control-solid" placeholder="Pick date" id="dob" />
			</div>
			<span class="form-text text-muted">Please Enter Date Of Birth</span>
			@error('dob')
				<div class="text-{{ primary_color() }}">{{ $message }}</div>
			@enderror
		</div>
		<!--end::Input group-->
		<!--begin::Input group-->
		<div class="form-group col-lg-6 mb-5">
			<div class="mb-0">
				<label for="join" class="form-label">Date Of Join</label>
				<input wire:model="join" class="form-control form-control-solid" placeholder="Pick date" id="join" />
			</div>
			<span class="form-text text-muted">Please Enter Date Of Join</span>
			@error('join')
				<div class="text-{{ primary_color() }}">{{ $message }}</div>
			@enderror
		</div>
		<!--end::Input group-->
	</div>
</form>
