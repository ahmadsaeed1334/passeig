<div wire:ignore.self class="modal fade" tabindex="-1" data-backdrop="static" id="permissionDetailsModal"
	aria-hidden="true">

	<div class="modal-dialog modal-xl modal-dialog-scrollable">
		<div class="modal-content bg-light">
			<div class="modal-header">
				<h5 wire:click.prevent="$dispatch('refreshPermission')" class="modal-title text-{{ primary_color() }} pointer"
					data-bs-toggle="tooltip" data-bs-placement="top" title="Click to refresh">
					{{ $permission ? Str::title($permission->name) : '' }}
				</h5>

				<!--begin::Close-->
				<div wire:click.prevent="$dispatch('reset')" class="btn btn-icon btn-sm btn-active-icon-{{ primary_color() }}"
					data-bs-dismiss="modal">
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
				<!--end::Close-->
			</div>

			<div class="modal-body">
				@if ($permission)
					<div class="d-flex flex-column flex-lg-row">
						<!--begin::Sidebar-->
						<div class="flex-column flex-lg-row-auto w-100 w-lg-200px w-xl-300px mb-10">
							<!--begin::Card-->
							<div class="card card-flush flex-row-fluid overflow-hidden py-4">
								<!--begin::Card header-->
								<div class="card-header">
									<!--begin::Card title-->
									<div class="card-title">
										<h2 class="mb-0">Roles</h2>
									</div>
									<!--end::Card title-->
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								<div class="card-body scroll pt-0">
									<!--begin::Permissions-->
									<div class="d-flex flex-column text-gray-600">
										@foreach ($permission->roles->pluck('name') as $row)
											<div class="d-flex align-items-center py-2">
												<span class="bullet bg-{{ primary_color() }} me-3"></span>
												{{ $row }}
											</div>
										@endforeach
									</div>
									<!--end::Permissions-->
								</div>
								<!--end::Card body-->
								<!--begin::Card footer-->
								{{-- <div class="card-footer pt-0">
									<button wire:click="edit('{{ $permission->id }}')" type="button" class="btn btn-light btn-active-primary"
										data-bs-toggle="modal" data-bs-target="#addRolesModel" data-bs-dismiss="modal">Edit Role</button>
								</div> --}}
								<!--end::Card footer-->
							</div>
							<!--end::Card-->
							<!--begin::Modal-->
							<!--end::Modal-->
						</div>
						<!--end::Sidebar-->
						<!--begin::Content-->
						<div class="flex-lg-row-fluid ms-lg-10">
							<!--begin::Card-->
							<div class="card card-flush mb-xl-9 mb-6">
								<!--begin::Card header-->
								<div class="card-header pt-5">
									<!--begin::Card title-->
									<div class="card-title">
										<h2 class="d-flex align-items-center">Users Assigned
											<span class="fs-6 ms-1 text-gray-600"> ({{ $users->count() }})</span>
										</h2>
									</div>
									<!--end::Card title-->
									<!--begin::Card toolbar-->
									<div class="card-toolbar">
										<!--begin::Search-->
										<div class="d-flex align-items-center position-relative my-1" data-kt-view-roles-table-toolbar="base">
											{{-- <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
											<span class="svg-icon svg-icon-1 position-absolute ms-6">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
														transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
													<path
														d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
														fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<input type="text" data-kt-roles-table-filter="search"
												class="form-control form-control-solid w-250px ps-15" placeholder="Search Users" /> --}}
										</div>
										<!--end::Search-->
									</div>
									<!--end::Card toolbar-->
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								<div class="card-body pt-0">
									<!--begin::Table-->
									<table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_roles_view_table">
										<!--begin::Table head-->
										<thead>
											<!--begin::Table row-->
											<tr class="text-muted fw-bold fs-7 text-uppercase gs-0 text-start">
												<th class="w-10px pe-2">
												</th>
												<th class="min-w-50px">ID</th>
												<th class="min-w-150px">User</th>
												<th class="min-w-125px">Joined Date</th>
											</tr>
											<!--end::Table row-->
										</thead>
										<!--end::Table head-->
										<!--begin::Table body-->
										<tbody class="fw-semibold text-gray-600">
											@forelse ($users as $user)
												<tr>
													<!--begin::Checkbox-->
													<td>
													</td>
													<!--end::Checkbox-->
													<!--begin::ID-->
													<td>{{ $loop->iteration }}</td>
													<!--begin::ID-->
													<!--begin::User=-->
													<td class="d-flex align-items-center">
														<!--begin:: Avatar -->
														<div class="symbol symbol-circle symbol-50px me-3 overflow-hidden">
															<span>
																<div class="symbol-label">
																	<img src="{{ $user->profile_photo_path ? $user->profile_photo_url : name_avatar($user->name) }}"
																		alt="{{ $user->name }}" class="w-100" />
																</div>
															</span>
														</div>
														<!--end::Avatar-->
														<!--begin::User details-->
														<div class="d-flex flex-column">
															<span class="text-hover-primary mb-1 text-gray-800">
																{{ $user->name }}
																<span class="text-muted" style="font-size: 11px">
																</span>

															</span>
														</div>
														<!--begin::User details-->
													</td>
													<!--end::user=-->
													<!--begin::Joined date=-->
													<td>{{ diff_for_humans_long($user->join_at) }}</td>
													<!--end::Joined date=-->
												</tr>
											@empty
												{!! no_data() !!}
											@endforelse

										</tbody>
										<!--end::Table body-->
									</table>
									<!--end::Table-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
						</div>
						<!--end::Content-->
					</div>
				@endif
			</div>

			<div class="modal-footer">
				<button wire:click.prevent="$dispatch('reset')" type="button" class="btn btn-{{ primary_color() }}"
					data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>

</div>
