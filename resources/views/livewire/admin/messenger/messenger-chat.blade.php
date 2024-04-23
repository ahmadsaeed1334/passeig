<div wire:ignore.self class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
	<!--begin::Messenger-->
	<div class="card" id="kt_chat_messenger">
		<!--begin::Card header-->
		<div class="card-header" id="kt_chat_messenger_header">
			<!--begin::Title-->
			<div class="card-title">
				<!--begin::User-->
				@if ($currentThread->participants_count < 3)
					<div class="d-flex justify-content-center flex-column me-3">
						<a href="#"
							class="fs-4 fw-bold text-hover-primary lh-1 mb-2 me-1 text-gray-900">{{ $currentThread->sender_name }}</a>
						<!--begin::Info-->
						@if ($currentThread->participant_is_online)
							<div class="lh-1 mb-0">
								<span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
								<span class="fs-7 fw-semibold text-muted">Online</span>
							</div>
						@else
							<div class="lh-1 mb-0">
								<span class="badge badge-danger badge-circle w-10px h-10px me-1"></span>
								<span class="fs-7 fw-semibold text-muted">offline</span>
							</div>
						@endif
						<!--end::Info-->
					</div>
				@else
					<div class="symbol-group symbol-hover">
						<!--begin::Avatar-->
						@foreach ($currentThread->participants as $participant)
							<div class="symbol symbol-35px symbol-circle" {!! show_toltip($participant->participant_name) !!}>
								<img alt="Pic" src="{{ name_avatar($participant->participant_name) }}" />
								@if ($participant->participant_is_online)
									<div class="symbol-badge bg-success start-100 top-100 h-8px w-8px ms-n2 mt-n2 border-4"></div>
								@endif
							</div>
						@endforeach

						<!--end::Avatar-->
					</div>
				@endif
				<!--end::User-->
			</div>
			<!--end::Title-->
			<!--begin::Card toolbar-->
			<div class="card-toolbar">
				<button wire:click.prevent="$set('isView',true)" data-bs-toggle="modal" data-bs-target="#viewMembersModal"
					{!! show_toltip('View Memebrs') !!} class="btn btn-sm btn-icon btn-active-light-{{ primary_color() }}"
					data-kt-menu-placement="bottom-end">
					<i class="fa-solid fa-users fs-5"></i>
				</button>
				@if ($currentThread->creator()->id == $user->id)
					<button data-bs-toggle="modal" data-bs-target="#addContactModal" {!! show_toltip('Add New Memebr') !!}
						class="btn btn-sm btn-icon btn-active-light-{{ primary_color() }}" data-kt-menu-placement="bottom-end">
						<i class="fa-solid fa-user-plus fs-5"></i>
					</button>
					<button wire:click.prevent="forceDeleteConversation('{{ $currentThread->id }}')" {!! show_toltip('Delete conversation') !!}
						{!! confirm() !!} class="btn btn-sm btn-icon btn-active-light-{{ primary_color() }}"
						data-kt-menu-placement="bottom-end">
						<i class="fa-solid fa-trash fs-5">
						</i>
					</button>
				@endif
				<button wire:click.prevent="closeChat" {!! show_toltip('Close conversation') !!}
					class="btn btn-sm btn-icon btn-active-light-{{ primary_color() }}" data-kt-menu-placement="bottom-end">
					<i class="ki-duotone ki-cross fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</button>
				<!--begin::Menu-->
				{{-- <div class="me-n3">
					<button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click"
						data-kt-menu-placement="bottom-end">
						<i class="ki-duotone ki-dots-square fs-2">
							<span class="path1"></span>
							<span class="path2"></span>
							<span class="path3"></span>
							<span class="path4"></span>
						</i>
					</button>
					<!--begin::Menu 3-->
					<div
						class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
						data-kt-menu="true">
						<!--begin::Heading-->
						<div class="menu-item px-3">
							<div class="menu-content text-muted fs-7 text-uppercase px-3 pb-2">Contacts</div>
						</div>
						<!--end::Heading-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add
								Contact</a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal"
								data-bs-target="#kt_modal_invite_friends">Invite Contacts
								<span class="ms-2" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation">
									<i class="ki-duotone ki-information fs-7">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
									</i>
								</span></a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
							<a href="#" class="menu-link px-3">
								<span class="menu-title">Groups</span>
								<span class="menu-arrow"></span>
							</a>
							<!--begin::Menu sub-->
							<div class="menu-sub menu-sub-dropdown w-175px py-4">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Create Group</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Invite
										Members</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu sub-->
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item my-1 px-3">
							<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
						</div>
						<!--end::Menu item-->
					</div>
					<!--end::Menu 3-->
				</div> --}}
				<!--end::Menu-->
			</div>
			<!--end::Card toolbar-->
		</div>
		<!--end::Card header-->
		<!--begin::Card body-->
		<div class="card-body" id="kt_chat_messenger_body">
			<!--begin::Messages-->
			<div wire:ignore.self class="scroll me-n5 h-500px pe-5" id="commentDiv">
				@foreach ($currentThread->messages as $message)
					@if ($message->is)
						<div class="d-flex justify-content-center mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-center">
								<!--begin::Text-->
								<div class="bg-light-info text-dark fw-semibold mw-lg-400px rounded text-center" data-kt-element="message-text">
									{{ $message->body }}
								</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
					@elseif ($message->sender_name != auth()->user()->name)
						<!--begin::Message(in)-->
						<div class="d-flex justify-content-start mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-start">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="{{ name_avatar($message->sender_name) }}" />
										@if ($message->sender_is_online)
											<div class="symbol-badge bg-success start-100 top-100 h-8px w-8px ms-n2 mt-n2 border-4"></div>
										@endif
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-3">
										<a href="#"
											class="fs-5 fw-bold text-hover-{{ primary_color() }} me-1 text-gray-900">{{ $message->sender_name }}</a>
										<span
											class="badge badge-light fs-7 mb-1">{{ $currentThread->creator()->name == $message->sender_name ? 'admin' : '' }}</span>
										<span class="text-muted fs-7 d-block mb-1 ms-5">{{ $message->time }}</span>

										@if ($currentThread->creator()->name == auth()->user()->name)
											<span wire:click.prevent="deleteMessage('{{ $message->id }}')" class="text-danger pointer fs-7 mb-1 ms-2"
												{!! show_toltip('Delete Message') !!}>
												<i class="fa-solid fa-trash text-{{ primary_color() }}"></i></span>
											<span wire:click.prevent="removeContact('{{ $message->user_id }}')" {!! confirm() !!}
												{!! show_toltip('Kickout') !!} class="text-{{ primary_color() }} pointer fs-7 mb-1 ms-2">
												<i class="fa-solid fa-user-slash text-{{ primary_color() }}"></i></span>
										@endif
									</div>

									<!--end::Details-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="bg-light-info text-dark fw-semibold mw-lg-400px rounded p-5 text-start"
									data-kt-element="message-text">
									{{ $message->body }}
								</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(in)-->
					@else
						<!--begin::Message(out)-->
						<div class="d-flex justify-content-end mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column align-items-end">
								<!--begin::User-->
								<div class="d-flex align-items-center mb-2">
									<!--begin::Details-->
									<div class="me-3">
										<span wire:click.prevent="deleteMessage('{{ $message->id }}')" {!! show_toltip('Delete Message') !!}
											class="text-{{ primary_color() }} pointer fs-7 mb-1 me-2">
											<i class="fa-solid fa-trash text-{{ primary_color() }}"></i></span>
										<span class="text-muted fs-7 mb-1">{{ $message->time }}</span>
										<a href="#" class="fs-5 fw-bold text-hover-{{ primary_color() }} ms-1 text-gray-900">You</a>
									</div>
									<!--end::Details-->
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="{{ name_avatar($message->sender_name) }}" />
									</div>
									<!--end::Avatar-->
								</div>
								<!--end::User-->
								<!--begin::Text-->
								<div class="bg-light-primary text-dark fw-semibold mw-lg-400px rounded p-5 text-end"
									data-kt-element="message-text">
									{{ $message->body }}
								</div>
								<!--end::Text-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Message(out)-->
					@endif
				@endforeach
			</div>
			<!--end::Messages-->
		</div>
		<!--end::Card body-->
		<!--begin::Card footer-->
		<div class="card-footer pt-4" id="kt_chat_messenger_footer">
			<!--begin::Input-->
			<textarea wire:model="body" wire:keydown.enter="sendMessage('{{ $threadId }}')"
			 class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
			<!--end::Input-->
			<!--begin:Toolbar-->
			<div class="d-flex flex-stack">
				<!--begin::Actions-->
				<div class="d-flex align-items-center me-2">
					{{-- <button class="btn btn-sm btn-icon btn-active-light-{{ primary_color() }} me-1" type="button"
						data-bs-toggle="tooltip" title="Coming soon">
						<i class="ki-duotone ki-paper-clip fs-3"></i>
					</button>
					<button class="btn btn-sm btn-icon btn-active-light-{{ primary_color() }} me-1" type="button"
						data-bs-toggle="tooltip" title="Coming soon">
						<i class="ki-duotone ki-exit-up fs-3">
							<span class="path1"></span>
							<span class="path2"></span>
						</i>
					</button> --}}
				</div>
				<!--end::Actions-->
				<!--begin::Send-->
				<button wire:click.prevent="sendMessage('{{ $threadId }}')" class="btn btn-{{ primary_color() }}"
					type="button" data-kt-element="send">Send</button>
				<!--end::Send-->
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Card footer-->
	</div>
	<!--end::Messenger-->
</div>
