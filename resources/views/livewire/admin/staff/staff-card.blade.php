<div class="card card-flush">
	<!--begin::Card header-->
	<div class="card-header mt-6">
		<!--begin::Card title-->
		<div class="card-title">
			<!--begin::Search-->
			<div class="d-flex align-items-center position-relative me-5 my-1">
				<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
				<span class="svg-icon svg-icon-1 position-absolute ms-6 text-{{ primary_color() }}">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
							transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
						<path
							d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
							fill="currentColor" />
					</svg>
				</span>
				<!--end::Svg Icon-->
				<input wire:model.debounce.500ms="search" type="text" data-kt-Users-table-filter="search"
					class="form-control form-control-solid w-250px ps-15 text-{{ primary_color() }} fst-italic"
					placeholder="Search {{ Str::singular($page_title) }} by id or name" />
			</div>
			<!--end::Search-->
		</div>
		<!--end::Card title-->
		@can('super staff create')
			<!--begin::Card toolbar-->
			<div class="card-toolbar">
				<!--begin::Button-->
				<button wire:click="$set('isOpen','true')" type="button" class="btn btn-light-{{ primary_color() }}"
					data-bs-toggle="modal" data-bs-target="#addStaffModal">
					<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
					<span class="svg-icon svg-icon-3">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
								fill="currentColor" />
							<rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
								transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
							<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon-->Add {{ $page_title }}
				</button>
				<!--end::Button-->
			</div>
			<!--end::Card toolbar-->
		@endcan
	</div>
	<!--end::Card header-->
	<!--begin::Card body-->
	<div class="card-body scroll-x pt-0">
		<!--begin::Table-->
		<table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_Users_table">
			<!--begin::Table head-->
			<thead>
				<!--begin::Table row-->
				<tr class="fw-bold fs-7 text-uppercase gs-0 text-{{ primary_color() }} text-start">
					<th class="min-w-2px">S#</th>
					<th class="min-w-250px">{{ Str::singular($page_title) }}</th>
					<th class="min-w-125px">Role</th>
					<th class="min-w-200px">Last Login</th>
					<th class="min-w-250px">Dates</th>
					{{-- <th class="min-w-200px">Created Date</th> --}}
					<th class="min-w-125px">Status</th>
					<th class="min-w-100px text-end">Actions</th>
				</tr>
				<!--end::Table row-->
			</thead>
			<!--end::Table head-->
			<!--begin::Table body-->
			<tbody class="fw-semibold text-gray-600">
				@forelse ($users as $index => $user)
					<tr>
						<td class="text-{{ primary_color() }}">
							<span class="text-{{ primary_color() }} font-weight-bolder fs-1 fst-italic fw-bold pointer mb-1">
								{{ $users->firstItem() + $index }}
							</span>
						</td>
						<!--begin::Name=-->
						<td class="">
							<div class="d-flex align-items-center">
								<div class="symbol symbol-50 overlay symbol-50px me-3">
									<img src="{{ user_avatar($user) }}" alt="image">
									@if ($user->isOnline())
										<div class="symbol-badge bg-success start-100 top-100 h-8px w-8px mt-n2 border-4"></div>
									@endif
									@if ($user->profile_photo_path)
										<div class="overlay-layer bg-dark bg-opacity-0">
											<a href="{{ $user->profile_photo_url }}" target="_blank" class="btn btn-shadow border"><i
													class="fa-solid fa-eye fs-1 fw-bold fw-bolder text-{{ primary_color() }}" {!! show_toltip('View Avatar') !!}></i></a>
										</div>
									@endif
								</div>
								<div class="d-flex flex-column">
									<span wire:click="userProfile('{{ $user->id }}')" data-bs-toggle="modal"
										data-bs-target="#userProfileModel"
										class="text-dark font-weight-bolder text-hover-{{ primary_color() }} fs-2 fw-bold pointer mb-1"
										{!! show_toltip('View Details') !!}>
										{{ Str::title($user->name) }}
										<span class="menu-title position-relative" {!! show_toltip('Language: ' . getLanguageName($user->lang)) !!}>
											<img class="w-15px h-15px rounded-1 ms-2" src="{{ getLanguageFlag($user->lang ?: 'en') }}" alt="" />
										</span>
										@if (Hash::check(general('default_password'), $user->password))
											<i class="fa-solid fa-bug text-danger me-1" {!! show_toltip('Week Password') !!}></i>
										@endif
										{{-- @if (profile_complete($user) != 100)
											<i class="fa-sharp fa-solid fa-circle-info text-danger" {!! show_toltip('profile Incomplete') !!}></i>
										@endif
										@if (profile_complete($user) == 100 && !Hash::check(general('default_password'), $user->password))
											<i class="fa-solid fa-shield-halved text-success" {!! show_toltip('Verified') !!}></i>
										@endif --}}
									</span>
									<span class="text-muted font-weight-bold d-block">{{ $user->email }}</span>
								</div>
							</div>
						</td>
						<!--end::Name=-->
						<td>
							<span
								@if (Str::between($user->getRoleNames(), '["', '"]') != '[]') wire:click.prevent="$dispatch('RoleID', '{{ Str::between($user->getRoleNames(), '["', '"]') }}')" data-bs-toggle="modal" data-bs-target="#roleDetailsModel" @endif
								class="badge badge-{{ Str::between($user->getRoleNames(), '["', '"]') == '[]' ? primary_color() : primary_color() . ' pointer' }}"
								{!! show_toltip('View Role Details') !!}>
								{{ Str::between($user->getRoleNames(), '["', '"]') == '[]' ? 'No Role Found' : Str::between($user->getRoleNames(), '["', '"]') }}
							</span>
						</td>

						<td>
							@if ($user->last_seen == null)
								<span class="text-muted font-weight-bold d-block">Never Loged-in</span>
							@else
								<span class="text-dark font-weight-bolder font-size-lg mb-1">
									{{ diff_for_humans_long($user->last_seen) }}
								</span>
								<span class="text-muted font-weight-bold d-block">{{ custom_datetime_format($user->last_seen) }}</span>
							@endif
						</td>
						<td>
							<span class="text-dark font-weight-bolder font-size-lg mb-1">
								Updated: {{ diff_for_humans_long($user->updated_at) }}
							</span>
							<span class="text-muted font-weight-bolder d-block font-size-lg mb-1">
								Created: {{ diff_for_humans_long($user->created_at) }}
							</span>
						</td>
						{{-- <td>
							<span class="text-dark font-weight-bolder font-size-lg mb-1">
								{{ diff_for_humans_long($user->created_at) }}
							</span>
							<span class="text-muted font-weight-bold d-block">{{ custom_date_format($user->created_at) }}</span>
						</td> --}}
						<td>
							@if ($user->status == 1)
								<!--begin::Underline-->
								<span wire:click.prevent="activeInactive('{{ $user->id }}','0')" class="d-flex position-relative pointer"
									{!! show_toltip('Change Status') !!}>
									<!--begin::Label-->
									<span class="d-inline-block fs-2 fw-bold text-dark mb-2">
										Active
									</span>
									<!--end::Label-->

									<!--begin::Line-->
									<span
										class="d-inline-block position-absolute h-8px end-0 start-0 bg-success translate bottom-0 rounded"></span>
									<!--end::Line-->
								</span>
								<!--end::Underline-->
							@else
								<!--begin::Underline-->
								<span wire:click.prevent="activeInactive('{{ $user->id }}','1')" class="d-flex position-relative pointer"
									{!! show_toltip('Change Status') !!}>
									<!--begin::Label-->
									<span class="d-inline-block fs-2 fw-bold text-dark mb-2">
										Inactive
									</span>
									<!--end::Label-->

									<!--begin::Line-->
									<span
										class="d-inline-block position-absolute h-8px end-0 start-0 bg-danger translate bottom-0 rounded"></span>
									<!--end::Line-->
								</span>
								<!--end::Underline-->
							@endif
						</td>

						<td class="text-center">
							@can('super staff edit')
								{{-- <button wire:click="profile('{{ $user->id }}')" data-bs-toggle="modal" data-bs-target="#profileModal"
									class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" {!! show_toltip('Profile Data') !!}>
									<span class="svg-icon svg-icon-md svg-icon-primary">
										<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Communication/Adress-book2.svg--><svg
											xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
											height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path
													d="M18,2 L20,2 C21.6568542,2 23,3.34314575 23,5 L23,19 C23,20.6568542 21.6568542,22 20,22 L18,22 L18,2 Z"
													fill="currentColor" opacity="0.3" />
												<path
													d="M5,2 L17,2 C18.6568542,2 20,3.34314575 20,5 L20,19 C20,20.6568542 18.6568542,22 17,22 L5,22 C4.44771525,22 4,21.5522847 4,21 L4,3 C4,2.44771525 4.44771525,2 5,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z"
													fill="currentColor" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</button> --}}

								<button wire:click="edit('{{ $user->id }}')" data-bs-toggle="modal" data-bs-target="#addStaffModal"
									class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" {!! show_toltip('Update Data') !!}>
									<span class="svg-icon svg-icon-md svg-icon-primary">
										<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Design\Edit.svg--><svg
											xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
											height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path
													d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
													fill="currentColor" fill-rule="nonzero"
													transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) " />
												<rect fill="currentColor" opacity="0.3" x="5" y="20" width="15" height="2"
													rx="1" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</button>
								<button wire:click="$set('user_id','{{ $user->id }}')" data-bs-toggle="modal"
									data-bs-target="#usersModal"
									class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" {!! show_toltip('Change Password') !!}>
									<span class="svg-icon svg-icon-md svg-icon-primary">
										<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Home/Key.svg--><svg
											xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
											height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<polygon fill="currentColor" opacity="0.3"
													transform="translate(8.885842, 16.114158) rotate(-315.000000) translate(-8.885842, -16.114158) "
													points="6.89784488 10.6187476 6.76452164 19.4882481 8.88584198 21.6095684 11.0071623 19.4882481 9.59294876 18.0740345 10.9659914 16.7009919 9.55177787 15.2867783 11.0071623 13.8313939 10.8837471 10.6187476" />
												<path
													d="M15.9852814,14.9852814 C12.6715729,14.9852814 9.98528137,12.2989899 9.98528137,8.98528137 C9.98528137,5.67157288 12.6715729,2.98528137 15.9852814,2.98528137 C19.2989899,2.98528137 21.9852814,5.67157288 21.9852814,8.98528137 C21.9852814,12.2989899 19.2989899,14.9852814 15.9852814,14.9852814 Z M16.1776695,9.07106781 C17.0060967,9.07106781 17.6776695,8.39949494 17.6776695,7.57106781 C17.6776695,6.74264069 17.0060967,6.07106781 16.1776695,6.07106781 C15.3492424,6.07106781 14.6776695,6.74264069 14.6776695,7.57106781 C14.6776695,8.39949494 15.3492424,9.07106781 16.1776695,9.07106781 Z"
													fill="currentColor"
													transform="translate(15.985281, 8.985281) rotate(-315.000000) translate(-15.985281, -8.985281) " />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</button>
							@endcan
							<br>
							@can('super staff delete')
								<!--begin::Update-->
								<a wire:click.prevent="delete('{{ $user->id }}')" {!! confirm() !!} href="#"
									class="btn btn-sm btn-icon btn-light btn-active-light-{{ primary_color() }} mt-2" data-bs-toggle="tooltip"
									data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="Delete Employee">
									<i class="fa-solid fa-trash fs-6 fw-bold fw-bolder"></i>
								</a>
								<!--end::Update-->
							@endcan
							@if (auth()->user()->user_type == -1)
								<a href="{{ route('impersonate', $user->id) }}"
									class="btn btn-icon btn-light btn-hover-primary btn-active-light-{{ primary_color() }} btn-sm mt-2 mr-3">
									<span class="svg-icon svg-icon-md svg-icon-danger">
										<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Map/Direction2.svg--><svg
											xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
											height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path
													d="M14,13.381038 L14,3.47213595 L7.99460483,15.4829263 L14,13.381038 Z M4.88230018,17.2353996 L13.2844582,0.431083506 C13.4820496,0.0359007077 13.9625881,-0.12427877 14.3577709,0.0733126292 C14.5125928,0.15072359 14.6381308,0.276261584 14.7155418,0.431083506 L23.1176998,17.2353996 C23.3152912,17.6305824 23.1551117,18.1111209 22.7599289,18.3087123 C22.5664522,18.4054506 22.3420471,18.4197165 22.1378777,18.3482572 L14,15.5 L5.86212227,18.3482572 C5.44509941,18.4942152 4.98871325,18.2744737 4.84275525,17.8574509 C4.77129597,17.6532815 4.78556182,17.4288764 4.88230018,17.2353996 Z"
													fill="currentColor" fill-rule="nonzero"
													transform="translate(14.000087, 9.191034) rotate(-315.000000) translate(-14.000087, -9.191034) " />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</a>
							@endif
						</td>
						<!--end::Action=-->
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
