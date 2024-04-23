<div wire:ignore.self class="modal fade" id="supportAddModal" tabindex="-1" aria-labelledby="supportAddModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="supportAddModalLabel">Add Support</h5>
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
                        <label for="card_icon_1" class="form-label required">Card Icon 1</label>
                        <input wire:model="card_icon_1" type="file" class="form-control" id="card_icon_1" rows="3"></input>
                        @error('card_icon_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="card_title_1" class="form-label required">Card Title 1</label>
                        <input wire:model="card_title_1" class="form-control" id="card_title_1" rows="3"></input>
                        @error('card_title_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="card_description_1" class="form-label required">Card Description 1</label>
                        <input wire:model="card_description_1" class="form-control" id="card_description_1" rows="3"></input>
                        @error('card_description_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="card_number_1" class="form-label required">Card Number 1</label>
                        <input wire:model="card_number_1" class="form-control" id="card_number_1" rows="3"></input>
                        @error('card_number_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="card_email_1" class="form-label required">Card Email 1</label>
                        <input wire:model="card_email_1" class="form-control" id="card_email_1" rows="3"></input>
                        @error('card_email_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3"> 
                        <label for="card_icon_2" class="form-label required">Card Icon 2</label>
                        <input wire:model="card_icon_2" type="file" class="form-control" id="card_icon_2" rows="3"></input>
                        @error('card_icon_2') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="card_title_2" class="form-label required">Card Title 2</label>
                            <input wire:model="card_title_2" class="form-control" id="card_title_2" rows="3"></input>
                            @error('card_title_2') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="card_description_2" class="form-label required">Card Description 2</label>
                            <input wire:model="card_description_2" class="form-control" id="card_description_2" rows="3"></input>
                            @error('card_description_2') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                          <!-- Form Actions -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="discardChanges" data-bs-dismiss="modal">Discard</button>
                        <button type="button" class="btn btn-primary" wire:click="create">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
