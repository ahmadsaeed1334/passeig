<div>
    <x-slot name="page_title">
        Services
    </x-slot>

    <section class="py_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form wire:submit.prevent="store">
                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="title">Title</label>
                            <input type="text" class="form-control" id="title" wire:model.live="title">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="short_description">Short Description</label>
                            <input type="text" class="form-control" id="short_description" wire:model.live="short_description">
                            @error('short_description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group ms-3 me-3 mt-3">
                            <div class="col-lg-4">
                                <label class="mb-3 ms-3 required" class="fs-6 fw-semibold form-label mb-2 mt-2">
                                    <span class="required">Image</span>
                                </label>
                                <br>
                                <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                    <div class="image-input-wrapper" id="image-preview" style="background-size:100% 100%;width:300px">
                                    </div>
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change image">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <input name="image" type="file" id="image" wire:model.live="image">
                                        <input type="hidden" name="avatar_remove">
                                    </label>
                                    @error('image')
                                    <div class="text-primary">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-text">jpeg, png, jpg, gif.</div>
                            </div>
                        </div>
                        <div class="form-group ms-3 me-3 mt-3">
                            <label class="mb-3 ms-3 required" for="long_description">Long Description</label>
                            <textarea class="form-control" id="long_description" wire:model.live="long_description" rows="5"></textarea>
                            @error('long_description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <button type="submit" class="btn btn-primary ms-3 mt-3 mb-5">Submit</button>
                    </form>
                </div>
                <div class="col-lg-4">
                    <h3>Preview</h3>
                    @livewire('front.service-preview', ['title' => $title, 'short_description' => $short_description, 'long_description' => $long_description, 'image' => $image])
                </div>
            </div>
        </div>
    </section>
</div>
