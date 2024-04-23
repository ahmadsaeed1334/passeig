<div class="card card-custom gutter-b example example-compact mt-10">
	<div class="card-header">
		<h3 class="card-title">Sweet Alert Settings</h3>
	</div>
	<!--begin::Form-->
	<form class="form">
		@Csrf
		<div class="card-body">
			<div class="form-group row">
				<div class="col-lg-3">
					<label>Default Title:</label>
					<input wire:model="title" type="text" class="form-control" placeholder="Enter Default Title" />
					<span class="form-text text-muted">Please enter Default Title</span>
				</div>
				<div class="col-lg-9">
					<label>Default Message:</label>
					<input wire:model="message" type="text" class="form-control" placeholder="Default Message" />
					<span class="form-text text-muted">Please enter Default Message</span>
				</div>
				<div class="col-lg-4">
					<label>Display Time:</label>
					<input wire:model="timer" type="text" class="form-control" placeholder="Display Time" />
					<span class="form-text text-muted">Please enter Display Time like <code
							class="text-{{ primary_color() }}">3000</code> is equal to 3 Sec.</span>
				</div>
				<div class="col-lg-4">
					<label>Background Color:</label>
					<input wire:model="background" type="email" class="form-control" placeholder="Background Color" />
					<span class="form-text text-muted">Background Color <code class="text-{{ primary_color() }}">#1E1E2D -
							#f1416c</code> </span>
				</div>
				<div class="col-lg-4">
					<label>Alert Message Position:</label>
					<select wire:model="position" class="form-control" name="alert_position" id="alert_position">
						<option value="top">top</option>
						<option value="top-start">top-start</option>
						<option value="top-end">top-end</option>
						<option value="center">center</option>
						<option value="center-start">center-start</option>
						<option value="center-end">center-end</option>
						<option value="bottom">bottom</option>
						<option value="bottom-start">bottom-start</option>
						<option value="bottom-end">bottom-end</option>
					</select>
					<span class="form-text text-muted">
						Select Alert Position
					</span>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<div class="row">
				<div class="col-lg-10"></div>
				<div class="col-lg-2">
					<button wire:click.prevent="alert_settings()" type="reset" class="btn btn-{{ primary_color() }}">Submit</button>
				</div>
			</div>
		</div>
	</form>
	<!--end::Form-->
</div>
