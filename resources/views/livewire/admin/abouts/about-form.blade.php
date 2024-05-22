<div wire:ignore.self class="modal fade" id="aboutAddModal" tabindex="-1" aria-labelledby="aboutAddModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="aboutAddModalLabel">Add About</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="create">
                    <div class="mb-3">
                        <label for="top_title" class="form-label required">Top Title</label>
                        <input wire:model="top_title" type="text" class="form-control" id="top_title">
                        @error('top_title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label required">Title</label>
                        <input wire:model="title" type="text" class="form-control" id="title">
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description_1" class="form-label required">Description 1</label>
                        <textarea wire:model="description_1" class="form-control" id="description_1" rows="3"></textarea>
                        @error('description_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description_2" class="form-label required">Description 2</label>
                        <textarea wire:model="description_2" class="form-control" id="description_2" rows="3"></textarea>
                        @error('description_2') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="number_1" class="form-label required">Number 1</label>
                        <textarea wire:model="number_1" class="form-control" id="number_1" rows="3"></textarea>
                        @error('number_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="title_1" class="form-label required">Title 1</label>
                        <textarea wire:model="title_1" class="form-control" id="title_1" rows="3"></textarea>
                        @error('title_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="number_2" class="form-label required">Number 2</label>
                        <textarea wire:model="number_2" class="form-control" id="number_2" rows="3"></textarea>
                        @error('number_2') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="title_2" class="form-label required">Title 2</label>
                        <textarea wire:model="title_2" class="form-control" id="title_2" rows="3"></textarea>
                        @error('title_2') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="number_3" class="form-label required">Number 3</label>
                        <textarea wire:model="number_3" class="form-control" id="number_3" rows="3"></textarea>
                        @error('number_3') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="title_3" class="form-label required">Title 3</label>
                        <textarea wire:model="title_3" class="form-control" id="title_3" rows="3"></textarea>
                        @error('title_3') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>               
                  <!-- Form Actions -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" wire:click="discardChanges" data-bs-dismiss="modal">Discard</button>
                        <button type="button" class="btn btn-primary" wire:click="create">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
