{{-- <footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-lg-0 mb-5">
                <img src="{{env('APP_URL').'/storage' .'/'.general('logo_black')}}" class="img-fluid">
</div>
</div>
<div class="row align-items-center">
    <div class="col-lg-3 col-md-6 col-12 text-center order-1 mb-md-0 mb-5">
        <a href="">+ 383 (21) 23 43984</a><br>
        <a href="">+ 907 683 8196</a><br>
        <a href="">828 Timbercrest Road, <br>Healy City, AK 99743</a><br>
        <a href="">info@celeste.com</a>
    </div>
    <div class="col-lg-6 col-12 text-center mt-5 order-lg-2 order-3">
        <p class="mx-md-5 mx-2 mb-5 mt-lg-0 mt-4">Risus scelerisque a non turpis vitae malesuada sed
            venenatis. In fringilla sollicitudin euismod
            sed.
        </p>
        <div class="social mt-5 d-flex gap-3 justify-content-center">
            <a href="#"><img src="{{asset('assets/images/facebook.svg')}}"></a>
            <a href="#"><img src="{{asset('assets/images/twitter.svg')}}"></a>
            <a href="#"><img src="{{asset('assets/images/instagram.svg')}}"></a>
        </div>
    </div>
    <div id="message"></div> <!-- This div is for showing success or error messages -->
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="col-lg-3 col-md-6 col-12 text-center  order-lg-3 order-1">
        <p>Working hours: <br>Monday to Friday 9am - 5pm</p>
        <form method="POST" id="email-collector-bottom" class="d-flex">
            @csrf
            <input type="email" name="email" class="w-100 p-3 border-0 bg-transparent" placeholder="Your mail">

            <button type="submit" class="btn"><img src="./assets/images/subscribe.svg"></button>

        </form>
    </div>
    <span class="text-danger" id="email-error"></span>
</div>
</div>
<hr class="bg-white">
<div class="row">
    <div class="col-12 text-center">
        <p class="text-white fs-6 pb-3">Copyright Balanced Skin, All Rights Reserved</p>
    </div>

</div>
</footer>
<script>
    $(document).ready(function() {
        $('#email-collector-bottom').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('subscribe') }}"
                , method: 'POST'
                , data: $(this).serialize()
                , success: function(response) {
                    $('#message').html('<div class="alert alert-success">' + response.message + '</div>');
                    $('#email-error').text('');
                    $('#email-collector-bottom')[0].reset(); // Correctly reset the form
                }
                , error: function(response) {
                    $('#message').html('');
                    if (response.responseJSON.errors.email) {
                        $('#email-error').text(response.responseJSON.errors.email[0]);
                    }
                }
            });
        });
    });

</script> --}}


