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
                            <h1>Update Blog Title</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{ route('blogs.updateTitle', $blogTitle->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group ms-3 me-3 mt-3">
                                    <label class="mb-3 ms-3 required" for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ $blogTitle->title }}">
                                </div>
                                <div class="form-group ms-3 me-3 mt-3">
                                    <label class="mb-3 ms-3 required" for="long_description">Long Description</label>
                                    <textarea class="form-control" id="long_description" name="long_description" rows="5">{{ $blogTitle->long_description }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary ms-3 mt-3 mb-5">Update</button>
                                <a href="{{ route('blogs.index') }}" class="btn btn-secondary ms-5 mt-3 mb-5">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('long_description');

</script>
@endsection
