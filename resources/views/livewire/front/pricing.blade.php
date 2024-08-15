 <!-- PRICING SECTION START  -->
 <div class="section-full bg-gray p-t100 p-b70">
     <div class="container">
         <!-- TITLE START-->
         <div class="section-head text-center">
             <h1><span class="site-text-primary">Our</span> Pricing</h1>
             <div class="wt-separator-outer">
                 <div class="wt-separator style-icon">
                     <i class="fa fa-leaf text-black"></i>
                     <span class="separator-left site-bg-primary"></span>
                     <span class="separator-right site-bg-primary"></span>
                 </div>
             </div>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a
                 porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per
                 conubia nostra, per inceptos himenaeos.</p>
         </div>
         <!-- TITLE END-->
         <div class="section-content">
             <div class="owl-carousel our-pricing-carousel owl-btn-vertical-center owl-btn-hover nav nav-tabs">
                 @foreach($categories as $category)
                 <div class="item {{ $loop->first ? 'active-arrow active' : '' }}">
                     <a data-bs-toggle="tab" href="#pricing-item{{ $category->id }}" class="tab-block">
                         <div class="our-pricing-tab radius-sm bdr-1 bdr-gray">
                             <div class="wt-icon-box-wraper center p-lr10">
                                 <div class="icon-lg m-b5">
                                     <span class="icon-cell text-black">
                                         <img src="{{ asset('storage/' . $category->icon_image) }}" alt="{{ $category->name }}">
                                     </span>
                                 </div>
                                 <div class="icon-content">
                                     <span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">
                                         {{ $category->name }}
                                     </span>
                                 </div>
                             </div>
                         </div>
                     </a>
                 </div>
                 @endforeach
             </div>

             <div class="tab-content m-b30">
                 @foreach($categories as $category)
                 <div id="pricing-item{{ $category->id }}" class="pricing-tab-content-block tab-pane {{ $loop->first ? 'active-arrow' : '' }}">
                     <div class="section-content p-t50">
                         <div class="wt-tabs vertical bg-tabs">
                             <ul class="nav nav-tabs">
                                 @foreach($category->services as $service)
                                 <li class="nav-item">
                                     <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-bs-toggle="tab" href="#pricing-tab{{ $service->id }}">
                                         {{ $service->service_name }}
                                     </a>
                                 </li>
                                 @endforeach
                             </ul>
                             <div class="tab-content p-l50">
                                 @foreach($category->services as $service)
                                 <div id="pricing-tab{{ $service->id }}" class="tab-pane {{ $loop->first ? 'active' : '' }}">
                                     <div class="pricing-tab-inner">
                                         <div class="row">
                                             <div class="col-lg-6 col-md-12">
                                                 <div class="wt-media">
                                                     <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->service_name }}">
                                                 </div>
                                             </div>
                                             <div class="col-lg-6 col-md-12">
                                                 <div class="wt-tilte">
                                                     <h3 class="font-26 font-weight-400">{{ $service->service_name }}</h3>
                                                     <h4 class="site-text-primary">${{ $service->amount }}</h4>
                                                     <p>{!! $service->description !!}</p>
                                                     <a href="#" class="site-button skew-icon-btn radius-sm">
                                                         {{-- <a href="{{ route('services.detail', $service->id) }}" class="site-button skew-icon-btn radius-sm"> --}}
                                                         <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span>
                                                     </a>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 @endforeach
                             </div>
                         </div>
                     </div>
                 </div>
                 @endforeach
             </div>
         </div>


     </div>
 </div>
 <!-- PRICING SECTION END  -->
