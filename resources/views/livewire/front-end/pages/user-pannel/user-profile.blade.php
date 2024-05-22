<div class="user-card">
    <div class="avatar-upload">
      <div class="obj-el">
          <img src="{{ asset('front-end/assets/images/elements/team-obj.png')}}" alt="image">
      </div>
      <div class="avatar-edit">
        {{-- wire:dirty.class.remove="opacity-0" --}}
          <input wire:model ="photo"  type='file' id="imageUpload" accept=".png, .jpg, .jpeg"  />
          <label for="imageUpload"></label>
      </div>
      <div class="avatar-preview">
          <div id="imagePreview" style="background-image: url('{{ $userAvatar  }}');">
          </div>
          @if ($photo && !$errors->has('photo'))
          <div wire:loading wire:target="photo">Uploading...</div>
      @endif
      </div>
  </div>          
    <h3 class="user-card__name">{{ $name }}</h3>
    <span class="user-card__id">ID : 19535909</span>
  </div><!-- user-card end -->

  