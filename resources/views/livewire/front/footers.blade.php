<footer class="site-footer footer-light">
    <style>
        .input-group {
            width: 88% !important;
        }

    </style>
    <!-- COLL-TO ACTION START -->
    <div class="section-full overlay-wraper site-bg-primary" style="background-image:url({{ asset('assets/images/background/bg-7.png') }})">

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
                                <a href="{{ url('contact-1.html') }}" class="site-button-secondry text-uppercase radius-sm font-weight-600">
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
                <div class="col-lg-4 col-md-6">
                    <div class="widget widget_about">
                        <h4 class="widget-title">About Company</h4>
                        <div class="logo-footer clearfix p-b15">
                            <a href="{{ url('index.html') }}">
                                <img src="{{ asset('storage/' . setting('general_settings.logo_black')) }}" class="img-fluid" width="230" height="67" alt="Company Logo">
                            </a>
                        </div>
                        <p>{{ \Illuminate\Support\Str::words(strip_tags(setting('general_settings.app_description')), 25) }}</p>
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
                            <li><a href="{{ url('about-1.html') }}">About</a></li>
                            <li><a href="{{ url('faq-1.html') }}">FAQ</a></li>
                            <li><a href="{{ url('career.html') }}">Career</a></li>
                            <li><a href="{{ url('our-team.html') }}">Our Team</a></li>
                            <li><a href="{{ url('services.html') }}">Services</a></li>
                            <li><a href="{{ url('gallery-grid-1.html') }}">Gallery</a></li>
                        </ul>
                    </div>
                </div>
                <!-- NEWSLETTER -->
                <div class="col-lg-4 col-md-6">
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
                            {{-- <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li> --}}
                            @foreach ($footers as $footer )


                            @foreach(json_decode($footer->icons) as $icon)
                            @if (strtolower($icon->icon) == 'facebook')
                            <li><a href="{{ $icon->link }}" target="_blank" class="me-2"><i class="fa fa-facebook "></i></a></li>
                            @elseif (strtolower($icon->icon) == 'twitter')
                            <li><a href="{{ $icon->link }}" target="_blank" class="me-2"><i class="fa fa-twitter "></i></a></li>
                            @elseif (strtolower($icon->icon) == 'instagram')
                            <li> <a href="{{ $icon->link }}" target="_blank" class="me-2"><i class="fa fa-instagram "></i></a></li>
                            @elseif (strtolower($icon->icon) == 'linkedin')
                            <li> <a href="{{ $icon->link }}" target="_blank" class="me-2"><i class="fa fa-linkedin "></i></a></li>
                            @elseif (strtolower($icon->icon) == 'youtube')
                            <li><a href="{{ $icon->link }}" target="_blank" class="me-2"><i class="fa fa-youtube "></i></a></li>

                            @else
                            <a href="{{ $icon->link }}" target="_blank" class="me-2">{{ ucfirst($icon->icon) }}</a>
                            @endif
                            @endforeach
                            @endforeach
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
        <div class="container p-t30">
            <div class="row ftr-btm">
                <div class="wt-footer-bot-left">
                    <span class="copyrights-text">© {{ date('Y') }} {{ setting('copy_right') }}</span>
                </div>
                <div class="wt-footer-bot-right">
                    <ul class="copyrights-nav pull-right">
                        <li><a href="javascript:void(0);">Terms & Condition</a></li>
                        <li><a href="javascript:void(0);">Privacy Policy</a></li>
                        <li><a href="{{ url('contact-1.html') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
