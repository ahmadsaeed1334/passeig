<div wire:ignore.self class="modal fade" id="heroBannerModal" tabindex="-1" aria-labelledby="heroBannerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="heroBannerModalLabel">Edit Hero Banner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="update">
                    <div class="form-group row">
                        <div class="col-lg-6">
                        <label for="subtitle" class="form-label">Subtitle</label>
                        <input type="text" class="form-control" id="subtitle" wire:model="subtitle">
                        @error('subtitle') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                   
                    
                        <div class="col-lg-6">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold form-label mb-2">
                            <span class="required">Title</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Title is required to be unique."></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control" id="title" wire:model="title">
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    </div>
                    
                    <div class="form-group row">
                    
                        <div class="col-lg-12">
                        <label for="description" class="form-label mt-2">Description</label>
                        <textarea class="form-control" id="description" wire:model="description"></textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                 
                    </div>
                    </div>
                    <div class="form-group row">
                    
                        <div class="col-lg-6">
                        <label for="button_text" class="form-label mt-2">Button Text</label>
                        <input type="text" class="form-control" id="button_text_1" wire:model="buttonText">
                        @error('button_text') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                   
                    
                        <div class="col-lg-6">
                        <label for="button_link" class="form-label mt-2">Button Link</label>
                        <input type="text" class="form-control" id="button_link_1" wire:model="buttonLink">
                        @error('button_link') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                   
                    </div>
                    <div class="form-group row">
                        <!-- Image input -->
                        <div class="col-lg-6">
                            <label class="fs-6 fw-semibold form-label mb-2 mt-2">
                                <span class="required">File</span>
                            </label>
                            <br>
                    <div class="image-input image-input-outline align-items-center mt-6" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                        <!-- Preview existing file -->
                        <div class="image-input-wrapper" style="background-image: url({{  $file ? (is_string($file) ? asset('storage/'.$file) : $file->temporaryUrl()) : asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                        </div>
                        {{-- <div class="image-input-wrapper" style="background-image: url({{ is_string($file) ? asset('storage/'.$file) : ($file ? $file->temporaryUrl() : asset('img/bg-back.jpg')) }}); background-size:100% 100%;width:300px">
                        </div> --}}
                        <!-- Inputs -->
                        <label class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change File">
                            <i class="bi bi-pencil-fill fs-7"></i>
                            <input wire:model="file" type="file" id="file" name="file" accept=".jpeg, .png, .jpg, .gif, .mp4, .mov, .ogg, .qt" />
                            <input type="hidden" name="avatar_remove" />
                        </label>
                        <!-- Cancel -->
                        <span class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel File">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                       
                        @error('file')
                        <div class="text-{{ primary_color() }}">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                    <!-- Form Actions -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="discardChanges" data-bs-dismiss="modal">Discard</button>
                        <button type="button" class="btn btn-primary" wire:click="update">Update</button>
                    </div>
    
                </form>
            </div>
        </div>
    </div>
</div>
