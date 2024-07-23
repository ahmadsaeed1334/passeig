@extends('layouts.app')

@section('content')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    @include('livewire.admin.partial.preloader')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container{{ general('layout') }}">
                <div class="card card-flush">
                    <div class="card-header mt-6">
                        <div class="card-title">
                            <h1>{{$page_title}}</h1>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Form Section (8 columns) -->
                        <div class="col-lg-7">
                            <form action="{{ route('our-services.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group ms-3 me-3 mt-3">
                                    <label class="mb-3 ms-3 required" for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" oninput="updatePreview()">
                                </div>
                                <div class="form-group ms-3 me-3 mt-3">
                                    <label class="mb-3 ms-3 required" for="short_description">Short Description</label>
                                    <input type="text" class="form-control" id="short_description" name="short_description" value="{{ old('short_description') }}" oninput="updatePreview()">
                                </div>
                                <div class="form-group ms-3 me-3 mt-3">
                                    <div class="col-lg-4">
                                        <label class="mb-3 ms-3 required" class="fs-6 fw-semibold form-label mb-2 mt-2">
                                            <span>image</span>
                                        </label>
                                        <br>
                                        <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                            <div class="image-input-wrapper" id="image-preview" style="background-size:100% 100%;width:300px">
                                                <img id="form-preview-image" src="#" alt="Preview" style="display: none; width: 100%; height: auto;">
                                            </div>
                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change image">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <input name="image" type="file" id="image" accept=".jpeg, .png, .jpg, .gif" onchange="previewImage(event)" />
                                                <input type="hidden" name="avatar_remove" />
                                            </label>
                                            @error('image')
                                            <div class="text-primary">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-text">jpeg, png, jpg, gif.</div>
                                    </div>
                                </div>
                                <div class="form-group ms-3 me-3 mt-3">
                                    <label class="mb-3 ms-3 required" for="long_description">Long Description</label>
                                    <textarea class="form-control" id="long_description" name="long_description" rows="5" oninput="updatePreview()">{{ old('long_description') }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary ms-3 mt-3 mb-5">Submit</button>
                                <a href="{{ route('our-services.index') }}" class="btn btn-secondary ms-5 mt-3 mb-5">Cancel</a>
                            </form>
                        </div>
                        <!-- Preview Section (4 columns) -->
                        @include('front.pages.our-services.preview')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var formImageOutput = document.getElementById('form-preview-image');
            formImageOutput.src = reader.result;
            formImageOutput.style.display = 'block';

            var previewImageOutput = document.getElementById('preview-image');
            previewImageOutput.src = reader.result;
            previewImageOutput.style.display = 'block';

            var previewImageSecondary = document.getElementById('preview-image-secondary');
            previewImageSecondary.src = reader.result;
            previewImageSecondary.style.display = 'block';
        }
        reader.readAsDataURL(event.target.files[0]);
    }

    function updatePreview() {
        document.getElementById('preview-title').innerText = document.getElementById('title').value || 'Title';
        document.getElementById('preview-short-description').innerText = document.getElementById('short_description').value || 'Short Description';
        document.getElementById('preview-long-description').innerHTML = CKEDITOR.instances.long_description.getData() || 'Long Description';
    }

    CKEDITOR.replace('long_description', {
        on: {
            change: function() {
                updatePreview();
            }
        }
    });

</script>
@endsection
