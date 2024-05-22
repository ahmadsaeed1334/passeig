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
                        <div class="col-lg-12" wire:ignore>
                            <label for="content" class="form-label required mt-2">Terms & Conditions</label>
                            <textarea class="form-control ckeditor" id="contentEdit" name="content" cols="30" rows="10" wire:model.defer="content"></textarea>
                            @error('content') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                        <!-- Form Actions -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" wire:click="discardChanges" data-bs-dismiss="modal">Discard</button>
                        <button type="button" class="btn btn-primary" wire:click="update">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script> --}}
       
    {{-- <script>
    ClassicEditor
        .create(document.querySelector('#contentEdit'))
        .then(editor => {
            editor.model.document.on('change:data', () => {
                @this.set('contentEdit', editor.getData());
            });
        })
        .catch(error => {
            console.error(error);
        });
      </script> --}}

      {{-- <script>
          document.addEventListener('livewire:load', function () {
              Livewire.on('initCkEditor', (data) => {
                  ClassicEditor
                      .create(document.querySelector('#content'), {
                          // CKEditor configuration options
                      })
                      .then(editor => {
                          editor.setData(data.content);
                          editor.model.document.on('change:data', () => {
                              @this.set('content', editor.getData());
                          });
                      })
                      .catch(error => {
                          console.error(error);
                      });
              });
          });
      </script> --}}
      
</div>
