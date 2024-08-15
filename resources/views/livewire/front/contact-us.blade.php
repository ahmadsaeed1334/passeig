 <!-- CONTACT US SECTION END  -->
 <div class="section-full overlay-wraper bg-parallax" data-stellar-background-ratio="0.2" style="background-image:url({{ asset('assets/images/background/bg-11.jpg') }});">
     <div class="overlay-main bg-white opacity-07"></div>
     <div class="container">
         <div class="row conntact-home">
             <div class="col-lg-5 col-md-5 contact-home4-left">
                 <div class="section-content p-tb30 overlay-wraper">
                     <div class="overlay-main site-bg-primary opacity-09"></div>
                     <div class="p-a30" style="z-index:1; position:relative">
                         <h3 class="font-weight-400 text-white m-b5">{{ $bestService->top_title ?? 'Make an' }}</h3>
                         <h2 class="text-white m-t0" style="font-family: 'Crete Round', serif;">
                             <i>{{ $bestService->title ?? 'Appointment' }}</i>
                         </h2>
                         <form class="cons-contact-form2 form-transparent" method="post" action="https://thewebmax.org/spa/form-handler2.php">
                             <div class="form-group">
                                 <input name="username" type="text" required class="form-control" placeholder="Name">
                             </div>
                             <div class="form-group">
                                 <input name="email" type="text" class="form-control" required placeholder="Email">
                             </div>
                             <div class="form-group">
                                 <input name="phone" type="text" class="form-control" required placeholder="Phone">
                             </div>
                             <div class="form-group">
                                 <textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
                             </div>
                             <button type="submit" class="site-button-secondry radius-sm">
                                 <span class="font-weight-700 inline-block text-uppercase p-lr15">Submit</span>
                             </button>
                         </form>
                     </div>
                 </div>
             </div>
             <div class="col-lg-7 col-md-7 contact-home4-right p-t50 p-b50">
                 <div class="section-content">
                     <div class="opening-block bdr-5 bdr-primary p-a40 text-right">
                         <a href="services-2.html" class="site-bg-primary book-now-btn p-tb5 p-lr15 text-uppercase font-16 font-weight-500">All Services</a>
                         <h2 class="text-uppercase text-secondry m-tb0">{{ $bestService->title ?? 'Best Services' }}</h2>
                         <span class="font-60 font-weight-600 text-uppercase site-text-primary">Open Hours</span>
                         <p>{!! $bestService->description ?? 'If you feel tired and stressed after a working day, we are happy to give you an enjoyable and healthy solution to find your balance again.' !!}</p>
                         <div class="clearfix">
                             <ul class="list-unstyled m-b0">
                                 {!! $bestService->description_2 !!}
                                 {{-- <li>
                                     <div class="clearfix"><span class="opening-date">Mon-Fri:</span><span class="opening-time">9 AM - 6 PM</span></div>
                                 </li> --}}
                                 {{-- <li>
                                     <div class="clearfix"><span class="opening-date">Saturday:</span> <span class="opening-time">9 AM- 6 PM</span></div>
                                 </li>
                                 <li>
                                     <div class="clearfix"><span class="opening-date">Sunday:</span> <span class="opening-time">Closed</span></div>
                                 </li> --}}
                             </ul>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
