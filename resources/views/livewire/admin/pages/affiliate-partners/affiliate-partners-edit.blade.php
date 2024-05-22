<div wire:ignore.self class="modal fade" id="affiliatePartnerEditModal" tabindex="-1" aria-labelledby="affiliatePartnerEditModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="affiliatePartnerEditModalLabel">Edit Affiliate Partner</h5>
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
                        <!-- Image input -->
                        <div class="col-lg-4">
                            <label class="fs-6 fw-semibold form-label mb-2 mt-2">
                                <span class="required mt-2">Card Icon 1</span>
                            </label>
                            <br>
                            <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                <!-- Preview existing file -->
                                <div class="image-input-wrapper" style="background-image: url({{  $card_icon_1 ? (is_string($card_icon_1) ? asset('storage/'.$card_icon_1) : $card_icon_1->temporaryUrl()) : asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                </div>
                                <!-- Inputs -->
                                <label class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change card_icon_1">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <input wire:model="card_icon_1" type="file" id="card_icon_1" name="file" accept=".jpeg, .png, .jpg, .gif, .mp4, .mov, .ogg, .qt" />
                                    <input type="hidden" name="avatar_remove" />
                                </label>             
                                @error('card_icon_1')
                                <div class="text-{{ primary_color() }}">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-text">jpeg,png,jpg,gif,mp4,mov,ogg,qt.</div>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-lg-6">
                        <label for="card_title_1" class="form-label required mt-2">Card Title 1</label>
                        <input wire:model="card_title_1" class="form-control" id="card_title_1" rows="3"></input>
                        @error('card_title_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                        <div class="col-lg-6">
                        <label for="card_description_1" class="form-label required mt-2">Card Description 1</label>
                        <textarea wire:model="card_description_1" class="form-control" id="card_description_1" rows="3"></textarea>
                        @error('card_description_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    </div>
                    <div class="form-group row">
                        <!-- Image input -->
                        <div class="col-lg-4">
                            <label class="fs-6 fw-semibold form-label mb-2 mt-2">
                                <span class="required mt-2">Card Icon 2</span>
                            </label>
                            <br>
                            <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                <!-- Preview existing file -->
                                <div class="image-input-wrapper" style="background-image: url({{  $card_icon_2 ? (is_string($card_icon_2) ? asset('storage/'.$card_icon_2) : $card_icon_2->temporaryUrl()) : asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                </div>
                                <!-- Inputs -->
                                <label class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change card_icon_2">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <input wire:model="card_icon_2" type="file" id="card_icon_2" name="file" accept=".jpeg, .png, .jpg, .gif, .mp4, .mov, .ogg, .qt" />
                                    <input type="hidden" name="avatar_remove" />
                                </label>             
                                @error('card_icon_2')
                                <div class="text-{{ primary_color() }}">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-text">jpeg,png,jpg,gif,mp4,mov,ogg,qt.</div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label for="card_title_2" class="form-label required mt-2">Card Title 2</label>
                            <input wire:model="card_title_2" class="form-control" id="card_title_2" rows="3"></input>
                            @error('card_title_2') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                      
                            <div class="col-lg-6">
                            <label for="card_description_2" class="form-label required mt-2">Card Description 2</label>
                            <textarea wire:model="card_description_2" class="form-control" id="card_description_2" rows="3"></textarea>
                            @error('card_description_2') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        </div>
                        <div class="form-group row">
                            <!-- Image input -->
                            <div class="col-lg-4">
                                <label class="fs-6 fw-semibold form-label mb-2 mt-2">
                                    <span class="required mt-2">Card Icon 3</span>
                                </label>
                                <br>
                                <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                    <!-- Preview existing file -->
                                    <div class="image-input-wrapper" style="background-image: url({{  $card_icon_3 ? (is_string($card_icon_3) ? asset('storage/'.$card_icon_3) : $card_icon_3->temporaryUrl()) : asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                    </div>
                                    <!-- Inputs -->
                                    <label class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change card_icon_3">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <input wire:model="card_icon_3" type="file" id="card_icon_1" name="file" accept=".jpeg, .png, .jpg, .gif, .mp4, .mov, .ogg, .qt" />
                                        <input type="hidden" name="avatar_remove" />
                                    </label>             
                                    @error('card_icon_3')
                                    <div class="text-{{ primary_color() }}">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-text">jpeg,png,jpg,gif,mp4,mov,ogg,qt.</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                            <label for="card_title_3" class="form-label required mt-2">Card Title 3</label>
                            <input wire:model="card_title_3" class="form-control" id="card_title_3" rows="3"></input>
                            @error('card_title_3') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                       
                            <div class="col-lg-6">
                            <label for="card_description_3" class="form-label required mt-2">Card Description 3</label>
                            <textarea wire:model="card_description_3" class="form-control" id="card_description_3" rows="3"></textarea>
                            @error('card_description_3') <span class="text-danger">{{ $message }}</span> @enderror
                        </div> 
                        </div> 
                        <div class="form-group row">
                            <!-- Image input -->
                            <div class="col-lg-4">
                                <label class="fs-6 fw-semibold form-label mb-2 mt-2">
                                    <span class="required mt-2">Card Icon 4</span>
                                </label>
                                <br>
                                <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                    <!-- Preview existing file -->
                                    <div class="image-input-wrapper" style="background-image: url({{  $card_icon_4 ? (is_string($card_icon_4) ? asset('storage/'.$card_icon_4) : $card_icon_4->temporaryUrl()) : asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                    </div>
                                    <!-- Inputs -->
                                    <label class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change card_icon_4">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <input wire:model="card_icon_4" type="file" id="card_icon_4" name="file" accept=".jpeg, .png, .jpg, .gif, .mp4, .mov, .ogg, .qt" />
                                        <input type="hidden" name="avatar_remove" />
                                    </label>             
                                    @error('card_icon_4')
                                    <div class="text-{{ primary_color() }}">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-text">jpeg,png,jpg,gif,mp4,mov,ogg,qt.</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                            <label for="card_title_4" class="form-label required mt-2">Card Title 4</label>
                            <input wire:model="card_title_4" class="form-control" id="card_title_4" rows="3"></input>
                            @error('card_title_4') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        
                            <div class="col-lg-6">
                            <label for="card_description_4" class="form-label required mt-2">Card Description 4</label>
                            <textarea wire:model="card_description_4" class="form-control" id="card_description_4" rows="3"></textarea>
                            @error('card_description_4') <span class="text-danger">{{ $message }}</span> @enderror
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
</div>
