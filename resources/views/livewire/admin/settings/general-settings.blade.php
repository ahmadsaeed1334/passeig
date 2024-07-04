<div class="card card-custom gutter-b example example-compact">
	<div class="card-header">
		<h3 class="card-title">General Settings</h3>
	</div> 
	<!--begin::Form-->
	<form class="form">
		@csrf
		<div class="card-body">
			<div class="form-group row">

				<!--begin::Image input-->
				<div class="col-lg-4">
					<label class="text-dark-75 font-weight-bolder font-size-lg">White Logo:</label>
					<br>
					<!--begin::Image input-->
					@if ($photo || $userAvatar)
						<div class="image-input image-input-outline align-items-center"
							style="background-image: url({{ asset('img/bg-back.jpg') }}) !important; background-size:100% 100%;width:300px">

							<!--begin::Preview existing avatar-->
							<div class="image-input-wrapper"
								style="background-image: url({{ $photo ? $photo->temporaryUrl() : $userAvatar }}); background-size:100% 100%;width:300px">
							</div>
							<!--end::Preview existing avatar-->
						@else
							<div class="image-input image-input-outline align-items-center"
								style="background-image: url({{ $photo ? $photo->temporaryUrl() : $userAvatar }}); background-size:100% 100%;width:300px">

								<!--begin::Preview existing avatar-->
								<div class="image-input-wrapper"
									style="background-image: url({{ asset('img/logo-placeholder.png') }}); background-size:100% 100%;width:300px">
								</div>
								<!--end::Preview existing avatar-->
					@endif
					<!--begin::Label-->
					<label class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow"
						data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change Logo">
						<i class="bi bi-pencil-fill fs-7"></i>
						<!--begin::Inputs-->
						<input wire:model="photo" type="file" name="photo" accept=".png, .jpg, .jpeg" />
						<input type="hidden" name="avatar_remove" />
						<!--end::Inputs-->
					</label>
					<!--end::Label-->
					<!--begin::Cancel-->
					<span class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow"
						data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Logo">
						<i class="bi bi-x fs-2"></i>
					</span>
					<!--end::Cancel-->
					<!--begin::Remove-->
					@if ($photo || $userAvatar)
						<span wire:click.prevent="imagedelete()"
							class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow"
							data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove Logo">
							<i class="bi bi-x fs-2"></i>
						</span>
					@endif
					<!--end::Remove-->
				</div>
				<!--end::Image input-->
				<!--begin::Hint-->
				<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
				<!--end::Hint-->

			</div>

			{{-- Black Logo --}}
			<div class="col-lg-4">
				<label class="text-dark-75 font-weight-bolder font-size-lg">Black Logo:</label>
				<br>
				<!--begin::Image input-->
				@if ($logo || $blacklogo)
					<div class="image-input image-input-outline align-items-center" data-kt-image-input="true"
						style="background-image: url({{ asset('img/bg-white.jpg') }}) !important; background-size:100% 100%;width:300px">

						<!--begin::Preview existing avatar-->
						<div class="image-input-wrapper"
							style="background-image: url({{ $logo ? $logo->temporaryUrl() : $blacklogo }}); background-size:100% 100%;width:300px">
						</div>
						<!--end::Preview existing avatar-->
					@else
						<div class="image-input image-input-outline align-items-center" data-kt-image-input="true"
							style="background-image: url({{ $logo ? $logo->temporaryUrl() : $blacklogo }}); background-size:100% 100%;width:300px">

							<!--begin::Preview existing avatar-->
							<div class="image-input-wrapper"
								style="background-image: url({{ asset('img/logo-placeholder.png') }}); background-size:100% 100%;width:300px">
							</div>
							<!--end::Preview existing avatar-->
				@endif
				<!--begin::Label-->
				<label class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow"
					data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change Logo">
					<i class="bi bi-pencil-fill fs-7"></i>
					<!--begin::Inputs-->
					<input wire:model="logo" type="file" name="photo" accept=".png, .jpg, .jpeg" />
					<input type="hidden" name="avatar_remove" />
					<!--end::Inputs-->
				</label>
				<!--end::Label-->
				<!--begin::Cancel-->
				<span class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow"
					data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Logo">
					<i class="bi bi-x fs-2"></i>
				</span>
				<!--end::Cancel-->
				<!--begin::Remove-->
				@if ($logo || $blacklogo)
					<span wire:click.prevent="logodelete()"
						class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow"
						data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove Logo">
						<i class="bi bi-x fs-2"></i>
					</span>
				@endif
				<!--end::Remove-->
			</div>
			<!--end::Image input-->
			<!--begin::Hint-->
			<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
			<!--end::Hint-->

		</div>

		{{-- Favicon --}}
		<div class="col-lg-4">
			<label class="text-dark-75 font-weight-bolder font-size-lg">Favicon:</label>
			<br>
			<!--begin::Image input-->
			@if ($icon || $favicon)
				<div class="image-input image-input-outline align-items-center" data-kt-image-input="true"
					style="background-image: url({{ asset('img/bg-white.jpg') }}) !important; background-size:100% 100%;width:300px">

					<!--begin::Preview existing avatar-->
					<div class="image-input-wrapper"
						style="background-image: url({{ $icon ? $icon->temporaryUrl() : $favicon }}); background-size:100% 100%;width:300px">
					</div>
					<!--end::Preview existing avatar-->
				@else
					<div class="image-input image-input-outline align-items-center" data-kt-image-input="true"
						style="background-image: url({{ $icon ? $icon->temporaryUrl() : $favicon }}); background-size:100% 100%;width:300px">

						<!--begin::Preview existing avatar-->
						<div class="image-input-wrapper"
							style="background-image: url({{ asset('img/favicon-placeholder.jpg') }}); background-size:100% 100%;width:300px">
						</div>
						<!--end::Preview existing avatar-->
			@endif
			<!--begin::Label-->
			<label class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow"
				data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change Favicon">
				<i class="bi bi-pencil-fill fs-7"></i>
				<!--begin::Inputs-->
				<input wire:model="icon" type="file" name="photo" accept=".png, .jpg, .jpeg" />
				<input type="hidden" name="avatar_remove" />
				<!--end::Inputs-->
			</label>
			<!--end::Label-->
			<!--begin::Cancel-->
			<span class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow"
				data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Favicon">
				<i class="bi bi-x fs-2"></i>
			</span>
			<!--end::Cancel-->
			<!--begin::Remove-->
			@if ($icon || $favicon)
				<span wire:click.prevent="icondelete()"
					class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow"
					data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove Favicon">
					<i class="bi bi-x fs-2"></i>
				</span>
			@endif
			<!--end::Remove-->
		</div>
		<!--end::Image input-->
		<!--begin::Hint-->
		<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
		<!--end::Hint-->

