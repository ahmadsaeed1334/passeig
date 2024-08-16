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
                    <form action="{{ route('faqs.store') }}" method="POST">
                        @csrf
                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="question">Question</label>
                            <input type="text" name="question" class="form-control" required>
                        </div>
                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="answer">Answer</label>
                            <textarea name="answer" id="answer" class="form-control" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary ms-3  mt-3 mb-5">Submit</button>
                        <a href="{{ route('faqs.index') }}" class="btn btn-secondary ms-5  mt-3 mb-5">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.22.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('answer');

</script>
@endsection
