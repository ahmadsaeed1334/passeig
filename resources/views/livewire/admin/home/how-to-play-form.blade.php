<div wire:ignore.self class="modal fade" id="howToPlayAddModal" tabindex="-1" aria-labelledby="howToPlayModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="howToPlayModalLabel">Add How To Play</h5>
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
                        <label for="play_card_icon_1" class="form-label required">Play Card Icon 1</label>
                        <input wire:model="play_card_icon_1" type="file" class="form-control" id="play_card_icon_1" rows="3"></input>
                        @error('play_card_icon_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="play_card_title_1" class="form-label required">Play Card Title 1</label>
                        <input wire:model="play_card_title_1" class="form-control" id="play_card_title_1" rows="3"></input>
                        @error('play_card_title_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="play_card_description_1" class="form-label required">Play Card Description 1</label>
                        <input wire:model="play_card_description_1" class="form-control" id="play_card_description_1" rows="3"></input>
                        @error('play_card_description_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3"> 
                        <label for="play_card_icon_2" class="form-label required">Play Card Icon 2</label>
                        <input wire:model="play_card_icon_2" type="file" class="form-control" id="play_card_icon_2" rows="3"></input>
                        @error('play_card_icon_2') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="play_card_title_2" class="form-label required">Play Card Title 2</label>
                            <input wire:model="play_card_title_2" class="form-control" id="play_card_title_2" rows="3"></input>
                            @error('play_card_title_2') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="play_card_description_2" class="form-label required">Play Card Description 2</label>
                            <input wire:model="play_card_description_2" class="form-control" id="play_card_description_2" rows="3"></input>
                            @error('play_card_description_2') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="play_card_icon_3" class="form-label required">Play Card Icon 3</label>
                            <input wire:model="play_card_icon_3" type="file" class="form-control" id="play_card_icon_3" rows="3"></input>
                            @error('play_card_icon_3') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="play_card_title_3" class="form-label required">Play Card Title 3</label>
                            <input wire:model="play_card_title_3" class="form-control" id="play_card_title_3" rows="3"></input>
                            @error('play_card_title_3') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="play_card_description_3" class="form-label required">Play Card Description 3</label>
                            <input wire:model="play_card_description_3" class="form-control" id="play_card_description_3" rows="3"></input>
                            @error('play_card_description_3') <span class="text-danger">{{ $message }}</span> @enderror
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
