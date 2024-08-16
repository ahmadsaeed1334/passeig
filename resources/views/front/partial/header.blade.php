{{-- <header class="navbar-pading ">
    <!-- Full-screen Header -->
    <nav class="navbar navbar-expand-lg navbar-light  shift position-absolute bg-transparent w-100 d-xxl-block d-none">
        <div class="container">
            <a class="navbar-brand" href="{{ env('APP_URL') }}">
<img src="{{ env('APP_URL') . '/storage/' . general('logo') }}" alt="Logo" width="50px" height="50px">
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
@php
$route_name = route_name();
@endphp
<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{ env('APP_URL') }}">Home</a>
        </li>
        <li class="nav-item ms-2">
            <a class="nav-link {{ $route_name == 'services' ? 'active show' : '' }}" href="{{ route('services') }}">Services</a>
        </li>
        <li class="nav-item ms-2">
            <a class="nav-link  {{ $route_name == 'products' ? 'active show' : '' }}" href="{{ route('products') }}">Products</a>
        </li>
        <li class="nav-item ms-2">
            <a class="nav-link  {{ $route_name == 'blogs' ? 'active show' : '' }}" href="{{ route('blogs') }}">Blogs</a>
        </li>

        <li class="nav-item ms-2">
            <a class="nav-link  {{ $route_name == 'about-us' ? 'active show' : '' }}" href="{{ route('about-us') }}">About Us</a>
        </li>
    </ul>
</div>
<a href="{{ route('appointments') }}"><button type="button" class="custom-btn btn-11">Book Appointment<div class="dot"></div></button></a>
@auth
<a href="{{ route('user-dashboard') }}"><button type="button" class="custom-btn btn-11 ms-3">Dashboard</button></a>
@else
<a href="{{ route('login') }}"><button type="button" class="custom-btn btn-11 ms-3">Login</button></a>
@endauth
</div>
</nav>
<!-- Mobile Header -->
<nav class="navbar bg-body-tertiary shift fixed-top d-xxl-none d-block">
    <div class="container-fluid ">
        <a class="navbar-brand ms-3 " href="{{ env('APP_URL') }}"><img src="{{ env('APP_URL') . '/storage/' . general('logo') }}" width="50px" height="50px" alt="Logo"></a>
        <button class="navbar-toggler mr-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" style="85%" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <a class="offcanvas-title" id="offcanvasNavbarLabel" href="{{ env('APP_URL') }}"><img src="{{ env('APP_URL') . '/storage/' . general('logo') }}" width="50px" height="50px" alt="Logo"></a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ env('APP_URL') }}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link {{ $route_name == 'services' ? 'active show' : '' }}" href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link {{ $route_name == 'products' ? 'active show' : '' }}" href="{{ route('products') }}">Products</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link {{ $route_name == 'blogs' ? 'active show' : '' }}" href="{{ route('blogs') }}">Blogs</a>
                    </li>

                    <li class="nav-item mb-2">
                        <a class="nav-link {{ $route_name == 'about-us' ? 'active show' : '' }}" href="{{ route('about-us') }}">About Us</a>
                    </li>
                </ul>
                <a href="{{ route('appointments') }}"><button type="button" class="custom-btn btn-11  glow-on-hover">Book Appointment<div class="dot"></div></button></a>
                @auth
                <a href="{{ route('user-dashboard') }}"><button type="button" class="custom-btn btn-11 ms-3">Dashboard</button></a>
                @else
                <a href="{{ route('login') }}"><button type="button" class="custom-btn btn-11 ms-3">Login</button></a>
                @endauth




            </div>
        </div>
    </div>
