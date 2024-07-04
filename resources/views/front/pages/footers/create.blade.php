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
    <form action="{{ route('footer.store') }}" method="POST">
        @csrf
        <div class="form-group ms-3 me-3 mt-3">
            <label class="mb-3 ms-3 required" for="number">Number</label>
            <input type="text" class="form-control" id="number" name="number" required>
        </div>
        <div class="form-group ms-3 me-3 mt-3">
            <label class="mb-3 ms-3 required" for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="form-group ms-3 me-3 mt-3">
            <label class="mb-3 ms-3 required" for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="form-group ms-3 me-3 mt-3">
            <label class="mb-3 ms-3 required" for="icons">Icons</label>
            <div id="icon-container">
                <div class="icon-input">
                    <input type="text" class="form-control mb-2" name="icons[0][icon]" placeholder="Icon (e.g., fa fa-facebook)">
                    <input type="url" class="form-control mb-2" name="icons[0][link]" placeholder="Link (e.g., https://facebook.com)">
                </div>
            </div>
            <button type="button" class="btn btn-success ms-3  mt-3 mb-5" id="add-icon">Add Icon</button>
        </div>
        <div class="form-group ms-3 me-3 mt-3">
            <label class="mb-3 ms-3 required" for="working_hours">Working Hours</label>
            <input type="text" class="form-control" id="working_hours" name="working_hours" required>
        </div>
        <button type="submit" class="btn btn-primary ms-3  mt-3 mb-5">Create</button>
    </form>
</div>

<script>
    document.getElementById('add-icon').addEventListener('click', function() {
        var container = document.getElementById('icon-container');
        var index = container.getElementsByClassName('icon-input').length;
        var div = document.createElement('div');
        div.className = 'icon-input';
        div.innerHTML = `<input type="text" class="form-control mt-2" name="icons[${index}][icon]" placeholder="Icon (e.g., fa fa-facebook)">
                         <input type="url" class="form-control mt-2" name="icons[${index}][link]" placeholder="Link (e.g., https://facebook.com)">`;
        container.appendChild(div);
    });
</script>

</div>
</div>
</div>
</div>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('image-preview');
            output.style.backgroundImage = 'url(' + reader.result + ')';
        }
        reader.readAsDataURL(event.target.files[0]);
    }
    CKEDITOR.replace('long_description');
</script>

@endsection
