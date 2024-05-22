<div wire:ignore.self class="modal fade" id="termsconditionAddModal" tabindex="-1" aria-labelledby="termsconditionAddModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="termsconditionAddModalLabel">Add Terms Condition </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="create">
                    <div class="form-group row mb-5">
                        {{-- <div class="col-lg-12" wire:ignore --}}
                 {{-- @trix-blur="$dispatch('change', $event.target.value)" --}}
               
                {{-- <label for="content" class="form-label required mt-2">Terms Condition</label> --}}
                {{-- <input id="x" type="hidden" name="content" wire:model.defer="content">
                <trix-editor input="x" class="form-control"></trix-editor> --}}
                {{-- <textarea class="form-control ckeditor" id="content" name="content"  cols="30" rows="10"
                  wire:model="content"></textarea>
                @error('content') <span class="text-danger">{{ $message }}</span> @enderror
                </div> --}}
                <div class="col-lg-12" wire:ignore>
                    <label for="content" class="form-label required mt-2">Terms & Conditions</label>
                    <textarea class="form-control ckeditor" id="content" name="content" cols="30" rows="10" wire:model.defer="content"></textarea>
                    @error('content') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                    </div>
                        <!-- Form Actions -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" wire:click="discardChanges" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-primary" wire:click.prevent="create">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
   
       {{-- <script>
        ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
</script> --}}

</div>
