<div>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="profile-photo text-center">
        <img id="profileImage" src="{{ asset(auth()->user()->profile_photo_path ? 'storage/' . auth()->user()->profile_photo_path : 'assets/images/Bitmap.png') }}" alt="Profile Photo" width="100px" height='100px' class="img-radius mt-5">
        <div class="mt-3"><a href="#" onclick="document.getElementById('profile_photo').click()">Upload Profile Photo</a></div>
    </div>
    <input type="file" id="profile_photo" wire:model="profilePhoto" class="d-none" accept="image/*">
    <script>
        document.getElementById('profile_photo').addEventListener('change', function(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('profileImage');
                output.src = reader.result;
                Livewire.emit('profilePhotoPreviewUpdated', reader.result);
            };
            reader.readAsDataURL(event.target.files[0]);
        });

    </script>
</div>
