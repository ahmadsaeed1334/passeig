<div class="card card-custom gutter-b example example-compact mt-10">
	<div class="card-header">
		<h3 class="card-title">App ENV Settings</h3>
	</div>
	<!--begin::Form-->
	<form class="form">
		@Csrf
		<div class="card-body">
			<div class="form-group row">
				<div class="col-lg-3">
					<label>App Url:</label>
					<input wire:model="APP_URL" type="text" class="form-control" placeholder="Enter App Url" />
					<span class="form-text text-muted">
						Enter App Url
					</span>
				</div>
				<div class="col-lg-3">
					<label>App Envirement:</label>
					<select wire:model="APP_ENV" class="form-control" name="APP_ENV" id="APP_ENV">
						<option value="local">Local</option>
						<option value="live">Live</option>
						<option value="production">Production</option>
						<option value="demo">Demo</option>
					</select>
					<span class="form-text text-muted">
						Select App Envirement
					</span>
				</div>
				<div class="col-lg-3">
					<label>App Debug:</label>
					<select wire:model="APP_DEBUG" class="form-control" name="APP_DEBUG" id="APP_DEBUG">
						<option value="true">True</option>
						<option value="false">False</option>
					</select>
					<span class="form-text text-muted">
						Select App Debug Mode
					</span>
				</div>

			</div>
		</div>
		<div class="card-footer">
			<div class="row">
				<div class="col-lg-10"></div>
				<div class="col-lg-2">
					<button wire:click.prevent="app_env()" type="reset" class="cmn-btn btn btn-{{ primary_color() }}">Submit</button>
				</div>
			</div>
		</div>
	</form>
	<!--end::Form-->
</div>
