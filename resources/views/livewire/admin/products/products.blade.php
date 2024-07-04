<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    @include('livewire.admin.partial.preloader')
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/theme/classic.css">

          <style>
            .ck-content {
                color: black;
            }
            .ck-content h1,
.ck-content h2,
.ck-content h3 {
    color: black; 
}
        </style>
    <div class="d-flex flex-column flex-column-fluid">
        <x-slot name="page_title">
            {{ $page_title ?? 'Products' }}
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

                        {{ $page_title ?? 'Products' }}
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
						<div class="breadcrumb-item text-muted">
							{{ __('total') }} {{ 'Products'}}
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="breadcrumb-item">
							<span class="bullet w-5px h-2px bg-gray-400"></span>
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="breadcrumb-item text-{{ primary_color() }}">
							{{ count($products) }}
						</div>
						<!--end::Item-->
					</ul>
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
                    @include('livewire.admin.products.products-cart')
                    @include('livewire.admin.products.products-view')
                    <!--end::View-->
                </div>
                <div id="kt_app_content" class="app-content flex-column-fluid">
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container container{{ general('layout') }}">
                        {{-- @include('livewire.admin.products.products-edit') --}}
                        {{-- @include('livewire.admin.products.products-form') --}}


                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
           <script>
            ClassicEditor.create(document.querySelector('#description'))
           .then(editor => {
               editor.model.document.on('change:data', () => {
                   @this.set('description', editor.getData());
               });
           })
           .catch(error => {
               console.error(error);
           });
         </script>
<script>
    ClassicEditor
        .create(document.querySelector('#descriptionEdit'))
        .then(editor => {
            editor.model.document.on('change:data', () => {
                @this.set('descriptionEdit', editor.getData());
            });
        })
        .catch(error => {
            console.error(error);
        });
      </script> 
</div>
