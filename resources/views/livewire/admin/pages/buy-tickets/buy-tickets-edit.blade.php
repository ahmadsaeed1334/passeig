<div wire:ignore.self class="modal fade" id="buyTicketEditModal" tabindex="-1" aria-labelledby="buyTicketEditModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="buyTicketEditModalLabel">Edit Buy Ticket </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="update">
                    <div class="form-group row">
                        <div class="col-lg-6">
                        <label for="subtitle" class="form-label required mt-2">Subtitle</label>
                        <input wire:model="subtitle" type="text" class="form-control" id="subtitle">
                        @error('subtitle') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                        <div class="col-lg-6">
                        <label for="title" class="form-label required mt-2">Title</label>
                        <input wire:model="title" type="text" class="form-control" id="title">
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12">
                        <label for="description" class="form-label required mt-2">Description</label>
                        <textarea wire:model="description" class="form-control" id="description" rows="3"></textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-lg-4">
                        <label for="btn_title" class="form-label required mt-2">Button Title</label>
                        <input wire:model="btn_title" class="form-control" id="btn_title" rows="3"></input>
                        @error('btn_title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                        <div class="col-lg-4">
                        <label for="btn_text" class="form-label required mt-2">Button Text</label>
                        <input wire:model="btn_text" class="form-control" id="btn_text" rows="3"></input>
                        @error('btn_text') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                   
                        <div class="col-lg-4">
                            <label for="cart_top_text" class="form-label required mt-2">Cart Top Text</label>
                            <input wire:model="cart_top_text" class="form-control" id="cart_top_text" rows="3"></input>
                            @error('cart_top_text') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                            <label for="cart_amount_1" class="form-label required mt-2">Cart Amount 1</label>
                            <input wire:model="cart_amount_1" class="form-control" id="cart_amount_1" rows="3"></input>
                            @error('cart_amount_1') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                       
                            <div class="col-lg-6">
                            <label for="cart_text_1" class="form-label required mt-2">Cart Text 1</label>
                            <input wire:model="cart_text_1" class="form-control" id="cart_text_1" rows="3"></input>
                            @error('cart_text_1') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                            <label for="cart_amount_2" class="form-label required mt-2">Cart Amount 2</label>
                            <input wire:model="cart_amount_2" class="form-control" id="cart_amount_2" rows="3"></input>
                            @error('cart_amount_2') <span class="text-danger">{{ $message }}</span> @enderror
                        </div> 
                        
                            <div class="col-lg-6">
                            <label for="cart_text_2" class="form-label required mt-2">Cart Text 2</label>
                            <input wire:model="cart_text_2" class="form-control" id="cart_text_2" rows="3"></input>
                            @error('cart_text_2') <span class="text-danger">{{ $message }}</span> @enderror
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
