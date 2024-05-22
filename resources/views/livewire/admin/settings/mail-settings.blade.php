<div class="card card-custom gutter-b example example-compact mt-10">
	<div class="card-header">
		<h3 class="card-title">Mail Settings</h3>
	</div>
	<!--begin::Form-->
	<form class="form">
		@Csrf
		<div class="card-body">
			<div class="form-group row">
				<div class="col-lg-4">
					<label>MAIL Mailer:</label>
					<input wire:model="MAIL_MAILER" type="text" class="form-control" placeholder="Enter MAIL Mailer" />
					<span class="form-text text-muted">
						Enter MAIL Mailer <code class="text-{{ primary_color() }}">smtp/php/sendbox</code>
					</span>
				</div>
				<div class="col-lg-4">
					<label>MAIL Host:</label>
					<input wire:model="MAIL_HOST" type="text" class="form-control" placeholder="Enter MAIL Host" />
					<span class="form-text text-muted">
						App MAIL Host
					</span>
				</div>
				<div class="col-lg-4">
					<label>MAIL Port:</label>
					<input wire:model="MAIL_PORT" type="text" class="form-control" placeholder="Enter MAIL Port" />
					<span class="form-text text-muted">
						App MAIL Port <code class="text-{{ primary_color() }}">ssl 2525/465/25 tls 587</code>
					</span>
				</div>
				<div class="col-lg-4">
					<label>MAIL Username:</label>
					<input wire:model="MAIL_USERNAME" type="text" class="form-control" placeholder="Enter MAIL Username" />
					<span class="form-text text-muted">
						App MAIL Username
					</span>
				</div>
				<div class="col-lg-4">
					<label>MAIL Password:</label>
					<input wire:model="MAIL_PASSWORD" type="text" class="form-control" placeholder="Enter MAIL Password" />
					<span class="form-text text-muted">
						App MAIL Password
					</span>
				</div>
				<div class="col-lg-4">
					<label>MAIL ENCRYPTION:</label>
					<input wire:model="MAIL_ENCRYPTION" type="text" class="form-control"
						placeholder="Enter MAIL ENCRYPTION" />
					<span class="form-text text-muted">
						App MAIL ENCRYPTION
					</span>
				</div>
				<div class="col-lg-4">
					<label>Email For Test Mail:</label>
					<input wire:model="email" type="email" class="form-control" placeholder="Enter Email For Test Mail" />
					<span class="form-text text-muted">
						Email For Test Mail
					</span>
					@error('email')
						<div class="text-{{ primary_color() }}">{{ $message }}</div>
					@enderror
				</div>
			</div>
		</div>
		<div class="card-footer d-flex justify-content-end py-6 px-9">
			<button wire:click.prevent="sendEmail()" type="reset" class="btn btn-dark me-3">Send Test
				Mail</button>
			<button wire:click.prevent="email_settings()" type="reset" class="cmn-btn btn btn-{{ primary_color() }}">Submit</button>
		</div>
	</form>
	<!--end::Form-->
</div>
