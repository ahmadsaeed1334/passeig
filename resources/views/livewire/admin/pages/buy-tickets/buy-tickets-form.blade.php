<div wire:ignore.self class="modal fade" id="buyTicketAddModal" tabindex="-1" aria-labelledby="buyTicketAddModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="buyTicketAddModalLabel">Add Buy Ticket </h5>
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
                        <label for="btn_title" class="form-label required">Button Title</label>
                        <input wire:model="btn_title" class="form-control" id="btn_title" rows="3"></input>
                        @error('btn_title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="btn_text" class="form-label required">Button Text</label>
                        <input wire:model="btn_text" class="form-control" id="btn_text" rows="3"></input>
                        @error('btn_text') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                        <div class="mb-3">
                            <label for="cart_top_text" class="form-label required">Cart Top Text</label>
                            <input wire:model="cart_top_text" class="form-control" id="cart_top_text" rows="3"></input>
                            @error('cart_top_text') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="cart_amount_1" class="form-label required">Cart Amount 1</label>
                            <input wire:model="cart_amount_1" class="form-control" id="cart_amount_1" rows="3"></input>
                            @error('cart_amount_1') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="cart_text_1" class="form-label required">Cart Text 1</label>
                            <input wire:model="cart_text_1" class="form-control" id="cart_text_1" rows="3"></input>
                            @error('cart_text_1') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="cart_amount_2" class="form-label required">Cart Amount 2</label>
                            <input wire:model="cart_amount_2" class="form-control" id="cart_amount_2" rows="3"></input>
                            @error('cart_amount_2') <span class="text-danger">{{ $message }}</span> @enderror
                        </div> 
                        <div class="mb-3">
                            <label for="cart_text_2" class="form-label required">Cart Text 2</label>
                            <input wire:model="cart_text_2" class="form-control" id="cart_text_2" rows="3"></input>
                            @error('cart_text_2') <span class="text-danger">{{ $message }}</span> @enderror
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
