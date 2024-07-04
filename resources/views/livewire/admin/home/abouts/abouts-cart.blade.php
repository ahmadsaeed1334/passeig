
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
                placeholder="Search {{ Str::singular($page_title ?? 'Abouts') }} by id or name" />
            
        </div>
        <!--end::Search-->
    </div>
    <!--end::Card title-->
    @can('super staff create')
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Button-->
            <button wire:click="$set('isOpen', true)" type="button" class="btn btn-light-{{ primary_color() }}"
            data-bs-toggle="modal" data-bs-target="#aboutAddModal">
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
        <!--end::Svg Icon-->Add About
    </button>
    
    
            

            <!--end::Button-->
        </div>
        <!--end::Card toolbar-->
    @endcan
</div>

