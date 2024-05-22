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
    color: black; /* Set text color to black for header styles */
}
        </style>
    <div class="d-flex flex-column flex-column-fluid">
        <x-slot name="page_title">
            {{ $page_title ?? 'Terms Condition' }}
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

                        {{ $page_title?? 'Terms Condition' }}
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">
							{{ __('total') }}  {{ $page_title?? 'Terms Condition' }}
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet w-5px h-2px bg-gray-400"></span>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item text-{{ primary_color() }}">
							{{ count($termsConditions)  }}
						</li>
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
                    @include('livewire.admin.pages.terms-conditions.terms-conditions-cart') 
                    @include('livewire.admin.pages.terms-conditions.terms-conditions-form')
                    <!--end::View-->
                </div>
                <div id="kt_app_content" class="app-content flex-column-fluid">
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container container{{ general('layout') }}">
                        @include('livewire.admin.pages.terms-conditions.terms-conditions-view')
                        @include('livewire.admin.pages.terms-conditions.terms-conditions-edit')
                    </div>
                </div>
            </div>
        </div>
    </div>
           <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
           <script>
            ClassicEditor.create(document.querySelector('#content'))
           .then(editor => {
               editor.model.document.on('change:data', () => {
                   @this.set('content', editor.getData());
               });
           })
           .catch(error => {
               console.error(error);
           });
         </script>
<script>
    ClassicEditor
        .create(document.querySelector('#contentEdit'))
        .then(editor => {
            editor.model.document.on('change:data', () => {
                @this.set('contentEdit', editor.getData());
            });
        })
        .catch(error => {
            console.error(error);
        });
      </script> 
      {{-- <script>
        document.addEventListener('livewire:load', function () {
            ClassicEditor
                .create(document.querySelector('#content'), {
                    // Define custom configuration options here
                    ckfinder: {
                        uploadUrl: '/your-upload-url', // Specify the CKFinder upload URL
                    },
                    toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', '|', 'undo', 'redo'],
                    heading: {
                        options: [
                            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                            { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                            { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                            { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' }
                        ]
                    }
                })
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                        @this.set('content', editor.getData());
                    });
                })
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
<script>
    document.addEventListener('livewire:load', function () {
        ClassicEditor
            .create(document.querySelector('#contentEdit'), {
                // Define custom configuration options here
                ckfinder: {
                    uploadUrl: '/your-upload-url', // Specify the CKFinder upload URL
                },
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', '|', 'undo', 'redo'],
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                        { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' }
                    ]
                }
            })
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('contentEdit', editor.getData());
                });
            })
            .catch(error => {
                console.error(error);
            });
    });
</script>
     --}}
</div>
