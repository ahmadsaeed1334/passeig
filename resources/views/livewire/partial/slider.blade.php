<div wire:ignore class="d-flex justify-center">
	@auth
		<div>
			<span class="bullet bullet-dot bg-dark me-2 h-6px w-6px"></span>
		</div>
	@endauth

	<div class="slider-container flicker">
		<div class="slider">
			{{-- @dd($slides) --}}
			@auth
				@php
					$current_time = \Carbon\Carbon::now();
					$user = auth()->user();
					
				@endphp
				@if ($current_time->hour >= 5 && $current_time->hour < 12)
					<div class="slick-slide">
						<span class="fw-bold text-{{ primary_color() }} mb-5">Hi {{ $user->name }}</span>
						<span class="txet-dark mb-5">
							Good morning!
						</span>
					</div>
				@elseif ($current_time->hour >= 12 && $current_time->hour < 18)
					<div class="slick-slide">
						<span class="fw-bold text-{{ primary_color() }} mb-5">Hi {{ $user->name }}</span>
						<span class="txet-dark mb-5">
							Good afternoon!
						</span>
					</div>
				@else
					<div class="slick-slide">
						<span class="fw-bold text-{{ primary_color() }} mb-5">Hi {{ $user->name }}</span>
						<span class="txet-dark mb-5">
							Good evening!
						</span>
					</div>
				@endif
			@endauth
			@foreach ($slides as $index => $slide)
				@auth
					@php
						$slide['title'] = str_replace('$id', $user->id, $slide['title']);
						$slide['title'] = str_replace('$name', $user->name, $slide['title']);
						
						$slide['message'] = str_replace('$id', $user->id, $slide['message']);
						$slide['message'] = str_replace('$name', $user->name, $slide['message']);
						
						$slide['function'] = str_replace('$id', $user->id, $slide['function']);
						$slide['function'] = str_replace('$name', $user->name, $slide['function']);
					@endphp
				@endauth
				@php
					$slide['title'] = str_replace('$app_name', env('APP_NAME'), $slide['title']);
					$slide['message'] = str_replace('$app_name', env('APP_NAME'), $slide['message']);
				@endphp
				{{-- @if ($slide['user_id'] == 0 || ($slide['user_id'] && $slide['user_id'] == auth()->id())) --}}
				{{-- @dd($slides) --}}

				<div
					@if ($slide['isModal'] == 'true') wire:click.prevent="{{ $slide['function'] }}" data-bs-toggle="modal" data-bs-target="#{{ $slide['modal'] }}"
                    @else
                    wire:click.prevent="{{ $slide['function'] }}" @endif
					class="{{ $slide['function'] ? 'pointer' : '' }} slick-slide">
					<span class="fw-bold text-{{ $slide['color'] }} mb-5">{{ $slide['title'] }}</span>
					<span class="txet-dark mb-5">
						{{ $slide['message'] }}
					</span>
				</div>
				{{-- @endif --}}
			@endforeach
			@auth
				@if (Hash::check(general('default_password'), $user->password) && $user->user_type <= 1)
					<div
						@if (!$isModal) wire:click.prevent="userPassword('{{ $user->id }}')" data-bs-toggle="modal" data-bs-target="#userProfileModel"
                    @else
                    wire:click.prevent="$set('tab','password')" @endif
						class="pointer slick-slide">
						<span class="fw-bold text-danger mb-5">Warning:</span>
						<span class="txet-dark mb-5">Please update your password to meet our security requirements.
						</span>
					</div>
				@endif
			@endauth
		</div>
	</div>
</div>
