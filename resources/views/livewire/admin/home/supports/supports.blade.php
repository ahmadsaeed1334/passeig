<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    @include('livewire.admin.partial.preloader')
    <div class="d-flex flex-column flex-column-fluid">
        <x-slot name="page_title">
            {{ $page_title ?? 'Home' }}
        </x-slot>
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container{{ general('layout') }} d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
                    <!--begin::Title-->
                    <h1 wire:click.prevent="$dispatch('refresh')" class="page-heading d-flex text-{{ primary_color() }} fw-bold fs-3 flex-column justify-content-center pointer my-0">
                        {{-- {{ $page_title }} --}}

                        {{ $page_title?? 'Support' }}
                    </h1>
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Card header-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container{{ general('layout') }}">
                <!--begin::View-->
                <div class="card card-flush">
                    {{-- @include('livewire.admin.home.supports.supports-cart') --}}
                    @include('livewire.admin.home.supports.supports-view')
                    <!--end::View-->
                </div>
                <div id="kt_app_content" class="app-content flex-column-fluid">
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container container{{ general('layout') }}">
                        @include('livewire.admin.home.supports.supports-edit')
                        {{-- @include('livewire.admin.home.supports.supports-form') --}}


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>