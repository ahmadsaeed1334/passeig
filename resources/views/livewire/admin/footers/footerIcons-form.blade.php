<div wire:ignore.self class="modal fade" id="footerIconsAddModal" tabindex="-1" aria-labelledby="footerIconsAddModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="footerIconsAddModalLabel">Add Footer Icon</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="create">
                    <div class="form-group row">
                    <div class="col-lg-6">
                        <label for="icon_class" class="form-label required mt-2">Icon</label>
                        <input wire:model="icon_class" type="text" class="form-control" id="icon_class">
                        @error('icon_class') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-lg-6">
                        <label for="url" class="form-label required mt-2">Icon URL</label>
                        <input wire:model="url" type="text" class="form-control" id="url">
                        @error('url') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" wire:click="discardChanges" data-bs-dismiss="modal">Discard</button>
                    <button type="button" class="btn btn-primary" wire:click="create">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<div wire:ignore.self class="modal fade" id="footerTextAddModal" tabindex="-1" aria-labelledby="footerTextAddModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="footerTextAddModalLabel">Edit Footer Text</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="footerTextCreate">
                    <div class="form-group row">
                    <div class="col-lg-12">
                        <label for="text" class="form-label required mt-2">Text</label>
                        <input wire:model="text" type="text" class="form-control" id="text">
                        @error('text') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                    <div class="form-group row">
                    <div class="col-lg-6">
                        <label for="link_text" class="form-label required mt-2">Name</label>
                        <input wire:model="link_text" type="text" class="form-control" id="link_text">
                        @error('link_text') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-lg-6">
                        <label for="link_url" class="form-label required mt-2">Name Link</label>
                        <input wire:model="link_url" type="text" class="form-control" id="link_url">
                        @error('link_url') <span class="text-danger">{{ $message }}</span> @enderror
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="footerdiscardChanges" data-bs-dismiss="modal">Discard</button>
                    <button type="button" class="btn btn-primary" wire:click="footerTextCreate">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
