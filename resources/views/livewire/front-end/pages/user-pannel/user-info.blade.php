<div>
  <x-slot name="page_title">
    {{ $page_title ?? 'User' }}
  </x-slot>
  <style>
    .password-input-container {
      position: relative;
      flex-grow: 1;
    }

    .password-input-container input {
      padding-right: 35px;

    }

    .eye-icon {
      position: absolute;
      right: 20px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
    }
    .loading {

opacity: 0.5; 
cursor: wait;
}
  </style>
  
  <!-- inner-hero-section start -->
  <div class="inner-hero-section style--five">
  </div>
  <!-- inner-hero-section end -->
  <!-- user section start -->
  <div class="mt-minus-150 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          @livewire('front-end.pages.user-pannel.user-profile')
          <div class="user-action-card">
            <ul class="user-action-list">
              <li><a href="{{ route('front-end/user-panel') }}">My Tickets <span class="badge">04</span></a></li>
              <li class="active"><a href="{{ route('front-end/user-info') }}">Personal Information</a></li>
              <li><a href="{{ route('front-end/user-transaction') }}">Transactions</a></li>
              <li><a href="{{ route('front-end/user-referral') }}">Referral Program</a></li>
              <li><a href="{{ route('front-end/user-lottery') }}">Favorite Lotteries</a></li>
              <li><a href="{{ route('front-end/contact') }}">Help Center</a></li>
              <li><a href="#0"><form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="dropdown-item">Log Out</button>
            </form></a></li>            </ul>
          </div><!-- user-action-card end -->
        </div>
        <div class="col-lg-8 mt-lg-0 mt-5">
          <div class="user-info-card">
            <div class="user-info-card__header">
              <h3 class="user-info-card__title">Personal Details</h3>
              {{-- <button type="button"><i class="far fa-edit"></i> Edit</button> --}}
              <button type="button" wire:click="toggleEditMode">
                @if ($editingMode)
                <i class="fas fa-times" wire:loading.class="loading"></i> Cancel
                @else
                <i class="far fa-edit" wire:loading.class="loading"></i> Edit
                @endif
              </button>
              @if ($editingMode)
              <button type="button" wire:click="updateUser">
                <i class="fas fa-save" wire:loading.class="loading"></i> Update
              </button>
              @endif
            </div>
            <ul class="user-info-card__list">
              <li>
                <span class="caption">Name</span>
                @if (auth()->check()) <!-- Check if user is authenticated -->
                    @if ($editingMode)
                        <input wire:model="name" type="text" >
                    @else
                        <span class="value">{{ $name ? $name : 'Not Provided' }}</span>
                    @endif
                @else
                    <span class="value">Not Provided</span>
                @endif
            </li>
              <li>
                <span class="caption">Date of Birth</span>
                @if ($editingMode)
                <input wire:model="date_of_birth" type="date">
                
                @else
                <span class="value">{{ $date_of_birth ? $date_of_birth : 'Not provided' }}</span>
                @endif
              </li>
              <li>
                <span class="caption">Address</span>
                @if ($editingMode)
                <input wire:model="useraddress" type="text"></input>
                @else
                <span class="value">{{ $useraddress ? $useraddress : 'Not provided' }}</span>
                @endif
              </li>
            </ul>
          </div><!-- user-info-card end -->
          <div class="user-info-card">
            <div class="user-info-card__header">
              <h3 class="user-info-card__title">Account Settings</h3>
              <button type="button"><i class="far fa-edit"></i> Edit</button>
            </div>
            <ul class="user-info-card__list">
              <li>
                <span class="caption">Language</span>
                <span class="value">English (United States)</span>
              </li>
              <li>
                <span class="caption">Time Zone</span>
                <span class="value">(GMT-05:00) Pakistan/Karachi</span>
              </li>
              <li>
                <span class="caption">Status</span>
                <span class="value status-active">Active</span>
              </li>
            </ul>
          </div><!-- user-info-card end -->
          <div class="user-info-card">
            <div class="user-info-card__header">
              <h3 class="user-info-card__title">Email Addresses</h3>
              <button wire:click="toggleEditModeEmail" type="button">
                @if ($editingModeEmail)
                <i class="fas fa-times" wire:loading.class="loading"></i> cancel
                @else
                <i class="far fa-edit " wire:loading.class="loading"></i> Edit
                @endif
              </button>
              @if ($editingModeEmail)
              <button type="button" wire:click="updateUserEmail">
                <i class="fas fa-save" wire:loading.class="loading"></i> Update
              </button>
              @endif
            </div>
            <ul class="user-info-card__list">
              <li>
                <span class="caption">Email</span>
                @if ($editingModeEmail)
                <input wire:model="email" type="email" class="form-control">
                @else
                <span class="value"><a href="{{ $email ? $email : 'Not provided' }}" class="__cf_email__" data-cfemail="2e4f424c4b5c5a1d1a176e49434f4742004d4143">{{ $email }}</a></span>
                @endif
              </li>
              <li>
                <span class="caption">Mobile</span>
                @if ($editingModeEmail)
                <input wire:model="phone" type="text" class="form-control">
                @else
                <span class="value">{{ $phone ? $phone : 'Not provided' }}</span>
                @endif
              </li>
            </ul>
          </div><!-- user-info-card end -->
          {{-- <div class="user-info-card">
              <div class="user-info-card__header">
                <h3 class="user-info-card__title">Phone</h3>
                <button type="button"><i class="far fa-edit"></i> Edit</button>
              </div>
              <ul class="user-info-card__list">
                <li>
                  <span class="caption">Mobile</span>
                  <span class="value">+1 234-567-8925</span>
                </li>
              </ul>
            </div><!-- user-info-card end --> --}}
            
          <div class="user-info-card">
            <div class="user-info-card__header">
              <h3 class="user-info-card__title">Security</h3>
              <button wire:ignore type="button" wire:click="toggleEditModePassword">
                @if ($editingModePassword)
                <i class="fas fa-times" wire:loading.class="loading"></i> Cancel
                @else
                <i class="far fa-edit" wire:loading.class="loading"></i> Edit
                @endif
              </button>
              @if ($editingModePassword)
              <button wire:ignore wire:click="updateUserPassword" type="button" >
                <i class="fas fa-save" wire:loading.class="loading"></i> Update
              </button>
              @endif
            </div>
            <ul class="user-info-card__list">
              <li>
                @if ($editingModePassword)
                <div class="row form-group">
                  <label for="currentPassword">Current Password : </label>
                  <div class="password-input-container">
                    <input wire:model="currentPassword" type="{{ $showPassword ? 'text' : 'password' }}"  >
                    <i class="far eye-icon @if ($showPassword) fa-eye-slash @else fa-eye @endif" wire:click="toggleShowPassword"></i>
                  </div>
                  @error('currentPassword') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>

                <div class="row form-group">
                  <label for="newPassword">New Password : </label>
                  <div class="password-input-container">
                      <input wire:model="newPassword" type="{{ $showPassword ? 'text' : 'password' }}">
                      <i class="far eye-icon @if ($showPassword) fa-eye-slash @else fa-eye @endif" wire:click="toggleShowPassword"></i>
                  </div>
                  @error('newPassword') <span class="invalid-feedback">{{ $message }}</span> @enderror
              </div>
              
              <div class="row form-group">
                  <label for="confirmPassword">Confirm New Password : </label>
                  <div class="password-input-container">
                      <input wire:model="confirmPassword" type="{{ $showPassword ? 'text' : 'password' }}"  >
                      <i class="far eye-icon @if ($showPassword) fa-eye-slash @else fa-eye @endif" wire:click="toggleShowPassword"></i>
                  </div>
                  @error('confirmPassword') <span class="invalid-feedback">{{ $message }}</span> @enderror
              </div>
                @else
                <span class="caption">Password</span>
                <span class="value user-password">***************</span>
                @endif

              </li>
            </ul>
          </div><!-- user-info-card end -->
        </div>
      </div>
    </div>
  </div>
  <!-- user section end -->
  <script>
    window.livewire.on('user-profile-updated', () => {
        document.getElementById('imagePreview').style.backgroundImage = `url('{{ $userAvatar }}')`; // Update background image with new URL
    });
</script>

</div>