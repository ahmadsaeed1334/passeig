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

                    @if($bestService)
                    <form action="{{ route('best_services.update', $bestService->id) }}" method="POST" class="mb-4">
                        @csrf
                        @method('PUT')
                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="top_title-{{ $bestService->id }}">Top Title</label>
                            <input type="text" class="form-control" id="top_title-{{ $bestService->id }}" name="top_title" value="{{ $bestService->top_title }}" required>
                            @error('top_title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="title-{{ $bestService->id }}">Title</label>
                            <input type="text" class="form-control" id="title-{{ $bestService->id }}" name="title" value="{{ $bestService->title }}" required>
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="description-{{ $bestService->id }}">Description</label>
                            <textarea class="form-control" id="description" name="description" required>{{ $bestService->description }}</textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="description_2-{{ $bestService->id }}">Description 2</label>
                            <textarea class="form-control" id="description_2" name="description_2" required>{{ $bestService->description_2 }}</textarea>
                            @error('description_2') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <button type="submit" class="btn btn-primary ms-3 mt-3 mb-5">Update</button>
                    </form>
                    @else
                    <p class="ms-3 mt-3">No Best Services section created yet. Please create one.</p>
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
    CKEDITOR.replace('description');
    CKEDITOR.replace('description_2');

</script>
@endsection