</div>

</div>
<div class="form-group row">
	<div class="col-lg-4">
		<label>Company Name:</label>
		<input wire:model="app_name" type="text" class="form-control" placeholder="Enter Company name" />
		<span class="form-text text-muted">Please enter app name</span>
	</div>
	<div class="col-lg-8">
		<label>Company Description:</label>
		<input wire:model="app_description" type="text" class="form-control" placeholder="Company Description" />
		<span class="form-text text-muted">Please enter Company description</span>
	</div>
</div>
<div class="form-group row">
	<div class="col-lg-3">
		<label>Email:</label>
		<input wire:model="email" type="text" class="form-control" placeholder="Enter Email" />
		<span class="form-text text-muted">Please enter email</span>
	</div>
	<div class="col-lg-3">
		<label>Website:</label>
		<input wire:model="website" type="text" class="form-control" placeholder="Enter Website" />
		<span class="form-text text-muted">Please enter Website</span>
	</div>
	<div class="col-lg-3">
		<label>Phone:</label>
		<input wire:model="phone" type="text" class="form-control" placeholder="Enter Phone" />
		<span class="form-text text-muted">Please enter Phone</span>
	</div>
	<div class="col-lg-3">
		<label>Fax:</label>
		<input wire:model="fax" type="text" class="form-control" placeholder="Enter Fax" />
		<span class="form-text text-muted">Please enter Fax</span>
	</div>
