<!-- OUR EXPERTS SECTION START -->
<div class="section-full bg-white p-t100 p-b70">
    <style>
        .fixed-expert-image {
            width: 100%;
            height: 310px;
            /* object-fit: cover; */
            border-radius: 100%;
        }

    </style>
    <div class="container">
        <!-- TITLE START-->
        <div class="section-head text-center">
            <h1><span class="site-text-primary">{{ $expertTitle->title ?? 'Our' }}</span> Experts</h1>
            <div class="wt-separator-outer ">
                <div class="wt-separator style-icon">
                    <i class="fa fa-leaf text-black"></i>
                    <span class="separator-left site-bg-primary"></span>
                    <span class="separator-right site-bg-primary"></span>
                </div>
            </div>
            <p>{{ $expertTitle->description ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.' }}</p>
        </div>
        <!-- TITLE END-->
        <div class="section-content">
            <div class="row d-flex justify-content-center">
                @foreach($experts as $expert)
                <!-- COLUMNS 1 -->
                <div class="col-lg-4 col-md-4 col-sm-6 m-b30">
                    <div class="wt-box">
                        <div class="wt-media site-text-primary m-b20 radius-bx circle-effect-1">
                            <img src="{{ $expert->image ? Storage::url($expert->image) : asset('assets/images/our-experts/default.jpg') }}" class="radius-bx fixed-expert-image" alt="">
                        </div>
                        <div class="wt-info p-t30 text-center">
                            <h2>{{ $expert->name }}</h2>
                            <p>{{ $expert->title }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- OUR EXPERTS SECTION END -->
