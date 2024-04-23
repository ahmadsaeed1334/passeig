<div wire:ignore.self class="modal fade" id="aboutEditModal" tabindex="-1" aria-labelledby="aboutEditModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="aboutEditModalLabel">Edit About</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="update">
                    <div class="form-group row">
                        <div class="col-lg-6">
                        <label for="top_title" class="form-label required mt-2">Top Title</label>
                        <input wire:model="top_title" type="text" class="form-control" id="top_title">
                        @error('top_title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                        <div class="col-lg-6">
                        <label for="title" class="form-label required mt-2">Title</label>
                        <input wire:model="title" type="text" class="form-control" id="title">
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                        <label for="description_1" class="form-label required mt-2">Description 1</label>
                        <textarea wire:model="description_1" class="form-control" id="description_1" rows="3"></textarea>
                        @error('description_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                   
                        <div class="col-lg-6">
                        <label for="description_2" class="form-label required mt-2">Description 2</label>
                        <textarea wire:model="description_2" class="form-control" id="description_2"rows="3"></textarea>
                        @error('description_2') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                        <label for="number_1" class="form-label required mt-2">Number 1</label>
                        <input wire:model="number_1" class="form-control" id="number_1">
                        @error('number_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                        <div class="col-lg-6">
                        <label for="title_1" class="form-label required mt-2">Title 1</label>
                        <input wire:model="title_1" class="form-control" id="title_1" >
                        @error('title_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                        <label for="number_2" class="form-label required mt-2">Number 2</label>
                        <input wire:model="number_2" class="form-control" id="number_2" >
                        @error('number_2') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                   
                        <div class="col-lg-6">
                        <label for="title_2" class="form-label required mt-2">Title 2</label>
                        <input wire:model="title_2" class="form-control" id="title_2" >
                        @error('title_2') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                        <label for="number_3" class="form-label required mt-2">Number 3</label>
                        <textarea wire:model="number_3" class="form-control" id="number_3" rows="3"></textarea>
                        @error('number_3') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                  
                        <div class="col-lg-6">
                        <label for="title_3" class="form-label required mt-2">Title 3</label>
                        <input wire:model="title_3" class="form-control" id="title_3" rows="3">
                        @error('title_3') <span class="text-danger">{{ $message }}</span> @enderror
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
