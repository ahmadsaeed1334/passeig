<div data-kt-search-element="suggestions">
	<!--begin::Heading-->
	<h3 class="fw-semibold mb-5">Searched for: {{ $search }}</h3>
	<!--end::Heading-->
	@forelse ($results as $result)
		<!--begin::Users-->
		<div class="mh-375px scroll-y me-n7 pe-7">
			<!--begin::User-->
			<a wire:click.prevent="addNewContact('{{ $result->id }}')" href="#"
				class="d-flex align-items-center bg-state-light bg-state-opacity-50 mb-1 rounded p-3">
				<!--begin::Avatar-->
				<div class="symbol symbol-35px symbol-circle me-5">
					<img alt="Pic" src="{{ user_avatar($result) }}" />
				</div>
				<!--end::Avatar-->
				<!--begin::Info-->
				<div class="fw-semibold">
					<span class="fs-6 me-2 text-gray-800">{{ $result->name }}</span>
					{{-- <span class="badge badge-light">Admin</span> --}}
					<span class="text-muted d-block">{{ $result->email }}</span>
				</div>
				<!--end::Info-->
				@if (in_array((string) $result->id, $this->newContacts))
					<div class="badge badge-circle badge-{{ primary_color() }}">
						<i class="fas fa-check text-muted"></i>
					</div>
				@endif
			</a>
			@error('newContacts.*')
				<div class="text-{{ primary_color() }}">{{ $message }}</div>
			@enderror
			<!--end::User-->
		</div>
		<!--end::Users-->
	@empty
		<div class="mh-375px scroll-y me-n7 pe-7">
			{!! no_data() !!}
		</div>
	@endforelse

</div>
