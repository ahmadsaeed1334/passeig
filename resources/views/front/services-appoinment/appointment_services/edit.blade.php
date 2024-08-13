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
                    <form action="{{ route('appointment-services.update', $service->id) }}" method="POST">
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
                                <option value="{{ $category->id }}" {{ (isset($service) && $service->service_category_id == $category->id) ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                                @foreach($category->subcategories as $subcategory)
                                <option value="{{ $subcategory->id }}" {{ (isset($service) && $service->service_category_id == $subcategory->id) ? 'selected' : '' }}>
                                    -- {{ $subcategory->name }}
                                </option>
                                @endforeach
                                @endforeach
                            </select>
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
    CKEDITOR.replace('long_description');

</script>

@endsection