<!-- FOOTER START -->
<footer class="site-footer footer-light">
	<!-- COLL-TO ACTION START -->
	<div class="section-full overlay-wraper site-bg-primary" style="background-image:url(../images/background/bg-7.png)">

		<div class="section-content">
			<!-- COLL-TO ACTION START -->
			<div class="wt-subscribe-box">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-8">
							<div class="call-to-action-left p-tb20 p-r50">
								<h4 class="text-uppercase m-b10">We are ready to build your dream tell us more
									about your project</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra
									mauris eget tortor.</p>
							</div>
						</div>

						<div class="col-md-3">
							<div class="call-to-action-right p-tb30">
								<a href="contact-1.html" class="site-button-secondry text-uppercase radius-sm font-weight-600">
									Contact us
								</a>
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
				<div class="col-lg-3 col-md-6">
					<div class="widget widget_about">
						<h4 class="widget-title">About Company</h4>
						<div class="logo-footer clearfix p-b15">
							<a href="index.html"> <img src="{{ env('APP_URL') . '/storage' . '/' . general('logo_black') }}" class="img-fluid"
									width="230" height="67"></a>
						</div>
						<p>Thewebmax ipsum dolor sit amet, interior adipiscing elit, sed diam nonummy nibh is
							euismod tincidunt ut laoreet dolore are agna aliquam erat. wisi enim ad minim
							veniam, quis tation. sit amet, consectet. ipsum dolor sit amet, consectetuer and
							item adipiscing. ipsum dolor sit.
						</p>
					</div>
				</div>
				<!-- RESENT POST -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="widget recent-posts-entry-date">
						<h4 class="widget-title">Resent Post</h4>
						<div class="widget-post-bx">
							<div class="bdr-light-blue widget-post clearfix bdr-b-1 m-b10 p-b10">
								<div class="wt-post-date text-uppercase text-center text-white">
									<strong>20</strong>
									<span>Mar</span>
								</div>
								<div class="wt-post-info">
									<div class="wt-post-header">
										<h6 class="post-title"><a href="blog-single.html">Blog title first </a>
										</h6>
									</div>
									<div class="wt-post-meta">
										<ul>
											<li class="post-author"><i class="fa fa-user"></i>By Admin</li>
											<li class="post-comment"><i class="fa fa-comments"></i> 28</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="bdr-light-blue widget-post clearfix bdr-b-1 m-b10 p-b10">
								<div class="wt-post-date text-uppercase text-center text-white">
									<strong>30</strong>
									<span>Mar</span>
								</div>
								<div class="wt-post-info">
									<div class="wt-post-header">
										<h6 class="post-title"><a href="blog-single.html">Blog title first </a>
										</h6>
									</div>
									<div class="wt-post-meta">
										<ul>
											<li class="post-author"><i class="fa fa-user"></i>By Admin</li>
											<li class="post-comment"><i class="fa fa-comments"></i> 29</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="bdr-light-blue widget-post clearfix bdr-b-1 m-b10 p-b10">
								<div class="wt-post-date text-uppercase text-center text-white">
									<strong>31</strong>
									<span>Mar</span>
								</div>
								<div class="wt-post-info">
									<div class="wt-post-header">
										<h6 class="post-title"><a href="blog-single.html">Blog title first </a>
										</h6>
									</div>
									<div class="wt-post-meta">
										<ul>
											<li class="post-author"><i class="fa fa-user"></i>By Admin</li>
											<li class="post-comment"><i class="fa fa-comments"></i> 30</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- USEFUL LINKS -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="widget widget_services">
						<h4 class="widget-title">Useful links</h4>
						<ul>
							<li><a href="about-1.html">About</a></li>
							<li><a href="faq-1.html">FAQ</a></li>
							<li><a href="career.html">Career</a></li>
							<li><a href="our-team.html">Our Team</a></li>
							<li><a href="services.html">Services</a></li>
							<li><a href="gallery-grid-1.html">Gallery</a></li>
						</ul>
					</div>
				</div>
				<!-- NEWSLETTER -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget_newsletter">
						<h4 class="widget-title">Newsletter</h4>
						<div class="newsletter-bx">
							<form role="search" method="post">
								<div class="input-group">
									<input name="news-letter" class="form-control" placeholder="ENTER YOUR EMAIL" type="text">
									<span class="input-group-btn">
										<button type="submit" class="site-button"><i class="fa fa-paper-plane-o"></i></button>
									</span>
								</div>
							</form>
						</div>
					</div>
					<!-- SOCIAL LINKS -->
					<div class="widget widget_social_inks">
						<h4 class="widget-title">Social Links</h4>
						<ul class="social-icons social-square social-darkest">
							<li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
							<li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
							<li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
							<li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
							<li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
							<li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
						</ul>
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
					<span class="copyrights-text">© 2023 Your Company. All Rights Reserved. Designed By
						Thewebmax.</span>
				</div>
				<div class="wt-footer-bot-right">
					<ul class="copyrights-nav pull-right">
						<li><a href="javascript:void(0);">Terms & Condition</a></li>
						<li><a href="javascript:void(0);">Privacy Policy</a></li>
						<li><a href="contact-1.html">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- FOOTER END -->
