<form class="form">
	@csrf
	<div class="card-body row">
		<!--begin::Input group-->
		<div class="form-group col-lg-6 mb-5">
			<div class="form-floating">
				<input wire:model="staffName" type="text" class="form-control form-control-solid" id="staffName"
					placeholder="Full Name" />
				<label for="staffName">Full Name</label>
			</div>
			<span class="form-text text-muted">Please Enter Full Name</span>
			@error('staffName')
				<div class="text-{{ primary_color() }}">{{ $message }}</div>
			@enderror
		</div>
		<!--end::Input group-->
		<!--begin::Input group-->
		<div class="form-group col-lg-6 mb-5">
			<div class="form-floating">
				<input wire:model="staffEmail" type="email" class="form-control form-control-solid" id="staffEmail"
					placeholder="Email" />
				<label for="staffEmail">Email</label>
			</div>
			<span class="form-text text-muted">Please Enter Email</span>
			@error('staffEmail')
				<div class="text-{{ primary_color() }}">{{ $message }}</div>
			@enderror
		</div>
		<!--end::Input group-->
		@if ($isOpen)
			<!--begin::Input group-->
			<div class="form-group col-lg-{{ $staffId ? '12' : '6' }} mb-5">
				<div class="form-floating">
					<select wire:model="roleName" class="form-select" id="roleName" aria-label="Floating label select example">
						<option value="0">Select Role</option>
						@foreach (DB::table('roles')->get() as $role)
							<option value="{{ $role->name }}">{{ $role->name }}</option>
						@endforeach
					</select>
					<label for="roleName">Role</label>
				</div>
				<span class="form-text text-muted">Please Select Role</span>
				@error('roleName')
					<div class="text-{{ primary_color() }}">{{ $message }}</div>
				@enderror
			</div>
			@if (!$staffId)
				<div class="form-group col-lg-6 mb-5">
					<div class="form-floating">
						<input wire:model="password" autocomplete="off" type="{{ $randomPassword ? 'text' : 'password' }}"
							class="form-control form-control-solid" id="password" placeholder="Password" />
						<label for="password">Password</label>
					</div>
					<span class="form-text text-muted">Please Enter Password <span wire:click="randomPassword"
							class="badge badge-{{ primary_color() }} pointer">genrate</span> </span>
					@error('password')
						<div class="text-{{ primary_color() }}">{{ $message }}</div>
					@enderror
				</div>
			@endif
			<!--end::Input group-->
		@endif
		<div class="form-group col-lg-12">
			<label>Status:</label>
			<div class="form-check form-check-custom form-check-{{ primary_color() }} form-check-solid pointer">
				<input wire:model="staffStatus" class="form-check-input pointer" type="checkbox" value="" />
				<label class="form-check-label" for="">
					Is Active
				</label>
			</div>
			<span class="form-text text-muted">Employee Should be Active?</span>
			@error('staffStatus')
				<div class="text-{{ primary_color() }}">{{ $message }}</div>
			@enderror
		</div>
	</div>
</form>
