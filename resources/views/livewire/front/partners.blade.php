<!-- OUR CLIENT SLIDER START -->
<div class="section-full p-t50 p-b10 overlay-wraper site-bg-primary bg-repeat" style="background-image:url({{ asset('assets/images/background/bg-7.png') }});
">
    <style>
        .fixed-size-image {
            width: 150px;
            /* Set the desired width */
            height: 100px;
            /* Set the desired height */
            object-fit: contain;
            /* Ensures the image is contained within the set dimensions */
        }

    </style>
    <div class="container">
        <!-- IMAGE CAROUSEL START -->
        <div class="section-content">
            <div class="owl-carousel client-logo-carousel">
                @foreach($partners as $partner)
                <!-- COLUMNS -->
                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo wt-img-effect on-color">
                            <a href="javascript:;">
                                <img src="{{ Storage::url($partner->partner_image) }}" alt="{{ $partner->name }}" class="fixed-size-image">
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- IMAGE CAROUSEL END -->
    </div>
</div>
<!-- OUR CLIENT SLIDER END -->
