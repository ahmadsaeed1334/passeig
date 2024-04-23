<div class="card card-custom gutter-b example example-compact mt-10">
	<div class="card-header">
		<h3 class="card-title">Email Settings</h3>
	</div>
	<!--begin::Form-->
	<form class="form">
		@Csrf
		<div class="card-body">
			<div class="form-group row">
				<div class="col-lg-3">
					<label>From Name:</label>
					<input wire:model="from_name" type="text" class="form-control" placeholder="Enter Email From name" />
					<span class="form-text text-muted">Please enter Email From name</span>
				</div>
				<div class="col-lg-3">
					<label>From Email:</label>
					<input wire:model="from_email" type="email" class="form-control" placeholder="From Email" />
					<span class="form-text text-muted">Please enter from email</span>
				</div>
				<div class="col-lg-3">
					<label>ReplyTo Name:</label>
					<input wire:model="reply_to_name" type="text" class="form-control" placeholder="ReplyTo Name" />
					<span class="form-text text-muted">Please enter ReplyTo Name</span>
				</div>
				<div class="col-lg-3">
					<label>ReplyTo Email:</label>
					<input wire:model="reply_to_email" type="email" class="form-control" placeholder="ReplyTo Email" />
					<span class="form-text text-muted">Please enter ReplyTo Email</span>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<div class="row">
				<div class="col-lg-10"></div>
				<div class="col-lg-2">
					<button wire:click.prevent="email()" type="reset" class="btn btn-{{ primary_color() }}">Submit</button>
				</div>
			</div>
		</div>
	</form>
	<!--end::Form-->
</div>
