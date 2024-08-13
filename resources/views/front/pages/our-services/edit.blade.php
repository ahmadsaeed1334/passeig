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
                            <h1>{{ $page_title }}</h1>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Form Section (8 columns) -->
                        <div class="col-lg-7">
                            <form action="{{ route('our-services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group ms-3 me-3 mt-3">
                                    <div class="col-lg-4">
                                        <label class="mb-3 ms-3 " class="fs-6 fw-semibold form-label mb-2 mt-2">
                                            <span class="required">Image</span>
                                        </label>
                                        <br>
                                        <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:500px; height: 500px;">
                                            <div class="image-input-wrapper" id="image-preview" style="background-image: url({{ $service->image ? asset('storage/'.$service->image) : asset('img/bg-back.jpg') }}); background-size:100% 100%;width:500px">
                                                <img id="form-preview-image" src="{{ $service->image ? asset('storage/'.$service->image) : '#' }}" alt="Preview" style="width: 100%; height: 500px;">
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
                                    <label class="mb-3 ms-3 required" for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $service->title) }}" oninput="updatePreview()">
                                </div>
                                <div class="form-group ms-3 me-3 mt-3">
                                    <label class="mb-3 ms-3 required" for="short_description">Short Description</label>
                                    <input type="text" class="form-control" id="short_description" name="short_description" value="{{ old('short_description', $service->short_description) }}" oninput="updatePreview()">
                                </div>

                                <div class="form-group ms-3 me-3 d-block mt-3">
                                    <label class="mb-3 ms-3 required" for="long_description">Long Description</label>
                                    <textarea class="form-control" id="long_description" name="long_description" rows="5" oninput="updatePreview()">{{ old('long_description', $service->long_description) }}</textarea>
                                </div>
                                <div class="form-group ms-3 me-3 mt-3">
                                    <label class="mb-3 ms-3 required" for="price">Price</label>
                                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $service->price) }}" oninput="updatePreview()">
                                </div>
                                <button type="submit" class="btn btn-primary ms-3 mt-3 mb-5">Update</button>
                                <a href="{{ route('our-services.index') }}" class="btn btn-secondary ms-5 mt-3 mb-5">Cancel</a>
                            </form>
                        </div>
                        <!-- Preview Section (4 columns) -->
                        @include('front.pages.our-services.edit-preview')

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
            var output = document.getElementById('form-preview-image');
            output.src = reader.result;
            output.style.display = 'block';

            var previewImageOutput = document.getElementById('preview-image');
            previewImageOutput.src = reader.result;
            previewImageOutput.style.display = 'block';
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
