<div wire:ignore.self class="modal fade" id="giveawaySpecificationAddModal" tabindex="-1" aria-labelledby="giveawaySpecificationAddModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="giveawaySpecificationAddModalLabel">Add Giveaway Specifications  </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="create">
                    {{-- <input type="hidden" wire:model="giveawaySpecificationsId"> --}}
                    <div class="mb-3">
                        <label for="giveaway" class="form-label required">Select Giveaway</label>
                        <select wire:model="selectedGiveawayId" class="form-control" id="giveaway">
                            <option value="">-- Choose Giveaway --</option>
                            @foreach($giveaways as $giveaway)
                                <option value="{{ $giveaway->id }}">{{ $giveaway->name }}</option>
                            @endforeach
                        </select>
                        @error('selectedGiveawayId') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group row">
                        <!-- Image input -->
                        <div class="col-lg-4">
                            <label class="fs-6 fw-semibold form-label mb-2 mt-2">
                                <span class="required">Card Icon</span>
                            </label>
                            <br>
                            <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                <!-- Preview existing file -->
                                <div class="image-input-wrapper" style="background-image: url({{ $card_icon ? (is_string($card_icon) ? asset('storage/'.$card_icon) : $card_icon->temporaryUrl()) : asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                </div>
                                <!-- Inputs -->
                                <label class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change card_icon">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <input wire:model="card_icon" type="file" id="card_icon" name="file" accept=".jpeg, .png, .jpg, .gif, .mp4, .mov, .ogg, .qt" />
                                    <input type="hidden" name="avatar_remove" />
                                </label>
                                @error('card_icon')
                                <div class="text-{{ primary_color() }}">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-text">jpeg,png,jpg,gif,mp4,mov,ogg,qt.</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label required">Card Title </label>
                        <input wire:model="title" class="form-control" id="title" rows="3"></input>
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="card_value" class="form-label required">Card Value</label>
                        <input wire:model="value" class="form-control" id="card_value" rows="3"></input>
                        @error('card_value') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <!-- Form Actions -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" wire:click="discardChanges" data-bs-dismiss="modal">Discard</button>
                        <button type="button" class="btn btn-primary" wire:click="create">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>