<!-- ABOUT SECTION START -->
<div class="section-full p-t100 p-b70 bg-bottom-center bg-full-width bg-no-repeat">
    <div class="container">
        <div class="section-content about4-section">
            <div class="row">
                <div class="col-md-5 col-sm-5 m-b30">
                    <div class="about4-section-pic">
                        <div class="wt-media">
                            @if($provide && $provide->image)
                            <img src="{{ asset('storage/' . $provide->image) }}" alt="">
                            @else
                            <img src="images/slid-2.jpg" alt="">
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-md-7 col-sm-7 m-b30">
                    <div class="about4-content">
                        <h3 class="text-uppercase text-secondry">{{ $provide->top_title ?? 'We Provide' }}</h3>
                        <h2><span class="site-text-primary">Welcome to </span>{{ $provide->title ?? 'Spa Center' }}</h2>
                        <p><strong>{{ $provide->short_description ?? 'Spread over two floors, our beautiful spa offer a soothing environment in which you can rest, relax and feel completely rejuvenated.' }}</strong></p>
                        <p>{!! $provide->long_description ?? 'Lorem Ipsum is simply dummy text of the printing and typesetting industry...' !!}</p>
                        <div class="text-left p-b30">
                            <img src="images/sign.png" alt="">
                        </div>
                        <div>
                            <a href="services-1.html" class="site-button radius-sm">
                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span>
                            </a>
                            <a href="services-detail.html" class="site-button-secondry radius-sm">
                                <span class="font-weight-700 inline-block text-uppercase p-lr15">Services</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT COMPANY SECTION END -->
