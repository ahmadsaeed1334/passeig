<div>
    <x-slot name="page_title">
		{{ $page_title ?? 'User' }}
	</x-slot>
    <!-- inner-hero-section start -->
    <div class="inner-hero-section style--five">
    </div>
    <!-- inner-hero-section end -->

    <!-- user section start -->
    <div class="mt-minus-150 pb-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="user-card">
              <div class="avatar-upload">
                <div class="obj-el"><img src="{{ asset('front-end/assets/images/elements/team-obj.png')}}" alt="image"></div>
                <div class="avatar-edit">
                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                    <label for="imageUpload"></label>
                </div>
                <div class="avatar-preview">
                    <div id="imagePreview" style="background-image: url('front-end/assets/images/user/pp.png');">
                    </div>
                </div>
              </div>
              <h3 class="user-card__name">Albert Owens</h3>
              <span class="user-card__id">ID : 19535909</span>
            </div><!-- user-card end -->
            <div class="user-action-card">
              <ul class="user-action-list">
                <li><a href="{{ route('front-end/user-panel') }}">My Tickets <span class="badge">04</span></a></li>
                <li class="active"><a href="{{ route('front-end/user-info') }}">Personal Information</a></li>
                <li><a href="{{ route('front-end/user-transaction') }}">Transactions</a></li>
                <li><a href="{{ route('front-end/user-referral') }}">Referral Program</a></li>
                <li><a href="{{ route('front-end/user-lottery') }}">Favorite Lotteries</a></li>
                <li><a href="{{ route('front-end/contact') }}">Help Center</a></li>
                <li><a href="#0">Log Out</a></li>
              </ul>
            </div><!-- user-action-card end -->
          </div>
          <div class="col-lg-8 mt-lg-0 mt-5">
            <div class="user-info-card">
              <div class="user-info-card__header">
                <h3 class="user-info-card__title">Personal Details</h3>
                <button type="button"><i class="far fa-edit"></i> Edit</button>
              </div>
              <ul class="user-info-card__list">
                <li>
                  <span class="caption">Name</span>
                  <span class="value">Albert Owens</span>
                </li>
                <li>
                  <span class="caption">Date of Birth</span>
                  <span class="value">15-03-1974</span>
                </li>
                <li>
                  <span class="caption">Address</span>
                  <span class="value">8198 Fieldstone Dr.La Crosse, WI 54601</span>
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
                  <span class="value">(GMT-06:00) Central America</span>
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
                <button type="button"><i class="far fa-edit"></i> Edit</button>
              </div>
              <ul class="user-info-card__list">
                <li>
                  <span class="caption">Email</span>
                  <span class="value"><a href="https://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2e4f424c4b5c5a1d1a176e49434f4742004d4143">[email&#160;protected]</a></span>
                </li>
              </ul>
            </div><!-- user-info-card end -->
            <div class="user-info-card">
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
            </div><!-- user-info-card end -->
            <div class="user-info-card">
              <div class="user-info-card__header">
                <h3 class="user-info-card__title">Security</h3>
                <button type="button"><i class="far fa-edit"></i> Edit</button>
              </div>
              <ul class="user-info-card__list">
                <li>
                  <span class="caption">Password</span>
                  <span class="value user-password">***************</span>
                </li>
              </ul>
            </div><!-- user-info-card end -->
          </div>
        </div>
      </div>
    </div>
    <!-- user section end -->
</div>
