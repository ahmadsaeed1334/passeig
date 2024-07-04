<div class="card card-custom gutter-b example example-compact mt-10">
	<div class="card-header">
		<h3 class="card-title">Backup Settings</h3>
	</div>
	<!--begin::Form-->
	<form class="form">
		@Csrf
		<div class="card-body">
			<div class="form-group row">
				<div class="col-lg-2">
					<label>Backup Name:</label>
					<input wire:model="BACKUP_NAME" type="text" class="form-control" placeholder="Enter Backup Name" />
					<span class="form-text text-muted">
						Enter Dackup Name
					</span>
				</div>
				<div class="col-lg-10">
					<label>Drop Box Token:</label>
					<input wire:model="DROPBOX_TOKEN" type="text" class="form-control" placeholder="Enter Drop Box Token" />
					<span class="form-text text-muted">
						Enter Drop Box Token
					</span>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<div class="row">
				<div class="col-lg-10"></div>
				<div class="col-lg-2">
					<button wire:click.prevent="backup()" type="reset" class="btn btn-{{ primary_color() }}">Submit</button>
				</div>
			</div>
		</div>
	</form>
	<!--end::Form-->
</div>
