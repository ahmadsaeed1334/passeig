<!-- OUR SERVICES SECTION START -->
<div class="section-full bg-gray p-t100 p-b70 bg-repeat" style="background-image:url(../images/background/bg-6.jpg);">
    <div class="container-fluid">
        <!-- TITLE START-->
        <div class="section-head text-center">
            <h1><span class="site-text-primary">{{ $servicesTitle->title ?? 'Services' }}</span> </h1>
            <div class="wt-separator-outer ">
                <div class="wt-separator style-icon">
                    <i class="fa fa-leaf text-black"></i>
                    <span class="separator-left site-bg-primary"></span>
                    <span class="separator-right site-bg-primary"></span>
                </div>
            </div>
            <p>{{ $servicesTitle->long_description ?? 'Our services description' }}</p>
        </div>
        <!-- TITLE END-->
        <div class="section-content our-services-index">
            <div class="owl-carousel home-carousel-2 m-b30">
                @foreach($services as $service)
                <div class="item">
                    <div class="wt-box p-t50">
                        <div class="wt-media site-text-primary m-b20 radius-bx circle-effect-1 wt-img-overlay11">
                            <img src="{{ asset('storage/' . $service->image) }}" class="radius-bx " alt="{{ $service->title }}">
                            <div class="text-center p-a30 wt-img-overlay11-content text-white">
                                <div class="overlay-11-detail">
                                    <div class="overlay-11-info">
                                        <p class="m-b0">{{ $service->short_description }}</p>
                                        <h4 class="m-b0"><a href="product-detail.html">More</a></h4>
                                    </div>
                                </div>
                                <div class="site-bg-primary bg-color radius-bx opacity-08"></div>
                            </div>
                            <div class="price-tag">
                                <div class="price-circle bg-white text-center site-text-primary radius-bx">
                                    <span class="font-18">${{ $service->price }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="wt-info p-t30 text-center">
                            <h2>{{ $service->title }}</h2>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- OUR SERVICES SECTION END -->
