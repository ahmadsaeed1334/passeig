<div>
    <x-slot name="page_title">
        {{ $page_title ?? 'Gallery' }}
    </x-slot>
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{ asset('assets/images/banner/gallery-banner.jpg') }});">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Gallery</h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="{{ route('home-page') }}"><i class="fa fa-home"></i> Home</a></li>
                <li>Gallery</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->

    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">

            <!-- FILTER START -->
            <div class="filter-wrap p-b30">
                <ul class="masonry-filter link-style text-uppercase">
                    <li class="active"><a data-filter="*" href="#">All</a></li>
                    @foreach($categories as $category)
                    <li><a data-filter=".cat-{{ $category->id }}" href="#">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <!-- FILTER END -->

            <!-- GALLERY CONTENT START -->
            <div class="portfolio-wrap mfp-gallery row">
                @foreach($categories as $category)
                @foreach($category->images as $image)
                <div class="masonry-item cat-{{ $category->id }} col-lg-4 col-md-4 col-sm-6 col-xs-6 m-b30">
                    <div class="wt-gallery-bx">
                        <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                            <a href="services-detail.html">
                                <img src="{{ $image->getFirstMediaUrl('gallery') }}" alt="{{ $image->title }}">
                            </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon">
                                    <a href="services-detail.html">
                                        <i class="fa fa-external-link wt-icon-box-xs"></i>
                                    </a>
                                    <a href="{{ $image->getFirstMediaUrl('gallery') }}" class="mfp-link">
                                        <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endforeach
            </div>
            <!-- GALLERY CONTENT END -->

            <!-- PAGINATION START -->
            {{-- <div class="pagination-bx clearfix">
                <ul class="custom-pagination pagination-1">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div> --}}
            <!-- PAGINATION END -->

        </div>
    </div>
    <!-- SECTION CONTENT END -->
</div>
