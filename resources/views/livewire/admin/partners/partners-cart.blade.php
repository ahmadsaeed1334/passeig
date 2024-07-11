<div class="card-header mt-6">
    <!--begin::Card title-->
    <div class="card-title">
    </div>
    <!--end::Card title-->
    {{-- @can('super staff create') --}}
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Button-->
            <button wire:click="$set('isOpen', true)" type="button" class="btn btn-light-{{ primary_color() }}"
            data-bs-toggle="modal" data-bs-target="#partnerImageAddModal">
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
        <!--end::Svg Icon-->Add Partner Image
    </button>
            <!--end::Button-->
        </div>
        <!--end::Card toolbar-->
    {{-- @endcan --}}
</div>

