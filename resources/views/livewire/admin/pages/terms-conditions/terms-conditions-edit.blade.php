<div wire:ignore.self class="modal fade" id="termsconditionEditModal" tabindex="-1" aria-labelledby="termsconditionEditModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="termsconditionEditModalLabel">Edit Terms Condition </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="update">
                    <div class="form-group row">
                        <div class="col-lg-12" wire:ignore x-data
                        {{-- @trix-blur="$dispatch('change', $event.target.value)" --}}
                        >
                       <label for="content" class="form-label required mt-2">Terms Condition</label>
                       <input wire:ignore id="x" type="hidden" name="content">
                       <trix-editor input="x"  wire:model="content" class="form-control"></trix-editor>
                       @error('content') <span class="text-danger">{{ $message }}</span> @enderror
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
