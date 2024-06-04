<header  class="header">
  <style>
    .user-info-tooltip {
        width: 150px;
        font-size: 0.8rem;
    }
    </style>
    <div class="header__top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <div class="left d-flex align-items-center">
              <a href="tel:65655655"><i class="las la-phone-volume"></i> Customer Support</a>
              <div class="language">
                <i class="las la-globe-europe"></i>
             <select>
                  <option>En</option>
                  <option>Rus</option>
                  <option>Bn</option>
                  <option>Hp</option>
                  <option>Frn</option>
                </select> 
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="right">
              <div class="product__cart">
                <span class="total__amount">
                  {{ number_format($personalWalletBalance + $businessWalletBalance, 2) }}

                </span>
                <a href="#" wire:click.prevent="userlottery()"  class="amount__btn">
                  <i class="las la-shopping-basket"></i>
                  <span class="cart__num">{{ $favoriteCount }}</span>
                </a>
                <script>
                  document.addEventListener('DOMContentLoaded', function () {
                      window.addEventListener('showAlert', event => {
                          alert(`${event.detail.type.toUpperCase()}: ${event.detail.message}`);
                      });
                  });
              </script>
             @if($user)
             @include('livewire.front-end.partial.dropdown-style')
                    {{-- <div class="icons">
                      <li>
                        <a href="#0" class="user__btn"  ><i class="las la-user"></i></a>
                        <ul class="ddFadeSlow ">
                          <li><a href="#" alt="1"><strong>Name:</strong> {{ $user->name }}</a></li>
                          <li><a href="#" alt="1"><strong>Email:</strong> {{ $user->email }}</a></li>
                          <li><a href="#" alt="1"> <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form></a></li>
                        </ul>
                      </li>
                    </div> --}}
                    {{-- <div class="container"> --}}
                      <div class="action">
                        <div class="profile">
                          <img class="user__btn" src="{{ $user->profile_photo_path ? $user->profile_photo_url : name_avatar($user->name) }}"
                          alt="{{ $user->name }}" />                     
                           </div>
                        <div class="menu">
                         

                          <h3>{{ $user->name }}<br/> <span>{{ Str::limit($user->email, 10) }}</span></h3>
                          <ul>
                            <li>
                              <i class="far fa-user-circle"></i>
                              <a href="{{ route('front-end/user-panel') }}">My Profile</a>
                            </li>
                            <li>
                              <i class="far fa-edit"></i>
                              <a href="{{ route('front-end/user-info') }}">Edit Profile</a>
                            </li>
                            {{-- <li>
                              <i class="far fa-envelope"></i>
                              <a href="#">Inbox</a>
                            </li> --}}
                            {{-- <li>
                              <i class="fas fa-user-cog"></i>
                              <a href="#">Settings</a>
                            </li> --}}
                            {{-- <li>
                              <i class="far fa-question-circle"></i>
                              <a href="#">Help</a>
                            </li> --}}
                            <li>
                              {{-- <i class="far fa-envelope"></i> --}}
                              <a href="#" alt="1"> <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit">Logout</button>
                            </form></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    {{-- </div> --}}
            @include('livewire.front-end.partial.dropdown-script')
    @else 
    <!-- User is not logged in -->
    <a href="#0" class="user__btn" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="las la-user"></i></a>
    @endif         
  </div>
          </div>
        </div>
      </div>
      </div>
    </div><!-- header__top end -->
    <div class="header__bottom">
      <div class="container">
        <nav class="navbar navbar-expand-xl p-0 align-items-center" style="position: static">
          <!--begin::Logo image-->
		{{-- <a href="{{ url('/') }}">
			<img alt="{{ setting('general_settings.app_name') }}"
				src="{{ env('APP_URL') . '/storage' . '/' . setting('general_settings.logo') }}" class="h-50px" />
		</a> --}}
          <a class="site-logo site-title" href="{{ route('front-end/navbar') }}"><img src="{{ env('APP_URL') . '/storage' . '/' . setting('general_settings.logo') }}" alt="{{ setting('general_settings.app_name') }}" ><span class="logo-icon"><i class="flaticon-fire"></i></span></a>
          <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="menu-toggle"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu ms-auto">
              <li class="menu_has_children">
                <a   href="{{ route('front-end/navbar') }}">Home</a>
                {{-- <ul class="sub-menu"> --}}
                  {{-- <li><a href="{{ route('front-end/navbar') }}">Home One</a></li> --}}
                  {{-- <li><a href="index-two.html">Home Two</a></li>
                  <li><a href="index-three.html">Home Three</a></li>
                  <li><a href="index-four.html">Home Four</a></li> --}}
                {{-- </ul> --}}
              </li>
              <li class="menu_has_children">
                <a href="#0">Contest</a>
                <ul class="sub-menu">
                  <li><a href="{{ route('front-end/contests') }}">All contest</a></li>
                  {{-- <li><a href="{{ route('front-end/contest-details-one') }}">Contest Details One</a></li> --}}
                  {{-- <li><a href="{{ route('front-end/contest-details-two') }}">Contest Details Two</a></li> --}}
                  <li><a href="{{ route('front-end/lottery-details') }}">Lottery Details One</a></li>
                  <li><a href="{{ route('front-end/lottery-details-two') }}">Lottery Details Two</a></li>
                </ul>
              </li>
              <li><a href="{{ route('front-end/winner-details') }}">Winners</a></li>
              <li class="menu_has_children">
                <a href="#0">pages</a>
                <ul class="sub-menu">
                  <li><a href="{{ route('front-end/about-section') }}">About Us</a></li>
                  <li><a href="{{ route('front-end/affiliate-single') }}">Affiliate Page</a></li>
                  <li><a href="{{ route('front-end/how-work') }}">How it works</a></li>
                  <li><a href="#" wire:ignore wire:click.prevent="userPanel()">User Panel</a></li>
                  <li><a href="{{route('front-end/blogs')}}">Blog Posts</a></li>
                  <li><a href="{{route('front-end/blogs-single')}}">Blog Single</a></li>
                  <li><a href="{{route('front-end/cart')}}">Cart Page</a></li>
                  <li><a href="{{route('front-end/check-out')}}">Checkout Page</a></li>
                  <li><a href="{{route('front-end/faq')}}">FAQ Page</a></li>
                  <li><a href="{{route('front-end/page404')}}">404 Page</a></li>
                </ul>
              </li>
              <li><a href="{{ route('front-end/contact') }}">contact</a></li>
            </ul>
            <div class="nav-right lottery-package-list">
              <a href="{{ route('front-end/contests') }}" class="cmn-btn style--three btn--sm"><img src="{{ asset('front-end/assets/images/icon/btn/tag.png')}}" alt="icon" class="me-2"> Buy Tickets</a>
            </div>
          </div>
        </nav>
      </div>
    </div><!-- header__bottom end -->
    @push('scripts')
<script>
    document.addEventListener('livewire:load', function () {
        window.livewire.on('showAlert', (data) => {
            Swal.fire(data.title, data.text, data.type);
        });
    });
</script>
@endpush
    
  </header>