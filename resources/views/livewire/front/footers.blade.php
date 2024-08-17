<footer class="site-footer footer-light">
	<style>
		.input-group {
			width: 88% !important;
		}
	</style>
	<!-- COLL-TO ACTION START -->
	<div class="section-full overlay-wraper site-bg-primary"
		style="background-image:url({{ asset('assets/images/background/bg-7.png') }})">

		<div class="section-content">
			<!-- COLL-TO ACTION START -->
			<div class="wt-subscribe-box">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-8">
							<div class="call-to-action-left p-tb20 p-r50">
								<h4 class="text-uppercase m-b10">{{ setting('general_settings.app_name') }}</h4>
								<p>{{ \Illuminate\Support\Str::words(strip_tags(setting('general_settings.app_description')), 25) }}</p>
							</div>
						</div>

						<div class="col-md-3">
							<div class="call-to-action-right p-tb30">
								@include('front.partial.gooey-button', [
									'text' => 'Contact us',
									'clickAction' => null,
									'href' => '/contact-us',
								])
								{{-- <a href="{{ url('contact-1.html') }}" class="site-button-secondry text-uppercase radius-sm font-weight-600">
                                Contact us
                                </a> --}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- FOOTER BLOCKES START -->
	<div class="footer-top overlay-wraper">
		<div class="overlay-main"></div>
		<div class="container">
			<div class="row">
				<!-- ABOUT COMPANY -->
				<div class="col-lg-4 col-md-6">
					<div class="widget widget_about">
						<h4 class="widget-title">About Company</h4>
						<div class="logo-footer clearfix p-b15">
							<a href="{{ url('home') }}">
								<img src="{{ asset('storage/' . setting('general_settings.logo_black')) }}" class="img-fluid" width="230"
									height="67" alt="Company Logo">
							</a>
						</div>
						<p>{{ \Illuminate\Support\Str::words(strip_tags(setting('general_settings.app_description')), 40) }}</p>
					</div>
				</div>
				<!-- RESENT POST -->
				{{-- <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget recent-posts-entry-date">
                        <h4 class="widget-title">Recent Post</h4>
                        <div class="widget-post-bx">
                            <!-- Add dynamic recent posts here -->
                        </div>
                    </div>
                </div> --}}
				<!-- USEFUL LINKS -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="widget widget_services">
						<h4 class="widget-title">Useful links</h4>
						<ul>
							<li><a href="{{ route('about-us') }}">About</a></li>
							<li><a href="{{ route('faqs') }}">FAQ</a></li>
							<li><a href="{{ route('services') }}">Services</a></li>
							<li><a href="{{ route('gallery') }}">Gallery</a></li>
							<li><a href="{{ route('contact-us') }}">Contact</a></li>
						</ul>
					</div>
				</div>
				<!-- NEWSLETTER -->
				<div class="col-lg-4 col-md-6">
					<div class="widget widget_newsletter">
						<h4 class="widget-title">Newsletter</h4>
						<div class="newsletter-bx">
							{{-- <form id="newsletterForm" method="post" action="{{ route('newsletter.store') }}">
                            <div class="input-group">
                                <input name="email" class="form-control" placeholder="ENTER YOUR EMAIL" type="email">
                                <span class="input-group-btn">
                                    <button type="submit" class="site-button"><i class="fa fa-paper-plane-o"></i></button>
                                </span>
                            </div>
                            </form> --}}
							@include('livewire.front.pages.newsletter')

						</div>
					</div>
					<!-- SOCIAL LINKS -->
					<div class="widget widget_social_inks">
						<h4 class="widget-title">Social Links</h4>
						<ul class="social-icons social-square social-darkest">
							{{-- <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li> --}}
							@foreach ($footers as $footer)
								@foreach (json_decode($footer->icons) as $icon)
									@if (strtolower($icon->icon) == 'facebook')
										<li class="onHover"><a href="{{ $icon->link }}" target="_blank" class="me-2"
												style="border-radius: 50px"><i class="fa fa-facebook"></i></a></li>
									@elseif (strtolower($icon->icon) == 'twitter')
										<li class="onHover"><a href="{{ $icon->link }}" target="_blank" class="me-2"
												style="border-radius: 50px"><i class="fa fa-twitter"></i></a></li>
									@elseif (strtolower($icon->icon) == 'instagram')
										<li class="onHover"> <a href="{{ $icon->link }}" target="_blank" class="me-2"
												style="border-radius: 50px"><i class="fa fa-instagram"></i></a></li>
									@elseif (strtolower($icon->icon) == 'linkedin')
										<li class="onHover"> <a href="{{ $icon->link }}" target="_blank" class="me-2"
												style="border-radius: 50px"><i class="fa fa-linkedin"></i></a></li>
									@elseif (strtolower($icon->icon) == 'youtube')
										<li class="onHover"><a href="{{ $icon->link }}" target="_blank" class="me-2"
												style="border-radius: 50px"><i class="fa fa-youtube"></i></a></li>
									@else
										<a href="{{ $icon->link }}" target="_blank" class="me-2"
											style="border-radius: 50px">{{ ucfirst($icon->icon) }}</a>
									@endif
								@endforeach
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			<div class="row">

				<div class="col-lg-3 col-md-6 col-sm-6 p-tb20">
					<div class="wt-icon-box-wraper left bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix onHover br-10 h-100">
						<div class="icon-md site-text-primary">
							{{-- <span class="iconmoon-travel"></span> --}}
							<img src="{{ asset('assets/images/location.png') }}" alt="">
						</div>
						<div class="icon-content">
							<h5 class="wt-tilte text-uppercase m-b0">Address</h5>
							<p> {{ general('address') }}</p>
						</div>
					</div>
				</div>


				<div class="col-lg-3 col-md-6 col-sm-6 p-tb20">
					<div class="wt-icon-box-wraper left bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix onHover br-10 h-100">
						<div class="icon-md site-text-primary">
							{{-- <span class="iconmoon-smartphone-1"></span> --}}
							<img src="{{ asset('assets/images/phone.png') }}" alt="">

						</div>
						<div class="icon-content">
							<h5 class="wt-tilte text-uppercase m-b0">Phone</h5>
							<p class="m-b0">{{ general('phone') }}</p>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6 p-tb20">
					<div class="wt-icon-box-wraper left bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix onHover br-10 h-100">
						<div class="icon-md site-text-primary">
							{{-- <span class="iconmoon-fax"></span> --}}
							<img src="{{ asset('assets/images/fax.png') }}" alt="">

						</div>
						<div class="icon-content">
							<h5 class="wt-tilte text-uppercase m-b0">Fax</h5>
							<p class="m-b0">FAX: {{ general('fax') }}</p>
							{{-- <p>FAX: (123) 123-4567</p> --}}
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6 p-tb20">
					<div class="wt-icon-box-wraper left bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix onHover br-10 h-100">
						<div class="icon-md site-text-primary">
							{{-- <span class="iconmoon-email"></span> --}}
							<img src="{{ asset('assets/images/email.png') }}" alt="">

						</div>
						<div class="icon-content">
							<h5 class="wt-tilte text-uppercase m-b0">Email</h5>
							<p class="m-b0">{{ general('email') }}</p>
							{{-- <p>info@demo1234.com</p> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- FOOTER COPYRIGHT -->
	<div class="footer-bottom overlay-wraper">
		<div class="overlay-main"></div>
		<div class="constrot-strip"></div>
		<div class="p-t30 container">
			<div class="row ftr-btm">
				<div class="wt-footer-bot-left">
					<span class="copyrights-text">© {{ date('Y') }} {{ setting('copy_right') }}</span>
				</div>
				<div class="wt-footer-bot-right">
					<ul class="copyrights-nav pull-right">
						<li><a href="javascript:void(0);">Terms & Condition</a></li>
						<li><a href="javascript:void(0);">Privacy Policy</a></li>
						<li><a href="{{ route('contact-us') }}">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<script>
		document.getElementById('newsletterForm').addEventListener('submit', function(event) {
			event.preventDefault(); // Prevent the default form submission

			let formData = new FormData(this);
			let action = this.action;

			fetch(action, {
					method: 'POST',
					body: formData,
					headers: {
						'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
					}
				})
				.then(response => response.json())
				.then(data => {
					if (data.success) {
						alert(data.message);
						this.reset(); // Reset the form after successful submission
					} else {
						alert(data.message); // Show the error message
					}
				})
				.catch(error => console.error('Error:', error));
		});
	</script>
</footer>
