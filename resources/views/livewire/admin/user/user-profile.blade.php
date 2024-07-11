<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    {{-- @include('livewire.admin.partial.preloader') --}}
    <div class="d-flex flex-column flex-column-fluid">
<div id="kt_app_content" class="app-content flex-column-fluid">
    <div id="kt_app_content_container" class="app-container container{{ general('layout') }}">
        <div class="card card-flush">
            <div class="card-header mt-6">
                <div class="card-title">
                    <h1>{{ Str::between($user->getRoleNames(), '["', '"]') }}</h1>

                </div>

            </div>
    <x-slot name="page_title">
        {{ $page_title ?? 'User' }}
    </x-slot>


    <form wire:submit.prevent="save">
        <div class="form-group ms-3 me-3 mt-3">
            <label for="name" class="mb-3  required">Name</label>
            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" wire:model="name">
            @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>

        <div class="form-group ms-3 me-3 mt-3">
            <label for="email" class="mb-3 required">Email</label>
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" wire:model="email">
            @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>

        <div class="form-group ms-3 me-3 mt-3">
            <label for="password" class="mb-3  required">Password</label>
            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" wire:model="password">
            @error('password') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>

        <div class="form-group ms-3 me-3 mt-3">
            <label for="password_confirmation" class="mb-3  required">Confirm Password</label>
            <input type="password" id="password_confirmation" class="form-control" wire:model="password_confirmation">
        </div>
        <div class="form-group row ms-3 me-3 mt-3">
            <div class="col-lg-4">
                <label class="fs-6 fw-semibold form-label mb-2 mt-2">
                    <span class="required">Profile Photo</span>
                </label>
                <br>
                <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
                    <div class="image-input-wrapper" style="background-image: url({{ $photo ? (is_string($photo) ? asset('storage/'.$photo) : $photo->temporaryUrl()) : asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px"></div>
                    <label class="btn btn-icon btn-circle btn-active-color-{{ primary_color() }} w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" name="Change image">
                        <i class="bi bi-pencil-fill fs-7"></i>
                        <input wire:model="photo" type="file" id="card_image_1" name="file" accept=".jpeg, .png, .jpg, .gif, .mp4, .mov, .ogg, .qt" />
                        <input type="hidden" name="avatar_remove" />
                    </label>
                    @error('image') <div class="text-{{ primary_color() }}">{{ $message }}</div> @enderror
                </div>
                <div class="form-text">jpeg, png, jpg, gif, mp4, mov, ogg, qt.</div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary ms-3  mt-3 mb-5">Submit</button>
    </form>
</div>
</div>
</div>
</div>
</div>
