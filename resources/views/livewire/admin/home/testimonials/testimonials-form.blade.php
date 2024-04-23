<div wire:ignore.self class="modal fade" id="testimonialAddModal" tabindex="-1" aria-labelledby="testimonialAddModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="testimonialAddModalLabel">Add Overview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="create">
                    <div class="mb-3">
                        <label for="subtitle" class="form-label required">Subtitle</label>
                        <input wire:model="subtitle" type="text" class="form-control" id="subtitle">
                        @error('subtitle') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label required">Title</label>
                        <input wire:model="title" type="text" class="form-control" id="title">
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label required">Description</label>
                        <input wire:model="description" class="form-control" id="description" rows="3"></input>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="slider_image_1" class="form-label required">Slider image 1</label>
                        <input wire:model="slider_image_1" type="file" class="form-control" id="slider_image_1" rows="3"></input>
                        @error('slider_image_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="client_name_1" class="form-label required">Client Name 1</label>
                        <input wire:model="client_name_1" class="form-control" id="client_name_1" rows="3"></input>
                        @error('client_name_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="slider_description_1" class="form-label required">Slider Description 1</label>
                        <input wire:model="slider_description_1" class="form-control" id="slider_description_1" rows="3"></input>
                        @error('slider_description_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="rating_1" class="form-label">Rating 1</label>
                        <select wire:model="rating_1" class="form-select" id="rating_1">
                            <option value="">Select Rating</option>
                            @for ($i = 1; $i <= 5; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                        </select>
                        @error('rating_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="slider_image_2" class="form-label required">Slider image 2</label>
                        <input wire:model="slider_image_2" type="file"  class="form-control" id="slider_image_2" rows="3"></input>
                        @error('slider_image_2') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="client_name_2" class="form-label required">Client Name 2</label>
                        <input wire:model="client_name_2" class="form-control" id="client_name_2" rows="3"></input>
                        @error('client_name_2') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="slider_description_2" class="form-label required">Slider Description 2</label>
                        <input wire:model="slider_description_2" class="form-control" id="slider_description_2" rows="3"></input>
                        @error('slider_description_2') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="rating_2" class="form-label">Rating 2</label>
                        <select wire:model="rating_2" class="form-select" id="rating_2">
                            <option value="">Select Rating</option>
                            @for ($i = 1; $i <= 5; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                        </select>
                        @error('rating_2') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="slider_image_3" class="form-label required">Slider image 3</label>
                        <input wire:model="slider_image_3" type="file"  class="form-control" id="slider_image_3" rows="3"></input>
                        @error('slider_image_3') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="client_name_3" class="form-label required">Client Name 3</label>
                        <input wire:model="client_name_3" class="form-control" id="client_name_3" rows="3"></input>
                        @error('client_name_3') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="slider_description_3" class="form-label required">Slider Description 3</label>
                        <input wire:model="slider_description_3" class="form-control" id="slider_description_3" rows="3"></input>
                        @error('slider_description_3') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                   <!-- Rating Input -->
                   <div class="mb-3">
                    <label for="rating" class="form-label">Rating 3</label>
                    <select wire:model="rating" class="form-select" id="rating">
                        <option value="">Select Rating</option>
                        @for ($i = 1; $i <= 5; $i++) <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                    </select>
                    @error('rating') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="discardChanges" data-bs-dismiss="modal">Discard</button>
                        <button type="button" class="btn btn-primary" wire:click="create">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

