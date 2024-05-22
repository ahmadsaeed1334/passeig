<div>
    <x-slot name="page_title">
		{{ $page_title ?? 'Blogs' }}
	</x-slot>
    <!-- inner-hero-section start -->
    <div class="inner-hero-section style--four">
        <div class="bg-shape"><img src="{{ asset('front-end/assets/images/elements/inner-hero-shape-2.png')}}" alt="image"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <ul class="page-list">
                <li><a href="{{ route('front-end/navbar') }}">Home</a></li>
                <li><a href="#0">Pages</a></li>
                <li class="active">Blog</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- inner-hero-section end -->
  
      <!-- blog section start  -->
      <section class="mt-minus-150 pb-120">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="blog-card has-link">
                <a href="{{ route('front-end/blogs-single') }}" class="item-link"></a>
                <div class="blog-card__thumb"><img src="{{ asset('front-end/assets/images/blog/b1.jpg')}}" alt="image"></div>
                <div class="blog-card__content">
                  <h3 class="blog-card__title">Lottery mistakes – check out the most common mistakes of lotto players and winners</h3>
                  <ul class="blog-card__meta">
                    <li>
                      <i class="far fa-comments"></i>
                      <span>20 Comments</span>
                    </li>
                    <li>
                      <i class="far fa-eye"></i>
                      <span>466 Views</span>
                    </li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan. </p>
                  <div class="blog-card__footer">
                  <div class="left">
                    <span class="post-date">Dece 15, 2023 BY</span>
                    <div class="post-author">
                      <img src="{{ asset('front-end/assets/images/blog/author.png')}}" alt="img">
                      <span class="name">Alvin Mcdaniel</span>
                    </div>
                  </div>
                  <div class="right">
                    <a href="#0" class="read-btn">Read More <i class="las la-arrow-right"></i></a>
                  </div>
                  </div>
                </div>
              </div><!-- blog-card end -->
            </div>
          </div>
          <div class="row mt-50">
            <div class="col-lg-8 mb-none-30">
              <div class="blog-card style--two mb-30 has-link">
                <a href="{{ route('front-end/blogs-single') }}" class="item-link"></a>
                <div class="blog-card__thumb"><img src="{{ asset('front-end/assets/images/blog/1.jpg')}}" alt="image"></div>
                <div class="blog-card__content">
                  <h3 class="blog-card__title">How to stop lottery addiction?</h3>
                  <ul class="blog-card__meta">
                    <li>
                      <i class="far fa-comments"></i>
                      <span>20 Comments</span>
                    </li>
                    <li>
                      <i class="far fa-eye"></i>
                      <span>466 Views</span>
                    </li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, consectetur elit. Ut adipiscing elit. Ut tempor posuere lorem</p>
                  <div class="blog-card__footer">
                  <div class="left">
                    <span class="post-date">Dece 15, 2023 BY</span>
                    <div class="post-author">
                      <img src="{{ asset('front-end/assets/images/blog/author.png')}}" alt="img">
                      <span class="name">Alvin Mcdaniel</span>
                    </div>
                  </div>
                  </div>
                </div>
              </div><!-- blog-card end -->
              <div class="blog-card style--two mb-30 has-link">
                <a href="{{ route('front-end/blogs-single') }}" class="item-link"></a>
                <div class="blog-card__thumb"><img src="{{ asset('front-end/assets/images/blog/2.jpg')}}" alt="image"></div>
                <div class="blog-card__content">
                  <h3 class="blog-card__title">5 Tips How To Win The Lottery</h3>
                  <ul class="blog-card__meta">
                    <li>
                      <i class="far fa-comments"></i>
                      <span>20 Comments</span>
                    </li>
                    <li>
                      <i class="far fa-eye"></i>
                      <span>466 Views</span>
                    </li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, consectetur elit. Ut adipiscing elit. Ut tempor posuere lorem</p>
                  <div class="blog-card__footer">
                  <div class="left">
                    <span class="post-date">Dece 15, 2023 BY</span>
                    <div class="post-author">
                      <img src="{{ asset('front-end/assets/images/blog/author.png')}}" alt="img">
                      <span class="name">Alvin Mcdaniel</span>
                    </div>
                  </div>
                  </div>
                </div>
              </div><!-- blog-card end -->
              <div class="blog-card style--two mb-30 has-link">
                <a href="{{ route('front-end/blogs-single') }}" class="item-link"></a>
                <div class="blog-card__thumb"><img src="{{ asset('front-end/assets/images/blog/3.jpg')}}" alt="image"></div>
                <div class="blog-card__content">
                  <h3 class="blog-card__title">The Positive Side To Lotteries</h3>
                  <ul class="blog-card__meta">
                    <li>
                      <i class="far fa-comments"></i>
                      <span>20 Comments</span>
                    </li>
                    <li>
                      <i class="far fa-eye"></i>
                      <span>466 Views</span>
                    </li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, consectetur elit. Ut adipiscing elit. Ut tempor posuere lorem</p>
                  <div class="blog-card__footer">
                  <div class="left">
                    <span class="post-date">Dece 15, 2023 BY</span>
                    <div class="post-author">
                      <img src="{{ asset('front-end/assets/images/blog/author.png')}}" alt="img">
                      <span class="name">Alvin Mcdaniel</span>
                    </div>
                  </div>
                  </div>
                </div>
              </div><!-- blog-card end -->
              <div class="blog-card style--two mb-30 has-link">
                <a href="{{ route('front-end/blogs-single') }}" class="item-link"></a>
                <div class="blog-card__thumb"><img src="{{ asset('front-end/assets/images/blog/4.jpg')}}" alt="image"></div>
                <div class="blog-card__content">
                  <h3 class="blog-card__title">How To Plan A Lottery Win</h3>
                  <ul class="blog-card__meta">
                    <li>
                      <i class="far fa-comments"></i>
                      <span>20 Comments</span>
                    </li>
                    <li>
                      <i class="far fa-eye"></i>
                      <span>466 Views</span>
                    </li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, consectetur elit. Ut adipiscing elit. Ut tempor posuere lorem</p>
                  <div class="blog-card__footer">
                  <div class="left">
                    <span class="post-date">Dece 15, 2023 BY</span>
                    <div class="post-author">
                      <img src="{{ asset('front-end/assets/images/blog/author.png')}}" alt="img">
                      <span class="name">Alvin Mcdaniel</span>
                    </div>
                  </div>
                  </div>
                </div>
              </div><!-- blog-card end -->
              <div class="blog-card style--two mb-30 has-link">
                <a href="{{ route('front-end/blogs-single') }}" class="item-link"></a>
                <div class="blog-card__thumb"><img src="{{ asset('front-end/assets/images/blog/5.jpg')}}" alt="image"></div>
                <div class="blog-card__content">
                  <h3 class="blog-card__title">Tips For Winning the Lottery</h3>
                  <ul class="blog-card__meta">
                    <li>
                      <i class="far fa-comments"></i>
                      <span>20 Comments</span>
                    </li>
                    <li>
                      <i class="far fa-eye"></i>
                      <span>466 Views</span>
                    </li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, consectetur elit. Ut adipiscing elit. Ut tempor posuere lorem</p>
                  <div class="blog-card__footer">
                  <div class="left">
                    <span class="post-date">Dece 15, 2023 BY</span>
                    <div class="post-author">
                      <img src="{{ asset('front-end/assets/images/blog/author.png')}}" alt="img">
                      <span class="name">Alvin Mcdaniel</span>
                    </div>
                  </div>
                  </div>
                </div>
              </div><!-- blog-card end -->
              <div class="blog-card style--two mb-30 has-link">
                <a href="{{ route('front-end/blogs-single') }}" class="item-link"></a>
                <div class="blog-card__thumb"><img src="{{ asset('front-end/assets/images/blog/6.jpg')}}" alt="image"></div>
                <div class="blog-card__content">
                  <h3 class="blog-card__title">The Evolution of The Lottery</h3>
                  <ul class="blog-card__meta">
                    <li>
                      <i class="far fa-comments"></i>
                      <span>20 Comments</span>
                    </li>
                    <li>
                      <i class="far fa-eye"></i>
                      <span>466 Views</span>
                    </li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, consectetur elit. Ut adipiscing elit. Ut tempor posuere lorem</p>
                  <div class="blog-card__footer">
                  <div class="left">
                    <span class="post-date">Dece 15, 2023 BY</span>
                    <div class="post-author">
                      <img src="{{ asset('front-end/assets/images/blog/author.png')}}" alt="img">
                      <span class="name">Alvin Mcdaniel</span>
                    </div>
                  </div>
                  </div>
                </div>
              </div><!-- blog-card end -->
            </div>
            <aside class="col-lg-4">
              <div class="sidebar">
                <div class="widget">
                  <h3 class="widget__title">sidebar</h3>
                  <form class="sidebar-search">
                    <input type="search" name="sidebar-search" id="sidebar-search" placeholder="Enter your Search Content">
                    <button type="submit"><i class="fas fa-search"></i> search</button>
                  </form>
                </div><!-- widget end -->
                <div class="widget">
                  <h3 class="widget__title">Latest Post</h3>
                  <div class="small-post-slider">
                    <div class="small-post">
                      <div class="small-post__thumb"><img src="{{ asset('front-end/assets/images/blog/7.jpg')}}" alt="image"></div>
                      <div class="small-post__content">
                        <h3 class="small-post__title">Winning The Lottery and
                          What To Do When ...</h3>
                          <ul class="blog-card__meta">
                            <li>
                              <i class="far fa-comments"></i>
                              <span>20 Comments</span>
                            </li>
                            <li>
                              <i class="far fa-eye"></i>
                              <span>466 Views</span>
                            </li>
                          </ul>
                      </div>
                    </div><!-- small-post end -->
                    <div class="small-post">
                      <div class="small-post__thumb"><img src="{{ asset('front-end/assets/images/blog/1.jpg')}}" alt="image"></div>
                      <div class="small-post__content">
                        <h3 class="small-post__title">Winning The Lottery and
                          What To Do When ...</h3>
                          <ul class="blog-card__meta">
                            <li>
                              <i class="far fa-comments"></i>
                              <span>20 Comments</span>
                            </li>
                            <li>
                              <i class="far fa-eye"></i>
                              <span>466 Views</span>
                            </li>
                          </ul>
                      </div>
                    </div><!-- small-post end -->
                    <div class="small-post">
                      <div class="small-post__thumb"><img src="{{ asset('front-end/assets/images/blog/2.jpg')}}" alt="image"></div>
                      <div class="small-post__content">
                        <h3 class="small-post__title">Winning The Lottery and
                          What To Do When ...</h3>
                          <ul class="blog-card__meta">
                            <li>
                              <i class="far fa-comments"></i>
                              <span>20 Comments</span>
                            </li>
                            <li>
                              <i class="far fa-eye"></i>
                              <span>466 Views</span>
                            </li>
                          </ul>
                      </div>
                    </div><!-- small-post end -->
                  </div><!-- small-post-slider end -->
                </div><!-- widget end -->
                <div class="widget">
                  <h3 class="widget__title">Follow  Us</h3>
                  <ul class="social-link-list">
                    <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#0"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="#0"><i class="fab fa-reddit-alien"></i></a></li>
                  </ul>
                </div><!-- widget end -->
                <div class="widget">
                  <h3 class="widget__title">Categories</h3>
                  <ul class="category-list">
                    <li><a href="#0">All <span>50</span></a></li>
                    <li><a href="#0">Jackpot <span>40</span></a></li>
                    <li><a href="#0">Winners <span>55</span></a></li>
                    <li><a href="#0">Powerball <span>36</span></a></li>
                    <li><a href="#0">Mega Millions <span>26</span></a></li>
                    <li><a href="#0">Inspiration <span>22</span></a></li>
                    <li><a href="#0">Bonus <span>38</span></a></li>
                  </ul>
                  {{-- <ul class="category-list">
                    @foreach($categories as $category)
                        <li><a href="{{ $category->categoryTranslations[0]->url($locale, $routeWithoutLocale) }}">{{ $category->categoryTranslations[0]->category_name }} <span>{{ $category->count }}</span></a></li>
                    @endforeach
                </ul> --}}
                </div><!-- widget end -->
                <div class="widget">
                  <h3 class="widget__title">Featured Tags</h3>
                  <div class="tags">
                    <a href="#0">Loot tips</a>
                    <a href="#0">Mega Millions </a>
                    <a href="#0">Lotto</a>
                    <a href="#0">Winners</a>
                    <a href="#0">Bonus</a>
                  </div>
                </div><!-- widget end -->
              </div>
            </aside>
          </div>
        </div>
      </section>
      <!-- blog section end -->
  
</div>
