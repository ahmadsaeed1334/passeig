<div wire:ignore.self class="modal fade" id="bannerImageEditModal" tabindex="-1" aria-labelledby="bannerImageEditModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bannerImageEditModalLabel">Edit Banner Slider Image </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="update">

                    <div class="form-group row">
                        <!-- Image input -->
                        <div class="col-lg-4">
                            <label class="fs-6 fw-semibold form-label mb-2 mt-2">
                                <span class="required">Banner Slider image</span>
                            </label>
                            <br>
                            <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                <!-- Preview existing file -->
                                <div class="image-input-wrapper" style="background-image: url({{  $banner_image ? (is_string($banner_image) ? asset('storage/'.$banner_image) : $banner_image->temporaryUrl()) : asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                </div>
                                <!-- Inputs -->
                                <label class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" name="Change banner_image">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <input wire:model="banner_image" type="file" id="card_image_1" name="file" accept=".jpeg, .png, .jpg, .gif, .mp4, .mov, .ogg, .qt" />
                                    <input type="hidden" name="avatar_remove" />
                                </label>             
                                @error('banner_image')
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
    