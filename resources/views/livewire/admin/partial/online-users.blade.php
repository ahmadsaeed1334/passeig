<div class="card card-custom card-stretch gutter-b h-xl-100">
	<!--begin::Header-->
	<div class="card-header border-0 pt-5">
		<div class="card-title">
			<div class="card-label">
				<div wire:click.prevent="$dispatch('refreshPhoto')"
					class="font-weight-bolder text-{{ setting('general_settings.primary_color') }} pointer">Online Users
					{{-- ({{ $users->count() }}) --}}
				</div>
				<div class="font-size-sm text-muted mt-2">Online Users with location</div>
			</div>
		</div>
	</div>
	<!--end::Header-->
	<div wire:poll.30000ms.visible class="card-body scroll">
		
	</div>
</div>
