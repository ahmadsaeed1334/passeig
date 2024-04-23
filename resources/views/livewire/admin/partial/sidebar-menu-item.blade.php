<div class="menu-item">
	<!--begin:Menu link-->
	<a class="menu-link  {{ $route_name == $route ? 'active' : '' }}" wire:navigate href="{{ route($route) }}" >

	{{-- <a class="menu-link badge-light-primary {{ $route_name == $route ? 'active' : '' }}" wire:navigate href="{{ route($route) }}" > --}}
	{{-- <a class="menu-link badge-light-primary {{ $route_name == $route ? 'active' : '' }}" href="{{ route($route) }}" wire:navigate > --}}
		@if ($icon ?? null)
			<span class="menu-icon">
				<i class="{{ $icon }} fs-5 fw-bold"></i>
			</span>
		@else
			<span class="menu-bullet">
				<span class="bullet bullet-dot"></span>
			</span>
		@endif
		<span class="menu-title" >{{ __($name) }}</span>
		@if ($counter ?? null)
			<span class="badge badge-{{ setting('general_settings.primary_color') }}">
				{{ $counter ?? null }}
			</span>
		@endif
	</a>
	<!--end:Menu link-->
</div>
