<div>
    <form wire:submit.prevent="create">
        <div class="form-group row mb-5">
            <div class="col-lg-12">
            <label for="terms" class="form-label required mt-2">Terms Condition</label>
            <textarea wire:model="terms" type="text" class="form-control" id="myeditorinstance">Hello, World!</textarea>
            @error('terms') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        </div>
        
            
            <!-- Form Actions -->
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" wire:click="discardChanges" data-bs-dismiss="modal">Discard</button>
            <button type="button" class="btn btn-primary" wire:click="create">Submit</button>
        </div>
    </form>
    {{-- <form method="post">
        <textarea id="myeditorinstance">Hello, World!</textarea>
      </form> --}}
</div>