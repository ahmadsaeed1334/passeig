<div wire:ignore.self class="modal fade" id="aboutEditModal" tabindex="-1" aria-labelledby="aboutEditModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="aboutEditModalLabel">Edit Abouts</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="update">
                    
                    <div class="mb-3">
                        <label for="title_1" class="form-label required">Title</label>
                        <input wire:model="title_1" type="text" class="form-control" id="title_1">
                        @error('title_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description_1" class="form-label required">Description</label>
                        <textarea wire:model="description_1" class="form-control" id="description_1" rows="3"></textarea>
                        @error('description_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group row">
                        <!-- Image input -->
                        <div class="col-lg-4">
                            <label class="fs-6 fw-semibold form-label mb-2 mt-2">
                                <span class="required">Image</span>
                            </label>
                            <br>
                            <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                <!-- Preview existing file -->
                                <div class="image-input-wrapper" style="background-image: url({{  $image_1 ? (is_string($image_1) ? asset('storage/'.$image_1) : $image_1->temporaryUrl()) : asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                </div>
                                <!-- Inputs -->
                                <label class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change image_1">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <input wire:model="image_1" type="file" id="image_1" name="file" accept=".jpeg, .png, .jpg, .gif, .mp4, .mov, .ogg, .qt" />
                                    <input type="hidden" name="avatar_remove" />
                                </label>             
                                @error('image_1')
                                <div class="text-{{ primary_color() }}">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-text">jpeg,png,jpg,gif,mp4,mov,ogg,qt.</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="title_2" class="form-label required">Title</label>
                        <input wire:model="title_2" type="text" class="form-control" id="title_2">
                        @error('title_2') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description_2" class="form-label required">Description</label>
                            <textarea wire:model="description_2" class="form-control" id="description_2" rows="3"></textarea>
                            @error('description_2') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group row">    
                            <!-- Image input -->
                            <div class="col-lg-4">
                                <label class="fs-6 fw-semibold form-label mb-2 mt-2">
                                    <span class="required">Image</span>
                                </label>
                                <br>
                                <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                    <!-- Preview existing file -->
                                    
                                    <div class="image-input-wrapper" style="background-image: url({{  $image_2 ? (is_string($image_2) ? asset('storage/'.$image_2) : $image_2->temporaryUrl()) : asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                    </div>
                                    <!-- Inputs -->
                                    <label class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change image_2">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <input wire:model="image_2" type="file" id="image_2" name="file" accept=".jpeg, .png, .jpg, .gif, .mp4, .mov, .ogg, .qt" />
                                        <input type="hidden" name="avatar_remove" />
                                    </label>
                                    @error('image_2')
                                <div class="text-{{ primary_color() }}">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-text">jpeg,png,jpg,gif,mp4,mov,ogg,qt.</div>
                        </div>
                    </div>
                     <!-- Form Actions -->
                     <div class="modal-footer">
                        <button type="button" class="btn btn-danger" wire:click="discardChanges" data-bs-dismiss="modal">Discard</button>
                        <button type="button" class="btn btn-primary" wire:click="update">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



