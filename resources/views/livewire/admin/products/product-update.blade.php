<div class="container d-flex justify-content-center align-items-center min-vh-100 mt-5">
    <div class="card bg-dark text-white p-4" style="width: 100%; max-width: 1000px;">
    <div class="card-body" wire:ignore.self> 
        <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/theme/classic.css">
            <style>
                .ck-content {
                    color: black;
                }
                .ck-content h1,
    .ck-content h2,
    .ck-content h3 {
        color: black; 
    }
            </style>
        <x-slot name="page_title">
            {{ $page_title ?? 'Products' }}
        </x-slot>
    
        @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
    
        <form wire:submit.prevent="update" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label text-white">Name</label>
                <input type="text" id="name" wire:model="name" class="form-control">
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="col-lg-12" wire:ignore>
                        <label for="description" class="form-label required mt-2">Description</label>
                        <textarea class="form-control ckeditor" id="description" name="description" cols="30" rows="10" wire:model.defer="description"></textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
            <div class="mb-3">
                <label for="short_description" class="form-label text-white">Short Description</label>
                <input type="text" id="short_description" wire:model="short_description" class="form-control">
                @error('short_description') <span class="error">{{ $message }}</span> @enderror
            </div>
        
            <div class="mb-3">
                <label for="categorie_id" class="form-label text-white">Category</label>
                <select id="categorie_id" wire:model="categorie_id" class="form-select">
                    <option value="">Select a Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('categorie_id') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div  class="form-group row">
                <div class="col-lg-4">
                    <label class="fs-6 fw-semibold form-label mb-2 mt-2">
                        <span class="required text-white">Image</span>
                    </label>
                    <br>
                    <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                        <div  class="image-input-wrapper" style="background-image: url({{  $image ? (is_string($image) ? asset('storage/'.$image) : $image->temporaryUrl()) : asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                        </div>
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change image">
                            <i class="bi bi-pencil-fill fs-7"></i>
                            <input wire:model="image" type="file" id="image" name="file" accept=".jpeg, .png, .jpg, .gif, .mp4, .mov, .ogg, .qt" />
                            <input type="hidden" name="avatar_remove" />
                        </label>
                        @error('image')
                        <div class="text-primary">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-text">jpeg, png, jpg, gif, mp4, mov, ogg, qt.</div>
                </div>
            </div>
    
            <button type="submit" class="btn btn-success">Add Product</button>
        </form>
    </div>
    </div>
         <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
               <script>
                ClassicEditor.create(document.querySelector('#description'))
               .then(editor => {
                   editor.model.document.on('change:data', () => {
                       @this.set('description', editor.getData());
                   });
               })
               .catch(error => {
                   console.error(error);
               });
             </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#descriptionEdit'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('descriptionEdit', editor.getData());
                });
            })
            .catch(error => {
                console.error(error);
            });
          </script> 
    
    </div>
    