<div wire:ignore.self class="modal fade" id="teamsAddModal" tabindex="-1" aria-labelledby="teamsAddModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="teamsAddModalLabel">Add Teams</h5>
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
                                <span class="required">Team Image 1</span>
                            </label>
                            <br>
                            <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                <!-- Preview existing file -->
                                <div class="image-input-wrapper" style="background-image: url({{  $team_image_1 ? (is_string($team_image_1) ? asset('storage/'.$team_image_1) : $team_image_1->temporaryUrl()) : asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                </div>
                                <!-- Inputs -->
                                <label class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change team_image_1">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <input wire:model="team_image_1" type="file" id="team_image_1" name="file" accept=".jpeg, .png, .jpg, .gif, .mp4, .mov, .ogg, .qt" />
                                    <input type="hidden" name="avatar_remove" />
                                </label>             
                                @error('team_image_1')
                                <div class="text-{{ primary_color() }}">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-text">jpeg,png,jpg,gif,mp4,mov,ogg,qt.</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="team_name_1" class="form-label required">Team Name 1</label>
                        <input wire:model="team_name_1" class="form-control" id="team_name_1" rows="3"></input>
                        @error('team_name_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="team_designation_1" class="form-label required">Team Designation 1</label>
                        <input wire:model="team_designation_1" class="form-control" id="team_designation_1" rows="3"></input>
                        @error('team_designation_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group row">
                        <!-- Image input -->
                        <div class="col-lg-4">
                            <label class="fs-6 fw-semibold form-label mb-2 mt-2">
                                <span class="required">Team Image 2</span>
                            </label>
                            <br>
                            <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                <!-- Preview existing file -->
                                <div class="image-input-wrapper" style="background-image: url({{  $team_image_2 ? (is_string($team_image_2) ? asset('storage/'.$team_image_2) : $team_image_2->temporaryUrl()) : asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                </div>
                                <!-- Inputs -->
                                <label class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change team_image_2">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <input wire:model="team_image_2" type="file" id="team_image_2" name="file" accept=".jpeg, .png, .jpg, .gif, .mp4, .mov, .ogg, .qt" />
                                    <input type="hidden" name="avatar_remove" />
                                </label>             
                                @error('team_image_2')
                                <div class="text-{{ primary_color() }}">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-text">jpeg,png,jpg,gif,mp4,mov,ogg,qt.</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="team_name_2" class="form-label required">Team Name 2</label>
                        <input wire:model="team_name_2" class="form-control" id="team_name_2" rows="3"></input>
                        @error('team_name_2') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="team_designation_2" class="form-label required">Team Designation 2</label>
                        <input wire:model="team_designation_2" class="form-control" id="team_designation_2" rows="3"></input>
                        @error('team_designation_2') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group row">
                        <!-- Image input -->
                        <div class="col-lg-4">
                            <label class="fs-6 fw-semibold form-label mb-2 mt-2">
                                <span class="required">Team Image 3</span>
                            </label>
                            <br>
                            <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                <!-- Preview existing file -->
                                <div class="image-input-wrapper" style="background-image: url({{  $team_image_3 ? (is_string($team_image_3) ? asset('storage/'.$team_image_3) : $team_image_3->temporaryUrl()) : asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                </div>
                                <!-- Inputs -->
                                <label class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change team_image_3">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <input wire:model="team_image_3" type="file" id="team_image_3" name="file" accept=".jpeg, .png, .jpg, .gif, .mp4, .mov, .ogg, .qt" />
                                    <input type="hidden" name="avatar_remove" />
                                </label>             
                                @error('team_image_3')
                                <div class="text-{{ primary_color() }}">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-text">jpeg,png,jpg,gif,mp4,mov,ogg,qt.</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="team_name_3" class="form-label required">Team Name 3</label>
                        <input wire:model="team_name_3" class="form-control" id="team_name_3" rows="3"></input>
                        @error('team_name_3') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="team_designation_3" class="form-label required">Team Designation 3</label>
                        <input wire:model="team_designation_3" class="form-control" id="team_designation_3" rows="3"></input>
                        @error('team_designation_3') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                     <!-- Form Actions -->
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="discardChanges" data-bs-dismiss="modal">Discard</button>
                        <button type="button" class="btn btn-primary" wire:click="create">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



