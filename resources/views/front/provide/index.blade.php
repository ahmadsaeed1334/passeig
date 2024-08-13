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

                    @if($provide)
                    <form action="{{ route('provides.update', $provide->id) }}" method="POST" class="mb-4" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="top_title-{{ $provide->id }}">Top Title</label>
                            <input type="text" class="form-control" id="top_title-{{ $provide->id }}" name="top_title" value="{{ $provide->top_title }}" required>
                            @error('top_title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="title-{{ $provide->id }}">Title</label>
                            <input type="text" class="form-control" id="title-{{ $provide->id }}" name="title" value="{{ $provide->title }}" required>
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="short_description-{{ $provide->id }}">Short Description</label>
                            <input type="text" class="form-control" id="short_description-{{ $provide->id }}" name="short_description" value="{{ $provide->short_description }}" required>
                            @error('short_description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="long_description-{{ $provide->id }}">Long Description</label>
                            <textarea class="form-control" id="long_description-{{ $provide->id }}" name="long_description" required>{{ $provide->long_description }}</textarea>
                            @error('long_description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        {{-- <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3" for="image-{{ $provide->id }}">Image</label>
                        <input type="file" class="form-control" id="image-{{ $provide->id }}" name="image">
                        @if ($provide->image)
                        <img src="{{ asset('storage/' . $provide->image) }}" alt="{{ $provide->title }}" width="100" class="mt-2">
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
                            <div class="image-input-wrapper" id="image-preview" style="background-image: url({{ $provide->image ? asset('storage/'.$provide->image) : asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
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
                <button type="submit" class="btn btn-primary ms-3 mt-3 mb-5">Update</button>
                </form>
                @else
                <p class="ms-3 mt-3">No Provide section created yet. Please create one.</p>
                @endif
            </div>
        </div>
    </div>
</div>
</div>

@if (session('success'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'success'
            , title: 'Success'
            , text: '{{ session('
            success ') }}'
        , });
    });

</script>
@endif

<script src="https://cdn.ckeditor.com/4.22.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('long_description');

</script>
@endsection
