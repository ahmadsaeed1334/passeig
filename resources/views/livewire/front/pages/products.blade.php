<div>
    <x-slot name="page_title">
        {{ $page_title ?? 'Product' }}
    </x-slot>
    <style>
        .wt-thum-bx img {
            width: 100%;
            /* Ensure the image takes up the full width of the container */
            height: 250px;
            /* Set a fixed height for the images */
            object-fit: cover;
            /* Ensure the image scales properly to fill the container while maintaining aspect ratio */
        }

    </style>
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{ asset('assets/images/banner/product-banner.jpg') }});">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Product</h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="{{ route('home-page') }}"><i class="fa fa-home"></i> Home</a></li>
                <li>Product</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->

    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <!-- SIDE BAR START -->
                    <div class="col-lg-4 col-md-12">
                        <aside class="side-bar">

                            <!-- SEARCH -->
                            {{-- <div class="widget bg-white">
                                <h4 class="widget-title">Search</h4>
                                <div class="search-bx">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                            <input name="news-letter" type="text" class="form-control" placeholder="Write your text">
                                            <span class="input-group-btn">
                                                <button type="submit" class="site-button"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}

                            <!-- OUR CLIENT -->
                            <div class="widget">
                                <h4 class="widget-title">Our Partners</h4>
                                <div class="owl-carousel widget-client p-t10">
                                    @foreach($partners as $partner)
                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo wt-img-effect on-color">
                                                <a href="#">
                                                    <img src="{{ Storage::url($partner->partner_image) }}" alt="{{ $partner->name }}">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- NEWSLETTER -->
                            <div class="widget widget_newsletter-2 bg-white">
                                <h4 class="widget-title">Newsletter</h4>
                                <div class="newsletter-bx p-a30">
                                    <div class="newsletter-icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="newsletter-content">
                                        <i>Enter your e-mail and subscribe to our newsletter.</i>
                                    </div>

                                    @include('livewire.front.pages.newsletter')
                                </div>
                            </div>

                            <!-- RECENT POSTS -->
                            <div class="widget bg-white recent-posts-entry">
                                <h4 class="widget-title">Recent Posts</h4>
                                <div class="widget-post-bx">
                                    @foreach($blogs as $blog)
                                    <div class="widget-post clearfix">
                                        <div class="wt-post-media">
                                            <img src="{{ Storage::url($blog->image) }}" alt="{{ $blog->title }}" width="200" height="143">
                                        </div>
                                        <div class="wt-post-info">
                                            <div class="wt-post-header">
                                                <h6 class="post-title">{{ $blog->title }}</h6>
                                            </div>
                                            <div class="wt-post-meta">
                                                <ul>
                                                    <li class="post-author">By {{ $blog->user->name }}</li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> {{ $blog->comments->count() }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- GALLERY -->
                            <div class="widget widget_gallery mfp-gallery">
                                <h4 class="widget-title">Our Gallery</h4>
                                <ul>
                                    @foreach($categories as $category)
                                    @foreach($category->images as $image)
                                    <li>
                                        <div class="wt-post-thum">
                                            <a href="{{ $image->getFirstMediaUrl('gallery') }}" class="mfp-link">
                                                <img src="{{ $image->getFirstMediaUrl('gallery') }}" alt="">
                                            </a>
                                        </div>
                                    </li>
                                    @endforeach
                                    @endforeach
                                </ul>
                            </div>

                        </aside>
                    </div>
                    <!-- SIDE BAR END -->

                    <!-- PRODUCT LIST START -->
                    <div class="col-lg-8 col-md-12">
                        <div class="p-b10">
                            <h3 class="text-uppercase">Our Products</h3>
                            <div class="wt-separator-outer m-b30">
                                <div class="wt-separator style-icon">
                                    <i class="fa fa-leaf text-black"></i>
                                    <span class="separator-left site-bg-primary"></span>
                                    <span class="separator-right site-bg-primary"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                                <div class="wt-box wt-product-box">
                                    <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="#">
                                                    {{-- <a href="{{ route('product-detail', $product->id) }}"> --}}
                                                    <i class="fa fa-eye wt-icon-box-xs"></i>
                                                </a>
                                                <a class="mfp-link" href="#">
                                                    {{-- <a class="mfp-link" href="{{ route('product-detail', $product->id) }}"> --}}
                                                    <i class="fa fa-heart wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wt-info text-center">
                                        <div class="p-a10 bg-white">
                                            <h4 class="wt-title">
                                                <a href="#">{{ $product->name }}</a>
                                                {{-- <a href="{{ route('product-detail', $product->id) }}">{{ $product->name }}</a> --}}
                                            </h4>
                                            {{-- <span class="price">
                                                <del>
                                                    <span><span class="Price-currencySymbol">£</span>{{ $product->original_price }}</span>
                                            </del>
                                            <ins>
                                                <span><span class="Price-currencySymbol">£</span>{{ $product->discounted_price }}</span>
                                            </ins>
                                            </span> --}}
                                            <div class="rating-bx">
                                                @for($i = 1; $i <= 5; $i++) <i class="fa fa-star {{ $product->rating >= $i ? '' : '-o' }}"></i>
                                                    @endfor
                                            </div>
                                            <div class="p-t10">
                                                <a href="#" class="site-button  m-r15">View
                                                    {{-- <a href="{{ route('product-detail', $product->id) }}" class="site-button m-r15">View --}}
                                                    <i class="fa fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- PRODUCT LIST END -->
                </div>
            </div>
        </div>
    </div>
    <!-- SECTION CONTENT END -->
</div>
