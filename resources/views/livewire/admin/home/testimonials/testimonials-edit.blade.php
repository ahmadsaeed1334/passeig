<div wire:ignore.self class="modal fade" id="testimonialEditModal" tabindex="-1" aria-labelledby="testimonialEditModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="testimonialEditModalLabel">Edit Testimonials</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="update">
                    <div class="form-group row">
                        <div class="col-lg-6">
                        <label for="subtitle" class="form-label required">Subtitle</label>
                        <input wire:model="subtitle" type="text" class="form-control" id="subtitle">
                        @error('subtitle') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                        <div class="col-lg-6">
                        <label for="title" class="form-label required">Title</label>
                        <input wire:model="title" type="text" class="form-control" id="title">
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12">
                        <label for="description" class="form-label required">Description</label>
                        <textarea wire:model="description" class="form-control" id="description" rows="3"></textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    </div>
                    <div class="form-group row">
                        <!-- Image input -->
                        <div class="col-lg-6">
                            <label class="fs-6 fw-semibold form-label mb-2 mt-2">
                                <span class="required">Slider Image 1</span>
                            </label>
                            <br>
                            <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                <!-- Preview existing file -->
                                <div class="image-input-wrapper" style="background-image: url({{ $slider_image_1 ? (is_string($slider_image_1) ? asset('storage/'.$slider_image_1) : $slider_image_1->temporaryUrl()) : asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                </div>
                                <!-- Inputs -->
                                <label class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change slider_image_1">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <input wire:model="slider_image_1" type="file" id="slider_image_1" name="file" accept=".jpeg, .png, .jpg, .gif, .mp4, .mov, .ogg, .qt" />
                                    <input type="hidden" name="avatar_remove" />
                                </label>
                                @error('slider_image_1')
                                <div class="text-{{ primary_color() }}">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-text">jpeg,png,jpg,gif,mp4,mov,ogg,qt.</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4">
                        <label for="client_name_1" class="form-label required">Clien Name 1</label>
                        <input wire:model="client_name_1" class="form-control" id="client_name_1" rows="3"></input>
                        @error('client_name_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                        <div class="col-lg-4">
                        <label for="slider_description_1" class="form-label required">Slider Description 1</label>
                        <textarea wire:model="slider_description_1" class="form-control" id="slider_description_1" rows="3"></textarea>
                        @error('slider_description_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="col-lg-4">
                        <label for="rating_1" class="form-label">Rating 1</label>
                        <select wire:model="rating_1" class="form-select" id="rating_1">
                            <option value="">Select Rating</option>
                            @for ($i = 1; $i <= 5; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                        </select>
                        @error('rating_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    </div>
                    <div class="form-group row">
                        <!-- Image input -->
                        <div class="col-lg-6">
                            <label class="fs-6 fw-semibold form-label mb-2 mt-2">
                                <span class="required">Slider Image 2</span>
                            </label>
                            <br>
                            <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                <!-- Preview existing file -->
                                <div class="image-input-wrapper" style="background-image: url({{  $slider_image_2 ? (is_string($slider_image_2) ? asset('storage/'.$slider_image_2) : $slider_image_2->temporaryUrl()) : asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                </div>
                                <!-- Inputs -->
                                <label class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change slider_image_2">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <input wire:model="slider_image_2" type="file" id="slider_image_2" name="file" accept=".jpeg, .png, .jpg, .gif, .mp4, .mov, .ogg, .qt" />
                                    <input type="hidden" name="avatar_remove" />
                                </label>
                                @error('slider_image_2')
                                <div class="text-{{ primary_color() }}">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-text">jpeg,png,jpg,gif,mp4,mov,ogg,qt.</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4">
                        <label for="client_name_2" class="form-label required">Clien Name 2</label>
                        <input wire:model="client_name_2" class="form-control" id="client_name_2" rows="3"></input>
                        @error('client_name_2') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                        <div class="col-lg-4">
                        <label for="slider_description_2" class="form-label required">Slider Description 2</label>
                        <textarea wire:model="slider_description_2" class="form-control" id="slider_description_2" rows="3"></textarea>
                        @error('slider_description_2') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                        <div class="col-lg-4">
                        <label for="rating_2" class="form-label">Rating 2</label>
                        <select wire:model="rating_2" class="form-select" id="rating_2">
                            <option value="">Select Rating</option>
                            @for ($i = 1; $i <= 5; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                        </select>
                        @error('rating_2') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    </div>
                    <div class="form-group row">
                        <!-- Image input -->
                        <div class="col-lg-6">
                            <label class="fs-6 fw-semibold form-label mb-2 mt-2">
                                <span class="required">Slider Image 3</span>
                            </label>
                            <br>
                            <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                <!-- Preview existing file -->
                                <div class="image-input-wrapper" style="background-image: url({{  $slider_image_3? (is_string($slider_image_3)? asset('storage/'.$slider_image_3) : $slider_image_3->temporaryUrl()) : asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                </div>
                                <!-- Inputs -->
                                <!-- Inputs -->
                                <label class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change slider_image_3">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <input wire:model="slider_image_3" type="file" id="slider_image_3" name="file" accept=".jpeg, .png, .jpg, .gif, .mp4, .mov, .ogg, .qt" />
                                    <input type="hidden" name="avatar_remove" />
                                </label>
                                @error('slider_image_3')
                                <div class="text-{{ primary_color() }}">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-text">jpeg,png,jpg,gif,mp4,mov,ogg,qt.</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4">
                        <label for="client_name_3" class="form-label required">Clien Name 3</label>
                        <input wire:model="client_name_3" class="form-control" id="client_name_3" rows="3"></input>
                        @error('client_name_3') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                        <div class="col-lg-4">
                        <label for="slider_description_3" class="form-label required">Slider Description 3</label>
                        <textarea wire:model="slider_description_3" class="form-control" id="slider_description_3" rows="3"></textarea>
                        @error('slider_description_3') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <!-- Rating Input -->
                        <div class="col-lg-4">
                        <label for="rating" class="form-label">Rating 3</label>
                        <select wire:model="rating" class="form-select" id="rating">
                            <option value="">Select Rating</option>
                            @for ($i = 1; $i <= 5; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                        </select>
                        @error('rating') <span class="text-danger">{{ $message }}</span> @enderror
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