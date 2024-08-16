<div>
	<x-slot name="page_title">
		{{ $page_title ?? 'Contact Us' }}
	</x-slot>
	<style>
		.form-group .input-group {
			width: 100% !important;
		}

		.input-group-addon {
			background: #fff;
			border-color: #e1e1e1;
			padding: 10px 25px 0px 15px !important;
			font-size: 16px;
			color: #545454;
			border-width: 1px;
			border-style: solid;
		}
	</style>
	<!-- INNER PAGE BANNER -->
	<div class="wt-bnr-inr overlay-wraper" style="background-image:url({{ asset('assets/images/banner/faq-banner.jpg') }});">
		<div class="overlay-main opacity-07 bg-black"></div>
		<div class="container">
			<div class="wt-bnr-inr-entry">
				<h1 class="text-white">Contact Us</h1>
			</div>
		</div>
	</div>
	<!-- INNER PAGE BANNER END -->
	<!-- BREADCRUMB ROW -->
	<div class="bg-gray-light p-tb20">
		<div class="container">
			<ul class="wt-breadcrumb breadcrumb-style-2">
				<li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
				<li>Contact</li>
			</ul>
		</div>
	</div>
	<!-- BREADCRUMB ROW END -->

	<!-- SECTION CONTENT START -->
	<div class="section-full p-t80 p-b50">
		<div class="container">
			<div class="section-content m-b50">
				<div class="row">

					<!-- LOCATION BLOCK-->
					<div class="wt-box col-md-6">
						<h4 class="text-uppercase">Location</h4>
						<div class="wt-separator-outer m-b30 br-10">
							<div class="wt-separator style-icon">
								<i class="fa fa-leaf text-black"></i>
								<span class="separator-left site-bg-primary"></span>
								<span class="separator-right site-bg-primary"></span>
							</div>
						</div>
						<div class="gmap-outline m-b30 br-10">
							<div id="gmap_canvas" class="google-map">
								<iframe
									src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.010148022944!2d-0.13445098404809602!3d51.51302981811226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604d31cdfefbb%3A0x27d5339f1859d7f1!2s62%20Dean%20St%2C%20London%20W1D%204QF%2C%20UK!5e0!3m2!1sen!2sin!4v1666266891426!5m2!1sen!2sin"
									width="600" height="450"></iframe>
							</div>
						</div>
					</div>

					<!-- CONTACT FORM -->
					<div class="wt-box col-md-6">
						<h4 class="text-uppercase">Contact Form </h4>
						<div class="wt-separator-outer m-b30">
							<div class="wt-separator style-icon">
								<i class="fa fa-leaf text-black"></i>
								<span class="separator-left site-bg-primary"></span>
								<span class="separator-right site-bg-primary"></span>
							</div>
						</div>

						@if (session()->has('success'))
							<div class="alert alert-success">
								{{ session('success') }}
							</div>
						@endif
						<form wire:submit.prevent="submit" class="cons-contact-form p-a30 bg-gray br-10">

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"></i></span>
											<input wire:model="name" name="username" type="text" required class="form-control" placeholder="Name">
										</div>
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
											<input wire:model="email" name="email" type="text" class="form-control" required placeholder="Email">
										</div>
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon v-align-m"><i class="fa fa-pencil"></i></span>
											<textarea wire:model="message" name="message" rows="4" class="form-control" required placeholder="Message"></textarea>
										</div>
									</div>
								</div>

								<div class="col-md-12 text-right">
									<button type="submit" class="site-button m-r15 br-10">Submit <i class="fa fa-angle-double-right"></i></button>
									<button type="reset" class="site-button br-10">Reset <i class="fa fa-angle-double-right"></i></button>
								</div>
							</div>

						</form>


					</div>
				</div>
			</div>

			<!-- CONTACT DETAIL BLOCK -->
			<div class="section-content">
				<div class="row">
					<div class="wt-box col-md-12">
						<h4 class="text-uppercase">Contact Detail</h4>
						<div class="wt-separator-outer m-b30">
							<div class="wt-separator style-icon">
								<i class="fa fa-leaf text-black"></i>
								<span class="separator-left site-bg-primary"></span>
								<span class="separator-right site-bg-primary"></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-12 m-b30">
								<div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light h-100 br-10">
									<div class="wt-icon-box-sm site-bg-primary m-b20 br-10"><span class="icon-cell text-white"><i
												class="fa fa-phone"></i></span></div>
									<div class="icon-content">
										<h5>Phone</h5>
										<p>{{ general('phone') }}</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-12 m-b30">
								<div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light h-100 br-10">
									<div class="wt-icon-box-sm site-bg-primary m-b20 br-10"><span class="icon-cell text-white"><i
												class="fa fa-envelope"></i></span></div>
									<div class="icon-content">
										<h6>Email</h6>
										<p>{{ general('email') }}</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-12 m-b30">
								<div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light h-100 br-10">
									<div class="wt-icon-box-sm site-bg-primary m-b20 br-10"><span class="icon-cell text-white"><i
												class="fa fa-map-marker"></i></span></div>
									<div class="icon-content">
										<h5>Address</h5>
										<p>{{ general('address') }}</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- SECTION CONTENT END -->
</div>
