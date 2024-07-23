<!-- resources/views/admin/products/create-title.blade.php -->

@extends('layouts.app')

@section('content')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
            <div id="kt_app_toolbar_container" class="app-container container{{ general('layout') }} d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
                    <h1 class="page-heading d-flex text-{{ primary_color() }} fw-bold fs-3 flex-column justify-content-center my-0">
                        {{ $page_title ?? 'Create Product Title' }}
                    </h1>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container{{ general('layout') }}">
                <div class="card card-flush">
                    <div class="card-header mt-6">
                        <div class="card-title">
                            <h3>Create Product Title</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.storeTitle') }}" method="POST">
                            @csrf
                            <div class="form-group ms-3 me-3 mt-3">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                            <div class="form-group ms-3 me-3 mt-3">
                                <label for="long_description">Long Description</label>
                                <textarea name="long_description" class="form-control" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Create Product Title</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace('long_description');

</script>

@endsection
