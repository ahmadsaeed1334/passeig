<div class="card card-custom gutter-b example example-compact mt-10">
	<div class="card-header">
		<h3 class="card-title">Database Connection Settings</h3>
	</div>
	<!--begin::Form-->
	<form class="form">
		@Csrf
		<div class="card-body">
			<div class="form-group row">
				<div class="col-lg-4">
					<label>DB Connection:</label>
					<input wire:model="DB_CONNECTION" type="text" class="form-control" placeholder="Enter DB Connection" />
					<span class="form-text text-muted">
						Enter DB Connection
					</span>
				</div>
				<div class="col-lg-4">
					<label>DB Host:</label>
					<input wire:model="DB_HOST" type="text" class="form-control" placeholder="Enter DB Host" />
					<span class="form-text text-muted">
						App DB Host <code class="text-{{ primary_color() }}">localhost/127.0.0.1</code>
					</span>
				</div>
				<div class="col-lg-4">
					<label>DB Port:</label>
					<input wire:model="DB_PORT" type="text" class="form-control" placeholder="Enter DB Port" />
					<span class="form-text text-muted">
						App DB Port <code class="text-{{ primary_color() }}">3306</code>
					</span>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-lg-4">
					<label>DB Name:</label>
					<input wire:model="DB_DATABASE" type="text" class="form-control" placeholder="Enter DB Name" />
					<span class="form-text text-muted">
						App DB Name
					</span>
				</div>
				<div class="col-lg-4">
					<label>DB Username:</label>
					<input wire:model="DB_USERNAME" type="text" class="form-control" placeholder="Enter DB Username" />
					<span class="form-text text-muted">
						App DB Username
					</span>
				</div>
				<div class="col-lg-4">
					<label>DB Password:</label>
					<input wire:model="DB_PASSWORD" type="text" class="form-control" placeholder="Enter DB Password" />
					<span class="form-text text-muted">
						App DB Password
					</span>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<div class="row">
				<div class="col-lg-10"></div>
				<div class="col-lg-2">
					<button wire:click.prevent="db_connection()" type="reset" class="btn btn-{{ primary_color() }}">Submit</button>
				</div>
			</div>
		</div>
	</form>
	<!--end::Form-->
</div>
