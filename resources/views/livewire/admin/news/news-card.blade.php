<div class="card card-flush">
	<!--begin::Card header-->
	@if (auth()->user()->user_type == -1)
		<div class="card-header mt-6">
			<!--begin::Card title-->
			<div class="card-title">
			</div>
			<!--end::Card title-->
			<!--begin::Card toolbar-->
			<div class="card-toolbar">
				<!--begin::Button-->

				<button type="button" class="btn btn-light-{{ setting('general_settings.primary_color') }}" data-bs-toggle="modal"
					data-bs-target="#addSlidesModel">
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
					<!--end::Svg Icon-->Add News
				</button>

				<!--end::Button-->
			</div>
			<!--end::Card toolbar-->
		</div>
	@endif
	<!--end::Card header-->
	<!--begin::Card body-->

	<div class="card-body scroll-x pt-0">
		<!--begin::Table-->
		<table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_positions_table">
			<!--begin::Table head-->
			<thead>
				<!--begin::Table row-->
				<tr class="fw-bold fs-7 text-uppercase gs-0 text-{{ setting('general_settings.primary_color') }} text-start">
					<th class="min-w-2px">S#</th>
					<th class="min-w-125px">Title</th>
					<th class="min-w-125px">Message</th>
					<th class="min-w-125px">Visibility</th>
					<th class="min-w-125px">Expire On</th>
					@if (auth()->user()->user_type == -1)
						<th class="min-w-125px">Data</th>
						<th class="min-w-100px text-end">Actions</th>
					@endif
				</tr>
				<!--end::Table row-->
			</thead>
			<!--end::Table head-->
			<!--begin::Table body-->
			<tbody class="fw-semibold text-gray-600">
				@forelse ($slides as $index => $slide)
					@php
						$user = auth()->user();
						$data = user('id', $slide['user_id']);
						if ($data) {
						    $userId = $slide['user_id'] ? $slide['user_id'] : $user->id;
						    $userName = $slide['user_id'] ? $data->name : $user->name;
						    $slide['title'] = str_replace('{{ $user->id }}', $userId, $slide['title']);
						    $slide['title'] = str_replace('{{ $user->name }}', $userName, $slide['title']);
						
						    $slide['message'] = str_replace('{{ $user->id }}', $userId, $slide['message']);
						    $slide['message'] = str_replace('{{ $user->name }}', $userName, $slide['message']);
						
						    $slide['function'] = str_replace('{{ $user->id }}', $userId, $slide['function']);
						    $slide['function'] = str_replace('{{ $user->name }}', $userName, $slide['function']);
						
						    $slide['title'] = str_replace('$app_name', env('APP_NAME'), $slide['title']);
						    $slide['message'] = str_replace('$app_name', env('APP_NAME'), $slide['message']);
						}
					@endphp
					<tr class="">
						<td class="text-{{ setting('general_settings.primary_color') }} fs-2 fst-italic">
							{{ $loop->iteration }}
						</td>
						<!--begin::Name=-->
						<td class="text-{{ $slide['color'] }} font-weight-bolder mb-1">
							{{ Str::title($slide['title']) }}
						</td>
						<!--end::Name=-->
						<td class="text-dark font-weight-bolder mb-1">
							{{ $slide['message'] }}
						</td>
						<td class="text-dark font-weight-bolder mb-1">
							@if ($slide['user_id'] == 0)
								Public
							@elseif($slide['user_id'] == auth()->id())
								Only For you
							@else
								@php
									$user = App\Models\User::whereId($slide['user_id'])->first();
								@endphp
								{{ $user ? $user->name : 'Login Page' }}
							@endif
						</td>
						<td class="text-dark font-weight-bolder mb-1">
							{{ diff_for_humans_long($slide['date']) }}
						</td>
						@if (auth()->user()->user_type == -1)
							<td class="text-dark font-weight-bolder mb-1">
								isModal: {{ $slide['isModal'] }}
								<span class="text-muted font-weight-bold d-block">Modal: {{ $slide['modal'] }}</span>
								<span class="text-muted font-weight-bold d-block">Function: {{ $slide['function'] }}</span>
							</td>
							<!--begin::Action=-->
							<td class="text-end">
								<!--begin::Update-->
								<button wire:click="edit('{{ $index }}')"
									class="btn btn-icon btn-active-light-{{ setting('general_settings.primary_color') }} w-30px h-30px me-2"
									data-bs-toggle="modal" data-bs-target="#addSlidesModel" {!! show_toltip('Update slide') !!}>
									<i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
								</button>
								<!--end::Update-->
								<!--begin::Update-->
								<a wire:click.prevent="delete('{{ $index }}')" {!! confirm() !!} href="#"
									class="btn btn-sm btn-icon btn-active-light-danger w-30px h-30px me-2" data-bs-toggle="tooltip"
									data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="Delete slide">
									<i class="fa-solid fa-trash fs-6 fw-bold fw-bolder"></i>
								
								</a>
								<!--end::Update-->
							</td>
						@endif
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
