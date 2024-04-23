<div wire:ignore.self class="modal fade" id="addHeroBannerModal" tabindex="-1" aria-labelledby="addHeroBannerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addHeroBannerModalLabel">Add Hero Banner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="createHeroBanner">
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input wire:model="title" type="text" class="form-control" id="title" placeholder="Enter title">
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Subtitle</label>
                        <input wire:model="subtitle" type="text" class="form-control" id="subtitle" placeholder="Enter subtitle">
                        @error('subtitle') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input wire:model="description" type="text" class="form-control" id="description" placeholder="Enter description">
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="button_text" class="form-label">Button Text</label>
                        <input wire:model="button_text" type="text" class="form-control" id="button_text" placeholder="Enter button text">
                        @error('button_text') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="mb-3">
                            <label for="button_link" class="form-label">Button Link</label>
                            <input wire:model="button_link" type="text" class="form-control" id="button_link" placeholder="Enter button link">
                            @error('button_link') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                       
                    <div class="mb-3">
                        <label for="file" class="form-label">File</label>
                        <input wire:model="file" type="file" class="form-control" id="file">
                        @error('file') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


                   