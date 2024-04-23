<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    @include('livewire.admin.partial.preloader')
    <div class="d-flex flex-column flex-column-fluid">
        <x-slot name="page_title">
            {{ $page_title ?? 'Giveaway' }}
        </x-slot>
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container{{ general('layout') }} d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
                    <!--begin::Title-->
                    <h1 wire:click.prevent="$dispatch('refresh')" class="page-heading d-flex text-{{ primary_color() }} fw-bold fs-3 flex-column justify-content-center pointer my-0">
            
                    {{ $page_title?? 'Giveaway' }}</h1>
                   
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">
							{{ __('total') }}  {{ $page_title?? 'Giveaway' }}
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet w-5px h-2px bg-gray-400"></span>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item text-{{ primary_color() }}">
							{{ count($giveaways)  }}
						</li>
						<!--end::Item-->
					</ul>
					<!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Card-->
        {{-- <div class="card card-custom gutter-b">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">{{ $page_title?? 'Giveaway' }}</span>
                    <span class="text-muted fw-bold fs-7">{{ $page_title?? 'Giveaway' }}</span>
                </h3>
            </div>
            </div> --}}

            <div id="kt_app_content" class="app-content flex-column-fluid">
                <div id="kt_app_content_container" class="app-container container{{ general('layout') }}">
            <div class="card card-flush">
            @include('livewire.admin.giveaway.giveaway-card')
             @include('livewire.admin.giveaway.giveaway-view')
             
            </div>
        </div>
	
    </div>
        	
                <div id="kt_app_content_container" class="app-container container{{ general('layout') }}">
                    <div class="card card-flush">
                @include('livewire.admin.giveaway.giveaway-form')
             
                </div>
                </div>
            </div>
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <div id="kt_app_content_container" class="app-container container{{ general('layout') }}">
                    <div class="card card-flush">
                    @include('livewire.admin.giveaway.giveaway-edit')    
                    @include('livewire.admin.giveaway.entry-giveaway')
                    @include('livewire.admin.giveaway.user-entry') 
                </div>
                </div>
                </div>
          
	


    


</div>
</div>
