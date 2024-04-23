<form id="addPositionsModel_form" class="form" action="#">
	@csrf
	<!--begin::Input group-->

	<div class="row mb-7">
		<!--begin::Label-->
		<div class="form-group col-lg-4 mb-5">
			<div class="form-floating">
				<input wire:model="title" type="text" class="form-control form-control-solid" id="title"
					placeholder="Title" />
				<label for="title">Title</label>
			</div>
			<span class="form-text text-muted">Please Enter Title</span>
			@error('title')
				<div class="text-{{ setting('general_settings.primary_color') }}">{{ $message }}</div>
			@enderror
		</div>
		<div class="form-group col-lg-4 mb-5">
			<div class="form-floating">
				<select wire:model.defe="color" class="form-control" name="color" id="color">
					<option value="white">White</option>
					<option value="light">Light</option>
					<option value="primary">Primary</option>
					<option value="secondary">Secondary</option>
					<option value="success">Success</option>
					<option value="info">Info</option>
					<option value="warning">Warning</option>
					<option value="danger">Danger</option>
					<option value="dark">Dark</option>
				</select>
				<label for="color">Color</label>
			</div>
			<span class="form-text text-muted">Select Color</span>
			@error('color')
				<div class="text-{{ setting('general_settings.primary_color') }}">{{ $message }}</div>
			@enderror
		</div>
		<div class="form-group col-lg-4 mb-5">
			<div class="form-floating">
				<input wire:model="date" type="text" class="form-control form-control-solid" id="date"
					placeholder="date" />
				<label for="date">date</label>
			</div>
			<span class="form-text text-muted">Like <code>{{ today() }}</code></span>
			@error('date')
				<div class="text-{{ setting('general_settings.primary_color') }}">{{ $message }}</div>
			@enderror
		</div>
		<!--end::Input-->
	</div>
	<code>$id,$name,$app_name</code>
	<div class="row mb-7">
		<!--begin::Label-->
		<div class="form-floating">
			<textarea wire:model="message" type="text" class="form-control form-control-solid py-10" id="message"
			 placeholder="Message" rows="6" style="height: 150px;"></textarea>
			<label for="message">Message</label>
		</div>
		<span class="form-text text-muted">Please Enter Message</span>
		@error('message')
			<div class="text-{{ setting('general_settings.primary_color') }}">{{ $message }}</div>
		@enderror
		<!--end::Input-->
	</div>
	<div class="row mb-7">
		<div class="form-group col-lg-4 mb-5">
			<div class="form-floating">
				<select wire:model.defe="isModal" class="form-control" name="isModal" id="isModal">
					<option value="">Select</option>
					<option value="true">Yes</option>
					<option value="false">No</option>
				</select>
				<label for="isModal">isModal</label>
			</div>
			<span class="form-text text-muted">Select isModal</span>
			@error('isModal')
				<div class="text-{{ setting('general_settings.primary_color') }}">{{ $message }}</div>
			@enderror
		</div>
		<div class="form-group col-lg-4 mb-5">
			<div class="form-floating">
				<input wire:model="modal" type="text" class="form-control form-control-solid" id="modal"
					placeholder="modal" />
				<label for="modal">modal</label>
			</div>
			<span class="form-text text-muted">Please Enter modal</span>
			@error('modal')
				<div class="text-{{ setting('general_settings.primary_color') }}">{{ $message }}</div>
			@enderror
		</div>
		<div class="form-group col-lg-4 mb-5">
			<div class="form-floating">
				<input wire:model="function" type="text" class="form-control form-control-solid" id="function"
					placeholder="function" />
				<label for="function">function</label>
			</div>
			<span class="form-text text-muted">Please Enter function</span>
			@error('function')
				<div class="text-{{ setting('general_settings.primary_color') }}">{{ $message }}</div>
			@enderror
		</div>
	</div>
	<div class="row mb-7">
		<div class="form-group col-lg-12 mb-15">
			<div class="form-floating">
				<input wire:model="user_id" type="text" class="form-control form-control-solid" id="user_id"
					placeholder="user_id" />
				<label for="user_id">User Id</label>
			</div>
			<span class="form-text text-muted">Select User id</span>
			@error('user_id')
				<div class="text-{{ setting('general_settings.primary_color') }}">{{ $message }}</div>
			@enderror
		</div>
		<div class="form-group col-lg-12 mb-15">
			<div class="form-floating">
				<input wire:model.debounce.1000ms="search" type="text" class="form-control form-control-solid" id="search"
					placeholder="search" />
				<label for="search">search</label>
			</div>
			@if ($search)
				@foreach ($results as $result)
					<span wire:click.prevent="$set('user_id','{{ $result->id }}')" class="text-dark ms-10 pointer mt-20">Id:
						{{ $result->id }}, name: {{ $result->name }}</span><br>
				@endforeach
			@endif
		</div>
	</div>

	<div class="pt-15 text-center">
		<button wire:click.prevent="resetInputs()" type="reset" class="btn btn-light me-3"
			data-bs-dismiss="modal">Discard</button>
		<button
			@if ($slideId) wire:click.prevent="update('{{ $slideId }}')" @else wire:click.prevent="store()" @endif
			type="submit" class="btn btn-{{ setting('general_settings.primary_color') }}"
			data-kt-positions-modal-action="submit">
			<span class="indicator-label">Submit</span>
			<span class="indicator-progress">Please wait...
				<span class="spinner-border spinner-border-sm ms-2 align-middle"></span></span>
		</button>
	</div>
	<!--end::Actions-->
</form>