</nav>
</header> --}}
<!-- HEADER START -->
<header class="site-header header-style-3 mobile-sider-drawer-menu">
	<!-- Search Form -->
	@php
		$route = route_name();
	@endphp
	<div class="sticky-header main-bar-wraper">
		<div class="main-bar site-bg-primary">
			<div class="container">
				<div class="logo-header">
					<a href="{{ route('home-page') }}">
						<img src="{{ asset('assets/images/LOGO-PASSEIG.png') }}" width="216" height="37" alt="">
					</a>
				</div>

				<!-- MAIN Vav -->
				<div class="header-nav navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="{{ $route == 'home-page' ? 'active' : '' }}">
							<a href="{{ route('home-page') }}">Home</a>
						</li>

						{{-- <li class="{{ $route == 'services' ? 'active' : '' }}">
							<a href="{{ route('services') }}">Services</a>

						</li> --}}

						<li class="has-child">
							<a href="{{ route('services') }}">Services<i class="fa fa-chevron-down"></i></a>
							<ul class="sub-menu">
								@php
									$menus = App\Models\ServicesCategory::with(['subcategories', 'services'])
									    ->withCount(['subcategories', 'services'])
									    ->get();
								@endphp
								@foreach ($menus as $menu)
									<li>
										<a href="javascript:;">{{ $menu->name }}</a>
										@if ($menu->subcategories_count > 0)
											<ul class="sub-menu">
												@foreach ($menu->subcategories as $subcategory)
													<li>
														<a href="blog-media-list.html">
															{{ $subcategory->name }}
															@if ($menu->services_count > 0)
																<ul class="sub-menu">
																	@foreach ($menu->services as $child)
																		<li>
																			<a href="blog-media-list.html">
																				{{ $child->service_name }}
																			</a>
																		</li>
																	@endforeach
																</ul>
															@endif
														</a>
													</li>
												@endforeach
											</ul>
										@else
											@if ($menu->services_count > 0)
												<ul class="sub-menu">
													@foreach ($menu->services as $child)
														<li>
															<a href="blog-media-list.html">
																{{ $child->service_name }}
															</a>
														</li>
													@endforeach
												</ul>
											@endif
										@endif
									</li>
								@endforeach
							</ul>
						</li>

						<li class="{{ $route == 'products' ? 'active' : '' }}">
							<a href="{{ route('products') }}">Products</a>
						</li>

						<li class="{{ $route == 'blogs' ? 'active' : '' }}">
							<a href="{{ route('blogs') }}">Blogs</a>
						</li>

						<li class="{{ $route == 'about-us' ? 'active' : '' }}">
							<a href="{{ route('about-us') }}">About</a>
						</li>

						<li>
							<a href="javascript:;">More<i class="fa fa-chevron-down"></i></a>
							<ul class="sub-menu">
								<li>
									<a href="{{ route('faqs') }}">FAQ</a>
								</li>

								<li>
									<a href="{{ route('gallery') }}">Galley</a>
								</li>
								<li>
									<a href="{{ route('contacts') }}">Contact us</a>
								</li>
							</ul>
						</li>

						{{-- <li class="submenu-direction">
							<a href="javascript:;">Blog<i class="fa fa-chevron-down"></i></a>
							<ul class="sub-menu">
								<li>
									<a href="javascript:;">Media</a>
									<ul class="sub-menu">
										<li><a href="blog-media-list.html">Media list</a></li>
										<li><a href="blog-media-grid.html">Media grid</a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:;">list</a>
									<ul class="sub-menu">
										<li><a href="blog-half-img.html">Half image</a></li>
										<li><a href="blog-half-img-sidebar.html">Half image sidebar</a></li>
										<li><a href="blog-half-img-left-sidebar.html">Half image sidebar
												left</a></li>
										<li><a href="blog-large-img.html">Large image</a></li>
										<li><a href="blog-large-img-sidebar.html">Large image sidebar</a></li>
										<li><a href="blog-large-img-left-sidebar.html">Large image sidebar
												left</a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:;">Grid</a>
									<ul class="sub-menu">
										<li><a href="blog-grid-2.html">Grid 2</a></li>
										<li><a href="blog-grid-2-sidebar.html">Grid 2 sidebar</a></li>
										<li><a href="blog-grid-2-sidebar-left.html">Grid 2 sidebar left</a></li>
										<li><a href="blog-grid-3.html">Grid 3</a></li>
										<li><a href="blog-grid-3-sidebar.html">Grid 3 sidebar</a></li>
										<li><a href="blog-grid-3-sidebar-left.html">Grid 3 sidebar left</a></li>
										<li><a href="blog-grid-4.html">Grid 4</a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:;">Single</a>
									<ul class="sub-menu">
										<li><a href="blog-single.html">Single full</a></li>
										<li><a href="blog-single-left-sidebar.html">Single sidebar</a></li>
										<li><a href="blog-single-sidebar.html">Single sidebar right</a></li>
									</ul>
								</li>
							</ul>
						</li> --}}
					</ul>
				</div>
				<!-- NAV Toggle Button -->
				<button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button"
					class="navbar-toggler collapsed">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar icon-bar-first"></span>
					<span class="icon-bar icon-bar-two"></span>
					<span class="icon-bar icon-bar-three"></span>
				</button>
				<!-- ETRA Nav -->
				<div class="extra-nav">
					<div class="extra-cell">
						<div id="button">

							<div id="second">
								<a href="#">Click me</a>
								<div id="Third">
									<a href="#">That's it</a>
								</div>
							</div>
							<div id="first">
								<a href="#">Login</a>
							</div>
						</div>
					</div>
					<div class="extra-cell">
						<div id="button">

							<div id="second">
								<a href="#">Click me</a>
								<div id="Third">
									<a href="#">That's it</a>
								</div>
							</div>
							<div id="first">
								<a href="#">Appointment</a>
							</div>
						</div>
					</div>
				</div>

				<!-- SITE Search -->
				<div id="search">
					<span class="close"></span>
					<form role="search" id="searchform" action="https://thewebmax.org/search" method="get" class="radius-xl">
						<div class="input-group">
							<input value="" name="q" type="search" placeholder="Type to search">
							<span class="input-group-btn"><button type="button" class="search-btn"><i
										class="fa fa-search"></i></button></span>
						</div>
					</form>
				</div>


			</div>
		</div>
	</div>

</header>
<!-- HEADER END -->
