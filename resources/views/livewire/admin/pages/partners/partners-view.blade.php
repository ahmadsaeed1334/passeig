<div class="card-body scroll-x pt-0 mt-0">
    @forelse($partners->chunk(3) as $chunk)
        <div class="row">
            @foreach($chunk as $partner)
                <div class="col-lg-4">
                    <div class="form-group mt-6">

                        <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                            <!-- Preview existing file -->
                            <div class="image-input-wrapper" style="background-image: url({{ asset('storage/'.$partner->partner_image) }}); background-size:100% 100%;width:300px"></div>
                            <!-- Inputs -->
                            <label class="btn btn-icon btn-circle mt-3 btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" name="Change partner_image">
                                <button wire:click="edit({{ $partner->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" data-bs-toggle="modal" data-bs-target="#partnerImageEditModal" {!! show_toltip('Update Partner Image') !!}> <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i></button>
                            </label>
                             <!-- Cancel -->
                             <span class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Logo">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <!-- Remove -->
                            @if ($partner )
                            <span wire:click.prevent="delete({{ $partner->id }})" {!! confirm() !!} class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove Image">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            @endif
                            @error('partner_image')
                                <div class="text-{{ primary_color() }}">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                </div>
            @endforeach
        </div>
    @empty
        {!! no_data() !!}
    @endforelse
</div>
