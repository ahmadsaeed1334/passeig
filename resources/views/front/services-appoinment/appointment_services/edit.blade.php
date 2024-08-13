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
                    <form action="{{ route('appointment-services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="service_name">Service Name</label>
                            <input type="text" class="form-control" id="service_name" name="service_name" value="{{ $service->service_name }}">
                            @error('service_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="duration">Duration (in minutes)</label>
                            <input type="number" class="form-control" id="duration" name="duration" value="{{ $service->duration }}">
                            @error('duration') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="amount">Amount</label>
                            <input type="number" class="form-control" id="amount" name="amount" value="{{ $service->amount }}">
                            @error('amount') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group ms-3 me-3 mt-3">
                            <label for="service_category_id" class="mb-3 ms-3 required">Category</label>
                            <select class="form-select" id="service_category_id" name="service_category_id" required>
                                <option value="" selected disabled>Select Category</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $service->service_category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                                @foreach($category->subcategories as $subcategory)
                                <option value="{{ $subcategory->id }}" {{ $service->service_category_id == $subcategory->id ? 'selected' : '' }}>
                                    -- {{ $subcategory->name }}
                                </option>
                                @endforeach
                                @endforeach
                            </select>
                        </div>
                        {{-- <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="image">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @if ($service->image)
                            <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->service_name }}" width="100">
                        @endif
                        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                </div> --}}
                <div class="form-group ms-3 me-3 mt-3">
                    <div class="col-lg-4">
                        <label class="mb-3 ms-3 " class="fs-6 fw-semibold form-label mb-2 mt-2">
                            <span class="required">Image</span>
                        </label>
                        <br>
                        <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                            <div class="image-input-wrapper" id="image-preview" style="background-image: url({{ $service->image ? asset('storage/'.$service->image) : asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
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
                    <label class="mb-3 ms-3 required" for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="5">{{ $service->description }}</textarea>
                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="btn btn-primary ms-3  mt-3 mb-5">Update</button>
                <a href="{{ route('appointment-services.index') }}" class="btn btn-secondary ms-5  mt-3 mb-5">Cancel</a>
                </form>

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
            var output = document.getElementById('image-preview');
            output.style.backgroundImage = 'url(' + reader.result + ')';
        }
        reader.readAsDataURL(event.target.files[0]);
    }
    CKEDITOR.replace('description');

</script>

@endsection