</div>
<div class="form-group row">
	<div class="col-lg-6">
		<label>Address:</label>
		<input wire:model="address" type="text" class="form-control" placeholder="Enter Address" />
		<span class="form-text text-muted">Please enter Address</span>
	</div>
	<div class="col-lg-3">
		<label>System Timezone:</label>
		<input wire:model="app_timezone" type="text" class="form-control" placeholder="System Timezone" />
		<span class="form-text text-muted">Please enter system timezone. eg:
			<code class="text-{{ primary_color() }}">{{ config('app.timezone') }}</code>
		</span>
	</div>
	<div class="col-lg-3">
		<label>Default Password:</label>
		<input wire:model="default_password" type="text" class="form-control" placeholder="Default Password" />
		<span class="form-text text-muted">Please enter Default Password</span>
	</div>
</div>
<div class="form-group row">
	<div class="col-lg-2">
		<label>Per Page Items:</label>
		<input wire:model="page_size" type="number" class="form-control" placeholder="Enter Per Page Items" />
		<span class="form-text text-muted">Please enter Per Page Items to show</span>
	</div>

	<div class="col-lg-3">
		<label>Date Format:</label>
		<select wire:model="custom_date_format" class="form-control" name="custom_date_format"
			id="custom_date_format">
			<option value="d M, Y">{{ date('d M, Y', strtotime(now())) }}</option>
			<option value="d F, Y">{{ date('d F, Y', strtotime(now())) }}</option>
			<option value="d/m/Y">{{ date('d/m/Y', strtotime(now())) }}</option>
			<option value="d-m-Y">{{ date('d-m-Y', strtotime(now())) }}</option>
			<option value="d.m.Y">{{ date('d.m.Y', strtotime(now())) }}</option>
			<option value="F j, Y">{{ date('F j, Y', strtotime(now())) }}</option>
			<option value="m d y">{{ date('m d y', strtotime(now())) }}</option>
			<option value="j, n, Y">{{ date('j, n, Y', strtotime(now())) }}</option>
			<option value="j-m-y">{{ date('j-m-y', strtotime(now())) }}</option>
			<option value="D M j Y">{{ date('D M j Y', strtotime(now())) }}</option>
			<option value="Y-m-d">{{ date('Y-m-d', strtotime(now())) }}</option>
		</select>
		<span class="form-text text-muted">
			Select Date Format
		</span>
	</div>
	<div class="col-lg-3">
		<label>Layout:</label>
		<input wire:model="layout" type="text" class="form-control" placeholder="Enter layout" />
		<span class="form-text text-muted">
			App Layout <code class="text-{{ primary_color() }}">-fluid</code>
		</span>
	</div>
	<div class="col-lg-2">
		<label>{{ __('Primary Color') }}:</label>
		<select wire:model="color" class="form-control" name="color" id="color">
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
	</div>
	<div class="col-lg-2">
		<label>Default Language:</label>
		<select wire:model="language" class="form-control" name="lang" id="kt_docs_select2_country">
			<option value="{{ $language }}" data-kt-select2-country="{{ getLanguageFlag($language) }}">
				{{ getLanguageName($language) }}
			</option>
			@foreach ($languages as $key => $lang)
				@if ($lang != 'vendor')
					<option value="{{ $lang }}" data-kt-select2-country="{{ getLanguageFlag($lang) }}">
						{{ getLanguageName($lang) }}</option>
				@endif
			@endforeach
		</select>
	</div>
</div>
</div>
<div class="card-footer">
	<div class="row">
		<div class="col-lg-10"></div>
		<div class="col-lg-2">
			<button wire:click.prevent="general()" type="reset" class="btn btn-{{ primary_color() }}">Submit</button>
		</div>
	</div>
</div>
</form>
<!--end::Form-->
</div>
{{-- @push('scripts')
	<script>
		// Format options
		var optionFormat = function(item) {
			if (!item.id) {
				return item.text;
			}

			var span = document.createElement('span');
			var imgUrl = item.element.getAttribute('data-kt-select2-country');
			var template = '';

			template += '<img src="' + imgUrl + '" class="rounded-circle h-20px me-2" alt="image"/>';
			template += item.text;

			span.innerHTML = template;

			return $(span);
		}

		// Init Select2 --- more info: https://select2.org/
		$('#kt_docs_select2_country').select2({
			templateSelection: optionFormat,
			templateResult: optionFormat
		});
	</script>
@endpush --}}
