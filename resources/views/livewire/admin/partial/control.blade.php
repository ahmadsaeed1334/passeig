<div wire:ignore id="kt_drawer_example_basic" class="bg-body" data-kt-drawer="true" data-kt-drawer-activate="true"
	data-kt-drawer-toggle="#kt_drawer_example_basic_button" data-kt-drawer-close="#kt_drawer_example_basic_close"
	data-kt-drawer-width="500px">
	<!--begin::Card-->
	@if (auth()->user()->user_type == -1)
		<div class="card rounded-0 w-100 shadow-none">
			<!--begin::Header-->
			<div class="card-header" id="kt_help_header">
				<h5 class="card-title fw-semibold">Ultimate Control panel</h5>
				<div class="card-toolbar">
					<button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="kt_drawer_example_basic_close">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-2">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1"
									transform="rotate(45 7.41422 6)" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</button>
				</div>
			</div>
			<!--end::Header-->
			<!--begin::Body-->
			<div class="card-body" id="kt_help_body">
				<!--begin::Content-->
				<div id="kt_help_scroll" class="hover-scroll-overlay-y" data-kt-scroll="true" data-kt-scroll-height="1000px"
					data-kt-scroll-wrappers="#kt_help_body" data-kt-scroll-dependencies="#kt_help_header" data-kt-scroll-offset="5px">
					<div class="p-lg-8 mb-10 rounded border border-dashed border-white-800 p-6">
						<div class="form-group">
							<label>Run Custom Command</label>
							<div class="input-group">
								<input wire:model="command" wire:keydown.enter="custom_command()" type="text" class="form-control ml-1"
									placeholder="Type Your Artisan Command..." />
								<div class="input-group-append">
									<button wire:click.prevent="custom_command()" class="btn btn-danger" type="button">Run!</button>
								</div>
							</div>
							@error('command')
								<div class="text-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="separator separator-dashed mt-8 mb-5"></div>
						<div class="form-group">
							<div class="btn-group" role="group" aria-label="Basic example">
								<button wire:click.prevent="$set('command','make:migration ')" type="button"
									class="btn btn-primary">Migration</button>
								<button wire:click.prevent="$set('command','make:livewire ')" type="button"
									class="btn btn-info">Livewire</button>
								<button wire:click.prevent="$set('command','make:controller ')" type="button"
									class="btn btn-success">Controller</button>
								<button wire:click.prevent="$set('command','make:model ')" type="button" class="btn btn-dark">
									Model</button>
							</div>
						</div>
					</div>
					<div class="p-lg-8 mb-10 rounded border border-dashed border-white-300 p-6">
						<div class="form-group row align-items-center mb-0">
							<label class="col-8 col-form-label">Enable App Debug Mode?</label>
							<div class="col-4 d-flex justify-content-end">
								<span class="form-check form-switch form-check-custom form-check-danger form-check-solid">
									<label>
										<input wire:model="app_debug" type="checkbox" name="app_debug" class="form-check-input pointer" />
										<span></span>
									</label>
								</span>
							</div>
						</div>
					</div>
					<div class="p-lg-8 mb-10 rounded border border-dashed border-white-300 p-6">
						<div class="form-group row align-items-center mb-0">
							<label class="col-8 col-form-label">Theme Primary Color: </label>
							<div class="col-4 d-flex justify-content-end">
								<select wire:model="color" class="form-control" name="color" id="color">
									<option value="white" class="text-hover-{{ primary_color() }} badge badge-circle badge-white">White </option>
									<option value="light" class="text-hover-{{ primary_color() }} badge badge-circle badge-light">Light</option>
									<option value="primary" class="text-hover-{{ primary_color() }} badge badge-circle badge-primary">Primary
									</option>
									<option value="secondary" class="text-hover-{{ primary_color() }} badge badge-circle badge-secondary">Secondary
									</option>
									<option value="success" class="text-hover-{{ primary_color() }} badge badge-circle badge-success">Success
									</option>
									<option value="info" class="text-hover-{{ primary_color() }} badge badge-circle badge-info">Info</option>
									<option value="warning" class="text-hover-{{ primary_color() }} badge badge-circle badge-warning">Warning
									</option>
									<option value="danger" class="text-hover-{{ primary_color() }} badge badge-circle badge-danger">Danger
									</option>
									<option value="dark" class="text-hover-{{ primary_color() }} badge badge-circle badge-dark">Dark</option>
								</select>
							</div>
						</div>
					</div>
					<div class="p-lg-8 mb-10 rounded border border-dashed border-white-300 p-6">
						<div class="form-group">
							<div class="btn-group" role="group" aria-label="Basic example">
								<button wire:click.prevent="$set('commandRun','optimize:clear')" type="button"
									class="btn btn-primary">Optimize</button>
								<button wire:click.prevent="$set('commandRun','storage:link')" type="button"
									class="btn btn-info">Storage</button>
								<button wire:click.prevent="$set('commandRun','backup:run')" type="button"
									class="btn btn-success">Backup</button>
								<button wire:click.prevent="$set('commandRun','backup:clean')" type="button" class="btn btn-dark">
									Clean</button>

							</div>
						</div>
						<div class="separator separator-dashed mt-8 mb-5"></div>
						<div class="form-group">
							<div class="btn-group" role="group" aria-label="Basic example">
								<button wire:click.prevent="$set('commandRun','migrate')" {!! confirm() !!} type="button"
									class="btn btn-warning">Migration</button>
								<button wire:click.prevent="$set('commandRun','migrate:rollback --step=1')" {!! confirm() !!}
									type="button" class="btn btn-dark">Rollback</button>
								<button wire:click.prevent="$set('commandRun','migrate:fresh --seed')" {!! confirm() !!} type="button"
									class="btn btn-primary">Fresh-s</button>
								<button wire:click.prevent="$set('commandRun','migrate:reset')" {!! confirm() !!} type="button"
									class="btn btn-danger">Reset</button>

							</div>
						</div>
						<div class="separator separator-dashed mt-8 mb-5"></div>
						<div class="form-group">
							<div class="btn-group" role="group" aria-label="Basic example">
								<button wire:click.prevent="$set('commandRun','up')" {!! confirm() !!} type="button"
									class="btn btn-success">Up</button>
								<button wire:click.prevent="$set('commandRun','down --secret=aftabb')" {!! confirm() !!} type="button"
									class="btn btn-danger">Down</button>
								<button wire:click.prevent="$set('commandRun','key:generate')" {!! confirm() !!} type="button"
									class="btn btn-dark">Key</button>
								<button wire:click.prevent="$set('commandRun','cache:clear')" {!! confirm() !!} type="button"
									class="btn btn-light">Cache</button>
								<button wire:click.prevent="$set('commandRun','view:clear')" {!! confirm() !!} type="button"
									class="btn btn-primary">Views</button>
							</div>
						</div>
					</div>
				</div>
				<!--end::Content-->
			</div>
			<!--end::Body-->
		</div>
	@endif
	<!--end::Card-->
</div>
