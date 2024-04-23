<!-- Modal-->
<div wire:ignore.self class="modal fade" id="addLanguageModal" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header">
				<h5 class="modal-title text-{{ primary_color() }}" id="addLanguageModalLabel">
					Create Language
				</h5>
				<div wire:click.prevent="resetAll" class="btn btn-icon btn-sm btn-active-icon-{{ primary_color() }}"
					data-bs-dismiss="modal" id="addLanguageModal">
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
					<span class="svg-icon svg-icon-1">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
								transform="rotate(-45 6 17.3137)" fill="currentColor" />
							<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
								fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</div>
			</div>
			<div class="modal-body">
				@include('livewire.admin.language.language-form')
			</div>
			<div class="modal-footer">
				<button wire:click.prevent="resetAll" type="button" class="btn btn-light font-weight-bold"
					data-bs-dismiss="modal">Discard</button>
				<button wire:click.prevent="storeLanguage()" type="button"
					class="btn btn-{{ primary_color() }} font-weight-bold">Save
					changes</button>
			</div>
		</div>
	</div>
</div>

<!--Add Translation Modal-->
<div wire:ignore.self class="modal fade" id="addKeysModal" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header">
				<h5 class="modal-title text-{{ primary_color() }}" id="addKeysModalLabel">
					Add new Keys
				</h5>
				<div wire:click.prevent="resetAll" class="btn btn-icon btn-sm btn-active-icon-{{ primary_color() }}"
					data-bs-dismiss="modal" id="addKeysModal">
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
					<span class="svg-icon svg-icon-1">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
								transform="rotate(-45 6 17.3137)" fill="currentColor" />
							<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
								fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</div>
			</div>
			<div class="modal-body scroll" id="commentDiv">
				<form id="addPermissionsModel_form" class="form" action="#">
					@csrf
					<!--begin::Input group-->
					<div class="row">
						@foreach ($translations as $index => $translation)
							<div class="col-5 mb-7">
								<!--begin::Label-->
								<label class="fs-6 fw-semibold form-label mb-2">
									<span class="required">Key</span>
								</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input wire:model="translations.{{ $index }}.key" class="form-control form-control-solid"
									type="text" placeholder="Enter Key" name="translations.{{ $index }}.key"
									id="translations.{{ $index }}.key" />
								@error('translations.{{ $index }}.key')
									<div class="text-{{ primary_color() }}">{{ $message }}</div>
								@enderror
								<!--end::Input-->
							</div>
							<div class="col-5 mb-7">
								<!--begin::Label-->
								<label class="fs-6 fw-semibold form-label mb-2">
									<span class="required">Value</span>
								</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input wire:model="translations.{{ $index }}.value" class="form-control form-control-solid"
									type="text" placeholder="Enter Value" name="translations.{{ $index }}.value"
									id="translations.{{ $index }}.value" />
								@error('translations.{{ $index }}.value')
									<div class="text-{{ primary_color() }}">{{ $message }}</div>
								@enderror
								<!--end::Input-->
							</div>
							<div class="col-2 mb-7">
								@if (!$loop->first)
									<label class="fs-6 fw-semibold form-label mb-2 opacity-0">
										<span class="required">Value</span>
									</label>
									<button wire:click="removeTranslation({{ $index }})" type="button"
										class="btn btn-danger font-weight-bold">Remove
									</button>
								@endif
							</div>
						@endforeach
					</div>
				</form>
			</div>
			<div class="modal-footer d-flex justify-content-between">
				<div>
					<button wire:click.prevent="addTranslation" type="button" class="btn btn-dark font-weight-bold">Add
						More</button>
				</div>
				<div>
					<button wire:click.prevent="resetTranslations" type="button" class="btn btn-light font-weight-bold"
						data-bs-dismiss="modal">Discard</button>

					<button wire:click.prevent="store('{{ $langCode }}')" type="button"
						class="btn btn-{{ primary_color() }} font-weight-bold">Save
						changes</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Edit Language Modal-->
<div wire:ignore.self class="modal fade" id="editLanguageModal" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-xl">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header">
				<h5 class="modal-title text-{{ primary_color() }}" id="editLanguageModalLabel">
					Edit Language {{ getLanguageName($currantLang) }}
				</h5>
				<div wire:click.prevent="resetAll" class="btn btn-icon btn-sm btn-active-icon-{{ primary_color() }}"
					data-bs-dismiss="modal" id="editLanguageModal">
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
					<span class="svg-icon svg-icon-1">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
								transform="rotate(-45 6 17.3137)" fill="currentColor" />
							<rect x="7.41422" y="6" width="16" height="2" rx="1"
								transform="rotate(45 7.41422 6)" fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</div>
			</div>

			<div class="modal-body">
				@if ($currantLang)
					<form method="POST" action="{{ route('store-language-data', ['lang' => $currantLang]) }}">
						@csrf

						@include('livewire.admin.language.language-edit-form')
						<div class="modal-footer d-flex justify-content-end py-6 px-9">
							<button wire:click.prevent="resetAll" type="button" class="btn btn-light font-weight-bold"
								data-bs-dismiss="modal">Discard</button>
							<button type="submit" class="btn btn-{{ primary_color() }} font-weight-bold">Save
								changes</button>
						</div>
					</form>
				@endif
			</div>


		</div>
	</div>
</div>
