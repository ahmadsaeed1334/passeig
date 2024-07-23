<div class="content-profile">
    <div class="content-inner content-inner-panding">
        <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="bi bi-list"></i></span>
        </button>
        <div class="d-flex justify-content-between">
            <h1 class="primary m-2">Profile</h1>
            {{-- <div class="notification">
                <i class="bi bi-bell"></i>
                <span class="badge">3</span>
            </div> --}}
        </div>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        @livewire('profile-photo-upload')
        <form wire:submit.prevent="updateProfile" class="mt-5">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-5 col-12">
                    <input type="text" class="form-control" wire:model="name" placeholder="Full Name">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group col-md-5 mx-md-5">
                    <input type="password" class="form-control" wire:model="password" placeholder="New Password (Leave blank to keep current)">
                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                    <input type="password" class="form-control mt-4" wire:model="password_confirmation" placeholder="Confirm Password (Leave blank to keep current)">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <input type="number" class="form-control" wire:model="phone" placeholder="Phone Number">
                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group col-md-5 mx-md-5">
                    <input type="email" class="form-control" wire:model="email" placeholder="Email Address">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-save">Save Changes</button>
            </div>
        </form>
    </div>
</div>
