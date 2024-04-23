<div class="flex-column flex-lg-row-auto w-100 w-lg-300px w-xl-400px mb-lg-0 mb-10">
	<!--begin::Contacts-->
	<div class="card card-flush">
		<!--begin::Card header-->
		<div class="card-header pt-7" id="kt_chat_contacts_header">
			<!--begin::Form-->
			<form class="w-100 position-relative" autocomplete="off">
				<!--begin::Icon-->
				<i class="ki-duotone ki-magnifier fs-3 position-absolute top-50 ms-5 translate-middle-y text-gray-500">
					<span class="path1"></span>
					<span class="path2"></span>
				</i>
				<!--end::Icon-->
				<!--begin::Input-->
				<input wire:model.500ms="searchUser" type="text" class="form-control form-control-solid px-13" name="search"
					value="" placeholder="Search by id, name or email..." />
				<!--end::Input-->
			</form>
			<!--end::Form-->
		</div>
		<!--end::Card header-->
		<!--begin::Card body-->
		<div class="card-body pt-5" id="kt_chat_contacts_body">
			<!--begin::List-->
			<div wire:poll.visible.30000ms class="scroll-y me-n5 pe-5 h-500px">
				@foreach ($threads as $thread)
					<!--begin::User-->
					<div wire:click.prevent="$set('threadId','{{ $thread->id }}')" {!! show_toltip($thread->last_message->body) !!}
						class="d-flex flex-stack pointer {{ $thread->id == $threadId ? 'bg-light' : '' }} bg-hover-light mb-1 rounded py-4">
						<!--begin::Details-->
						<div class="d-flex align-items-center ms-3">
							<!--begin::Avatar-->
							<div class="symbol symbol-45px symbol-circle">
								<img alt="Pic" src="{{ name_avatar($thread->participant_name) }}" />
								@if ($thread->participant_is_online)
									<div class="symbol-badge bg-success start-100 top-100 h-8px w-8px ms-n2 mt-n2 border-4"></div>
								@endif
							</div>
							<!--end::Avatar-->
							<!--begin::Details-->
							<div class="ms-5">
								<a href="#"
									class="fs-6 fw-bold mb-2 text-gray-900">{{ $thread->participants_count > 2 ? $thread->subject : $thread->participant_name }}</a>
								{{-- <div class="fw-semibold text-muted">{{ $thread->messages->last()->user->name }}</div> --}}
								<div class="fw-semibold text-muted">
									{{ $thread->last_message->user->name == $user->name ? 'You: ' : ($thread->participants_count > 2 ? $thread->last_message->user->name . ': ' : '') }}
									{{ Str::limit($thread->last_message->body, 15) }}</div>
							</div>
							<!--end::Details-->
						</div>
						<!--end::Details-->
						<!--begin::Lat seen-->
						<div class="d-flex flex-column align-items-end ms-2 me-3">
							<span class="text-muted fs-7 mb-1">{{ diff_for_humans($thread->updated_at) }}</span>
							@if ($thread->unread_messages_count)
								<span
									class="badge badge-sm badge-circle badge-light-{{ primary_color() }}">{{ $thread->unread_messages_count }}</span>
							@endif
						</div>
						<!--end::Lat seen-->
					</div>
					<!--end::User-->
					<!--begin::Separator-->
					<div class="separator separator-dashed d-none"></div>
					<!--end::Separator-->
				@endforeach

			</div>

			<!--end::List-->
		</div>
		<!--end::Card body-->
	</div>
	<!--end::Contacts-->
</div>
