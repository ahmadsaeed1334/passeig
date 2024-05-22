<div class="card card-custom gutter-b example example-compact mt-10">
	<div class="card-header">
		<h3 class="card-title">CopyRight Settings</h3>
	</div>
	<!--begin::Form-->
	<form class="form">
		@Csrf
		<div class="card-body">
			<div class="form-group row">
				<div class="col-lg-6">
					<label>Copyright:</label>
					<input wire:model="copy_right" type="text" class="form-control" placeholder="Enter Copyright Name" />
					<span class="form-text text-muted">
						Enter Copyright Name
					</span>
				</div>
				<div class="col-lg-6">
					<label>Copyright URL:</label>
					<input wire:model="copy_right_url" type="text" class="form-control" placeholder="Enter Copyright URL" />
					<span class="form-text text-muted">
						Enter Copyright URL
					</span>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<div class="row">
				<div class="col-lg-10"></div>
				<div class="col-lg-2">
					<button wire:click.prevent="copy_right()" type="reset" class=" cmn-btn btn btn-{{ primary_color() }}">Submit</button>
				</div>
			</div>
		</div>
	</form>
	<!--end::Form-->
</div>
