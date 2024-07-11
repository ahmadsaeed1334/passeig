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
                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <input wire:model.debounce.500ms="search" type="text" data-kt-permissions-table-filter="search" class="form-control form-control-solid w-250px ps-15 text-{{ primary_color() }} fst-italic" placeholder="Search Permissions" />
            </div>
            <!--end::Search-->
        </div>
        <!--end::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Button-->
            <button type="button" class="btn btn-light-{{ primary_color() }}" data-bs-toggle="modal" data-bs-target="#addPermissionsModel">
                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                <span class="svg-icon svg-icon-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->Add Permission
            </button>
            <!--end::Button-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body scroll-x pt-0">
        <!--begin::Table-->
        <table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_permissions_table">
            <!--begin::Table head-->
            <thead>
                <!--begin::Table row-->
                <tr class="fw-bold fs-7 text-uppercase gs-0 text-{{ primary_color() }} text-start">
                    <th class="min-w-2px">S#</th>
                    <th class="min-w-125px">Name</th>
                    <th class="min-w-250px">Assigned to</th>
                    <th class="min-w-125px">Created Date</th>
                    <th class="min-w-100px text-end">Actions</th>
                </tr>
                <!--end::Table row-->
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody class="fw-semibold text-gray-600">
                @forelse ($permissions as $index => $permission)
                <tr>
                    <td class="text-{{ primary_color() }} fst-italic">
                        {{ $permissions->firstItem() + $index }}
                    </td>
                    <!--begin::Name=-->
                    <td>
                        <span wire:click="$dispatch('PermissionID','{{ $permission->id }}')" {!! show_toltip('View Permission Details') !!} class="text-white font-weight-bolder text-hover-{{ primary_color() }} pointer mb-1">
                            {{ $permission->name }}
                        </span>

                    </td>
                    <!--end::Name=-->
                    <!--begin::Assigned to=-->
                    <td>
                        <span class="badge badge-{{ primary_color() }} fs-7 m-1">{{ $permission->roles->count() }}</span>
                        @forelse ($permission->roles as $role)
                        <span wire:click.prevent="$dispatch('RoleID', '{{ $role->id }}')" class="badge badge-light-{{ random_color() }} fs-7 pointer m-1" {!! show_toltip('View Role Details') !!}>{{ $role->name }}</span>
                        @empty
                        <span class="badge badge-light-{{ primary_color() }} fs-7 m-1">Not Assigned</span>
                        @endforelse
                    </td>
                    <!--end::Assigned to=-->
                    <!--begin::Created Date-->
                    <td class="text-white">{{ custom_datetime_format($permission->created_at) }}</td>
                    <!--end::Created Date-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <!--begin::Update-->
                        <button wire:click="edit('{{ $permission->id }}')" class="btn btn-icon btn-active-light-{{ primary_color() }} w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#addPermissionsModel">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="currentColor" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) " />
                                    <rect fill="currentColor" opacity="0.3" x="5" y="20" width="15" height="2" rx="1" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--end::Update-->

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
