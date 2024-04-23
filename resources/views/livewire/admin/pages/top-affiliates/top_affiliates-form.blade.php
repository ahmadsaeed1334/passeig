<div wire:ignore.self class="modal fade" id="topAffiliateAddModal" tabindex="-1" aria-labelledby="topAffiliateAddModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="topAffiliateAddModalLabel">Add Top Affiliate </h5>
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
                    <div class="form-group row">
                        <!-- Image input -->
                        <div class="col-lg-4">
                            <label class="fs-6 fw-semibold form-label mb-2 mt-2">
                                <span class="required">Card image 1</span>
                            </label>
                            <br>
                            <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                <!-- Preview existing file -->
                                <div class="image-input-wrapper" style="background-image: url({{  $card_image_1 ? (is_string($card_image_1) ? asset('storage/'.$card_image_1) : $card_image_1->temporaryUrl()) : asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                </div>
                                <!-- Inputs -->
                                <label class="btn btn-image btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change card_image_1">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <input wire:model="card_image_1" type="file" id="card_image_1" name="file" accept=".jpeg, .png, .jpg, .gif, .mp4, .mov, .ogg, .qt" />
                                    <input type="hidden" name="avatar_remove" />
                                </label>             
                                @error('card_image_1')
                                <div class="text-{{ primary_color() }}">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-text">jpeg,png,jpg,gif,mp4,mov,ogg,qt.</div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="card_name_1" class="form-label required">Card Name 1</label>
                        <input wire:model="card_name_1" class="form-control" id="card_name_1" rows="3"></input>
                        @error('card_name_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="card_amount_1" class="form-label required">Card Amount 1</label>
                        <input wire:model="card_amount_1" class="form-control" id="card_amount_1" rows="3"></input>
                        @error('card_amount_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group row">
                        <!-- Image input -->
                        <div class="col-lg-4">
                            <label class="fs-6 fw-semibold form-label mb-2 mt-2">
                                <span class="required">Card image 2</span>
                            </label>
                            <br>
                            <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                <!-- Preview existing file -->
                                <div class="image-input-wrapper" style="background-image: url({{  $card_image_2 ? (is_string($card_image_2) ? asset('storage/'.$card_image_2) : $card_image_2->temporaryUrl()) : asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                </div>
                                <!-- Inputs -->
                                <label class="btn btn-image btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" name="Change card_image_2">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <input wire:model="card_image_2" type="file" id="card_image_2" name="file" accept=".jpeg, .png, .jpg, .gif, .mp4, .mov, .ogg, .qt" />
                                    <input type="hidden" name="avatar_remove" />
                                </label>             
                                @error('card_image_2')
                                <div class="text-{{ primary_color() }}">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-text">jpeg,png,jpg,gif,mp4,mov,ogg,qt.</div>
                        </div>
                    </div>
                        <div class="mb-3">
                            <label for="card_name_2" class="form-label required">Card Name 2</label>
                            <input wire:model="card_name_2" class="form-control" id="card_name_2" rows="3"></input>
                            @error('card_name_2') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="card_amount_2" class="form-label required">Card Amount 2</label>
                            <input wire:model="card_amount_2" class="form-control" id="card_amount_2" rows="3"></input>
                            @error('card_amount_2') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group row">
                            <!-- Image input -->
                            <div class="col-lg-4">
                                <label class="fs-6 fw-semibold form-label mb-2 mt-2">
                                    <span class="required">Card image 3</span>
                                </label>
                                <br>
                                <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                    <!-- Preview existing file -->
                                    <div class="image-input-wrapper" style="background-image: url({{  $card_image_3 ? (is_string($card_image_3) ? asset('storage/'.$card_image_3) : $card_image_3->temporaryUrl()) : asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                    </div>
                                    <!-- Inputs -->
                                    <label class="btn btn-image btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" name="Change card_image_3">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <input wire:model="card_image_3" type="file" id="card_image_1" name="file" accept=".jpeg, .png, .jpg, .gif, .mp4, .mov, .ogg, .qt" />
                                        <input type="hidden" name="avatar_remove" />
                                    </label>             
                                    @error('card_image_3')
                                    <div class="text-{{ primary_color() }}">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-text">jpeg,png,jpg,gif,mp4,mov,ogg,qt.</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="card_name_3" class="form-label required">Card Name 3</label>
                            <input wire:model="card_name_3" class="form-control" id="card_name_3" rows="3"></input>
                            @error('card_name_3') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="card_amount_3" class="form-label required">Card Amount 3</label>
                            <input wire:model="card_amount_3" class="form-control" id="card_amount_3" rows="3"></input>
                            @error('card_amount_3') <span class="text-danger">{{ $message }}</span> @enderror
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
