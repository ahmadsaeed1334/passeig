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
                    <form action="{{ route('experts.updateExpert', $expert->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $expert->name }}">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $expert->title }}">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        {{-- <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="image">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @if ($expert->image)
                            <img src="{{ asset('storage/' . $expert->image) }}" alt="{{ $expert->name }}" width="100">
                        @endif
                        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                </div> --}}
                <div class="form-group ms-3 me-3 mt-3">
                    <div class="col-lg-4">
                        <label class="mb-3 ms-3 required" class="fs-6 fw-semibold form-label mb-2 mt-2">
                            <span>Image</span>
                        </label>
                        <br>
                        <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                            <div class="image-input-wrapper" id="image-preview" style="background-image: url({{ $expert->image ? asset('storage/'.$expert->image) : asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
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
                <button type="submit" class="btn btn-primary ms-3  mt-3 mb-5">Update</button>
                <a href="{{ route('experts.index') }}" class="btn btn-secondary ms-5  mt-3 mb-5">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
