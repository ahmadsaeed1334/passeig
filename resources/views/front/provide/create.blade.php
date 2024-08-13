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
                    <form action="{{ route('provides.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="top_title">Top Title</label>
                            <input type="text" class="form-control" id="top_title" name="top_title" value="{{ old('top_title') }}">
                            @error('top_title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="short_description">Short Description</label>
                            <input type="text" class="form-control" id="short_description" name="short_description" value="{{ old('short_description') }}">
                            @error('short_description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="long_description">Long Description</label>
                            <textarea class="form-control" id="long_description" name="long_description" rows="5">{{ old('long_description') }}</textarea>
                            @error('long_description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="image">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <button type="submit" class="btn btn-primary ms-3  mt-3 mb-5">Submit</button>
                        <a href="{{ route('provides.index') }}" class="btn btn-secondary ms-5  mt-3 mb-5">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
