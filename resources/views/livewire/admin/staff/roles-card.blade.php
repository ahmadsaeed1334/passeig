<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
	<!--begin::Add new card-->
	<div class="ol-md-4 pointer" data-bs-toggle="modal" data-bs-target="#addRolesModel">
		<!--begin::Card-->
		<div class="card h-md-100">
			<!--begin::Card body-->
			<div class="card-body d-flex flex-center">
				<!--begin::Button-->
				<button wire:click="$toggle('isAdd')" type="button" class="btn btn-clear d-flex flex-column flex-center"
					data-bs-toggle="modal" data-bs-target="#addRolesModel">
					<!--begin::Illustration-->
					<img src="{{ asset('assets/media/illustrations/sketchy-1/4.png') }}" alt="" class="mw-100 mh-150px mb-7" />
					<!--end::Illustration-->
					<!--begin::Label-->
					<div class="fw-bold fs-3 text-hover-{{ primary_color() }} text-dark">Add New Role

					</div>
					<!--end::Label-->
				</button>
				<!--begin::Button-->
			</div>
			<!--begin::Card body-->
		</div>
		<!--begin::Card-->
	</div>
	<!--begin::Add new card-->
	@foreach ($roles as $role)
		<!--begin::Col-->
		<div class="col-md-4">
			<!--begin::Card-->
			<div class="card card-flush h-md-100">
				<!--begin::Card header-->
				<div class="card-header">
					<!--begin::Card title-->
					<div class="card-title">
						<h2>{{ $role->name }}</h2>
					</div>
					<!--end::Card title-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body pt-1">
					<!--begin::Users-->
					<div class="fw-bold mb-5 text-gray-600">Total users with this role: <span class="text-{{ primary_color() }}">
							{{ $role->users_count }} </span> </div>
					<!--end::Users-->
					<!--begin::Permissions-->
					<div class="d-flex flex-column text-gray-600">
						@php
							$counter = 1;
						@endphp
						@foreach ($role->permissions as $row)
							@if ($loop->iteration <= 5)
								<div wire:click="$dispatch('PermissionID','{{ $row->id }}')" class="d-flex align-items-center pointer py-2"
									{!! show_toltip('View Detail') !!}>
									<span class="bullet bg-{{ primary_color() }} me-3"></span>{{ $row->name }}
								</div>
							@elseif($loop->last)
								<div class='d-flex align-items-center py-2'>
									<span class='bullet bg-{{ primary_color() }} me-3'></span>
									<em>and {{ $counter++ }} more...</em>
								</div>
							@elseif($loop->count > 5)
								@php
									$counter++;
								@endphp
							@endif
						@endforeach

					</div>
					<!--end::Permissions-->
				</div>
				<!--end::Card body-->
				<!--begin::Card footer-->
				<div class="card-footer flex-wrap pt-0">
					<button wire:click="detail('{{ $role->id }}')" type="button"
						class="btn btn-light btn-active-light-{{ primary_color() }} my-1" data-bs-toggle="modal"
						data-bs-target="#roleDetailsModel" {!! show_toltip('View Role') !!}>View
						Role</button>
					<button wire:click="edit('{{ $role->id }}')" type="button"
						class="btn btn-light btn-active-light-{{ primary_color() }} my-1" data-bs-toggle="modal"
						data-bs-target="#addRolesModel" {!! show_toltip('Update Role') !!}>Edit
						Role</button>
				</div>
				<!--end::Card footer-->
			</div>
			<!--end::Card-->

		</div>
		<!--end::Col-->
	@endforeach
	
</div>
