<!--begin::Heading-->
<div class="mb-13 text-center">
	<!--begin::Title-->
	<h1 wire:click.prevent="$dispatch('reload')" class="pointer text-{{ primary_color() }} mb-3">
		{{ $currentThread->subject }}</h1>
	<!--end::Title-->
	<!--begin::Description-->
	<div class="text-muted fw-semibold fs-5">
		{{ $currentThread->description }}
	</div>
	<!--end::Description-->
</div>
<!--end::Heading-->
<!--begin::Users-->
<div class="mb-15">
	<!--begin::List-->
	<div class="mh-375px scroll-y me-n7 pe-7">
		<!--begin::User-->
		@foreach ($currentThread->participants as $participant)
			<div class="d-flex flex-stack border-bottom border-bottom-dashed border-gray-300 py-5">
				<!--begin::Details-->
				<div class="d-flex align-items-center">
					<!--begin::Avatar-->
					<div class="symbol symbol-35px symbol-circle">
						<img alt="Pic" src="{{ name_avatar($participant->participant_name) }}" />
					</div>
					<!--end::Avatar-->
					<!--begin::Details-->
					<div class="ms-6">
						<!--begin::Name-->
						<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-{{ primary_color() }}">
							{{ $participant->participant_name }}
							@if ($currentThread->creator()->id == $participant->participant_id)
								<span class="badge badge-light fs-8 fw-semibold ms-2">admin</span>
							@endif
						</a>
						<!--end::Name-->
						<!--begin::Email-->
						<div class="fw-semibold text-muted">{{ $participant->participant_email }}</div>
						<!--end::Email-->
					</div>
					<!--end::Details-->
				</div>
				<!--end::Details-->
				<!--begin::Stats-->
				<div class="d-flex">
					<!--begin::Sales-->
					<div class="text-end">

						@if ($currentThread->creator()->id != $participant->participant_id && $currentThread->creator()->id == $user->id)
							<span wire:click.prevent="removeContact('{{ $participant->participant_id }}')" {!! confirm() !!}
								{!! show_toltip('Kickout') !!} class="text-{{ primary_color() }} pointer fs-7 ms-2 mb-1">
								<i class="fa-solid fa-user-slash text-{{ primary_color() }}"></i></span>
						@endif
					</div>
					<!--end::Sales-->
				</div>
				<!--end::Stats-->
			</div>
		@endforeach

		<!--end::User-->
	</div>
	<!--end::List-->
</div>
<!--end::Users-->
