<div class="card card-custom gutter-b example example-compact mt-10">
	<div class="card-header">
		<h3 class="card-title">Third Party Tokens</h3>
	</div>
	<!--begin::Form-->
	<form class="form">
		@Csrf
		<div class="card-body">
			{{-- <div class="form-group row">
				<div class="col-lg-12">
					<label>Drop Box Token:</label>
					<input wire:model="DROPBOX_TOKEN" type="text" class="form-control" placeholder="Enter Drop Box Token" />
					<span class="form-text text-muted">
						Enter Drop Box Token
					</span>
				</div>
			</div> --}}
			<div class="form-group row">
				<div class="col-lg-12">
					<label>Slack Webhook URL:</label>
					<input wire:model="SLACK_WEBHOOK_URL" type="text" class="form-control"
						placeholder="Enter Slack Webhook URL" />
					<span class="form-text text-muted">
						Slack Webhook URL
					</span>
				</div>
			</div>
			{{-- <div class="form-group row">
				<div class="col-lg-12">
					<label>Prequel:</label>
					<select wire:model="PREQUEL_ENABLED" class="form-control" name="PREQUEL_ENABLED" id="PREQUEL_ENABLED">
						<option value="true">True</option>
						<option value="false">False</option>
					</select>
					<span class="form-text text-muted">
						Select Prequel Mode
					</span>
				</div>
			</div> --}}
		</div>
		<div class="card-footer">
			<div class="row">
				<div class="col-lg-10"></div>
				<div class="col-lg-2">
					<button wire:click.prevent="tokens()" type="reset" class="btn btn-{{ primary_color() }}">Submit</button>
				</div>
			</div>
		</div>
	</form>
	<!--end::Form-->
</div>
