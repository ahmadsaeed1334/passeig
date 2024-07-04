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
                    <form action="{{ route('footer.update', $footer->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="number">Number</label>
                            <input type="text" class="form-control" id="number" name="number" value="{{ old('number', $footer->number) }}" required>
                        </div>
                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $footer->address) }}" required>
                        </div>
                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $footer->description) }}</textarea>
                        </div>
                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="working_hours">Working Hours</label>
                            <input type="text" class="form-control" id="working_hours" name="working_hours" value="{{ old('working_hours', $footer->working_hours) }}" required>
                        </div>
                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="icons">Icons</label>
                            <div id="icon-container">
                                @foreach(json_decode($footer->icons) as $index => $icon)
                                    <div class="icon-input" id="icon-input-{{ $index }}">
                                        <input type="text" class="form-control mt-2" name="icons[{{ $index }}][icon]" placeholder="Icon (e.g., fa fa-facebook)" value="{{ $icon->icon }}">
                                        <input type="url" class="form-control mt-2" name="icons[{{ $index }}][link]" placeholder="Link (e.g., https://facebook.com)" value="{{ $icon->link }}">

                                        <span onclick="removeIcon({{ $index }})"
							class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow"
							data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove Icon">
							<i class="bi bi-x fs-2"></i>
						</span>
                        {{-- <button type="button" class="btn btn-danger mt-2 remove-icon" onclick="removeIcon({{ $index }})">Remove</button> --}}
                                    </div>
                                @endforeach
                            </div>
                            {{-- <button type="button" class="btn btn-success ms-3 mt-3 mb-5" id="add-icon">Add Icon</button> --}}
                            <div class="card-toolbar">
                                <button type="button" class="btn btn-light-{{ primary_color() }}" id="add-icon" >
                                    <span class="svg-icon svg-icon-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                                transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                        </svg>
                                    </span>
                                    Add Icon
                                </button>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary ms-5 mt-3 mb-5">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('add-icon').addEventListener('click', function() {
        var container = document.getElementById('icon-container');
        var index = container.getElementsByClassName('icon-input').length;
        var div = document.createElement('div');
        div.className = 'icon-input';
        div.id = 'icon-input-' + index;
        div.innerHTML = `<input type="text" class="form-control mt-2" name="icons[${index}][icon]" placeholder="Icon (e.g., fa fa-facebook)">
                         <input type="url" class="form-control mt-2" name="icons[${index}][link]" placeholder="Link (e.g., https://facebook.com)">
                        <span onclick="removeIcon({{ $index }})"
							class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow"
							data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove Icon">
							<i class="bi bi-x fs-2"></i>
						</span>`;
        container.appendChild(div);
    });

    function removeIcon(index) {
        var element = document.getElementById('icon-input-' + index);
        element.parentNode.removeChild(element);
    }
</script>

<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
@endsection
