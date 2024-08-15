<!-- OUR PRODUCT SECTION START -->
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
            <h1><span class="site-text-primary">{{ $productTitle->title ?? 'Our Products' }}</span></h1>
            <div class="wt-separator-outer ">
                <div class="wt-separator style-icon">
                    <i class="fa fa-leaf text-black"></i>
                    <span class="separator-left site-bg-primary"></span>
                    <span class="separator-right site-bg-primary"></span>
                </div>
            </div>
            <p>{!! $productTitle->long_description ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at.' !!}</p>
        </div>
        <!-- TITLE END-->
        <div class="section-content">
            <div class="row d-flex justify-content-center">
                @foreach($products as $product)
                <!-- COLUMNS 1 -->
                <div class="col-lg-4 col-md-4 col-sm-6 m-b30 m-b30">
                    <div class="wt-box">
                        <div class="wt-media site-text-primary m-b20 radius-bx circle-effect-1">
                            <img src="{{ Storage::url($product->image) }}" class="radius-bx fixed-expert-image " alt="{{ $product->name }}">
                        </div>
                        <div class="wt-info p-t30 text-center">
                            <h2>{{ $product->name }}</h2>
                            <a href="#" class="site-button text-uppercase radius-sm font-weight-700 button-lg">View</a>
                            {{-- <a href="{{ route('products.show', $product->id) }}" class="site-button text-uppercase radius-sm font-weight-700 button-lg">View</a> --}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- OUR PRODUCT SECTION END -->
