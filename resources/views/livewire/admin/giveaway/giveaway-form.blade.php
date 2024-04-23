<!-- Modal for Giveaway Form -->
<div wire:ignore.self class="modal fade" id="addGiveawayModal" tabindex="-1" aria-labelledby="addGiveawayModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addGiveawayModalLabel">Add Giveaway</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="create" id="addGiveawayModel_form" class="form" action="#" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Input group-->
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mb-2">
                                <span class="required">Name</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Name is required to be unique."></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input wire:model="name" class="form-control form-control-solid" type="text" placeholder="Enter a Name" name="name" id="name" />
                            @error('name')
                            <div class="text-{{ primary_color() }}">{{ $message }}</div>
                            @enderror
                            <!--end::Input-->
                        </div>
                        <!-- Add similar structure for other input fields -->
                        <!-- Short Description -->
                        <div class="col-lg-8">
                            <label class="fs-6 fw-semibold form-label mb-2 ">
                                <span class="required">Short Description</span>
                            </label>
                            <input wire:model="short_description" class="form-control form-control-solid" type="text" placeholder="Enter a Short Description" name="short_description" id="short_description" />
                            @error('short_description')
                            <div class="text-{{ primary_color() }}">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <!-- Long Description -->
                        <div class="col-lg-8">
                            <label class="fs-6 fw-semibold form-label mb-2 mt-2">
                                <span class="required">Description</span>
                            </label>
                            <input wire:model="long_description" class="form-control form-control-solid" type="text" placeholder="Enter a Description" name="long_description" id="long_description" />
                            @error('long_description')
                            <div class="text-{{ primary_color() }}">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Fee -->
                        <div class="col-lg-4">
                            <label class="fs-6 fw-semibold form-label mb-2 mt-2">
                                <span class="required">Fee</span>
                            </label>
                            <input wire:model="fee" class="form-control form-control-solid" type="number" placeholder="Enter a Fee" name="fee" id="fee" />
                            @error('fee')
                            <div class="text-{{ primary_color() }}">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <!-- Start Date -->
                        <div class="col-lg-6">
                            <label class="fs-6 fw-semibold form-label mb-2 mt-2">
                                <span class="required">Start Date</span>
                            </label>
                            <input wire:model="start_date" class="form-control form-control-solid" type="date" placeholder="Enter a Start Date" name="start_date" id="start_date" />
                            @error('start_date')
                            <div class="text-{{ primary_color() }}">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Due Date -->
                        <div class="col-lg-6">
                            <label class="fs-6 fw-semibold form-label mb-2 mt-2">
                                <span class="required">Due Date</span>
                            </label>
                            <input wire:model="due_date" class="form-control form-control-solid" type="date" placeholder="Enter a Due Date" name="due_date" id="due_date" />
                            @error('due_date')
                            <div class="text-{{ primary_color() }}">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <div class="form-group row">
                        {{-- Actual Price --}}
                        <div class="col-lg-6">
                            <label class="fs-6 fw-semibold form-label mb-2 mt-2">
                                <span class="required">Actual Price</span>
                            </label>
                            <input wire:model="actual_price" class="form-control form-control-solid" type="number" placeholder="Enter a Actual Price" name="actual_price" id="actual_price" />
                            @error('actual_price')
                            <div class="text-{{ primary_color() }}">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Status -->
                        <div class="col-lg-6">
                            <label class="fs-6 fw-semibold form-label mb-2 mt-2">
                                <span class="required">Status</span>
                            </label>
                            <select wire:model="status" class="form-control form-control-solid" id="status">
                                <option value="">Select</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>

                            @error('status')
                            <div class="text-{{ primary_color() }}">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <label class="fs-6 fw-semibold form-label mb-2 mt-2 required">Categories</label>
        
                                    <select wire:model="selectedCategories" class="form-select">
                                        <option >Select Categories</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('selectedCategories')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>
                    <!-- File -->
                    <!-- Image Upload -->
                    <div class="form-group row">
                        <!-- Image input -->
                        <div class="col-lg-4">
                            <label class="fs-6 fw-semibold form-label mb-2 mt-2">
                                <span class="required">File</span>
                            </label>
                            <br>
                            <!-- Image input -->
                            <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                <!-- Preview existing avatar -->
                                {{-- <div class="image-input-wrapper" style="background-image: url({{ is_string($file) ? asset($file) : ($file ? $file->temporaryUrl() : asset('img/bg-back.jpg'))}}); background-size:100% 100%;width:300px">
                                </div> --}}
                                <div class="image-input-wrapper" style="background-image: url({{ $file ? (is_string($file) ? asset($file) : $file->temporaryUrl()) : asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                                </div>                                
                                <!-- Inputs -->
                                <label class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change File">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <input wire:model="file" type="file" name="file" accept=".jpeg, .png, .jpg, .gif, .mp4, .mov, .ogg, .qt" />
                                    <input type="hidden" name="avatar_remove" />

                                </label>
                                <!-- Cancel -->
                                <span class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Logo">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!-- Remove -->
                                @if ($file )
                                <span wire:click.prevent="fileDelete" class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove file">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                @endif
                                @error('file')
                                <div class="text-{{ primary_color() }}">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-text">jpeg,png,jpg,gif,mp4,mov,ogg,qt.</div>
                        </div>
                    </div>
                    
                    <!-- Form Actions -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="discardChanges" data-bs-dismiss="modal">Discard</button>
                        <button type="button" class="btn btn-primary" wire:click="create">Submit</button>
                    </div>
                </form>
            </div>
            <!-- You can add footer content if needed -->
        </div>
    </div>
</div>
<div wire:ignore.self class="modal fade" id="contestTopAddModal" tabindex="-1" aria-labelledby="contestTopAddModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contestTopAddModalLabel">Add Contest Top </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="createContestTops">
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
                        <textarea wire:model="description" class="form-control" id="description" rows="3"></textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                
                        <!-- Form Actions -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="discardChanges" data-bs-dismiss="modal">Discard</button>
                        <button type="button" class="btn btn-primary" wire:click="createContestTops">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
