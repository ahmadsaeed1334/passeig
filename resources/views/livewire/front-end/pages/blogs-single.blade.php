<div>
    <x-slot name="page_title">
		{{ $page_title ?? 'Blogs' }}
	</x-slot>
    <!-- inner-hero-section start -->
    <div class="inner-hero-section style--six">
        <div class="bg-shape"><img src="{{ asset('front-end/assets/images/elements/inner-hero-shape-2.png')}}" alt="image"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <ul class="page-list">
                <li><a href="{{ route('front-end/navbar') }}">Home</a></li>
                <li><a href="#0">Pages</a></li>
                <li><a href="{{ route('front-end/blogs') }}">Blog</a></li>
                <li class="active">Single Blog</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- inner-hero-section end -->
  
      <!-- blog single section start -->
      <section class="mt-minus-270 pb-120">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="blog-single">
                <div class="blog-single__header">
                  <h3 class="blog-single__title">Lottery mistakes – check out the most common mistakes of lotto players and winners</h3>
                  <div class="blog-single__meta">
                    <div class="left">
                      <span class="post-date">Dece 15, 2023 BY</span>
                      <div class="post-author">
                        <img src="{{ asset('front-end/assets/images/blog/author.png')}}" alt="img">
                        <span class="name">Alvin Mcdaniel</span>
                      </div>
                    </div>
                    <div class="right">
                      <span>Share : </span>
                      <ul class="social-link-list">
                        <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#0"><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="#0"><i class="fab fa-reddit-alien"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div><!-- blog-single__header end -->
                <div class="blog-single__body">
                  <h4 class="title">Lottery mistakes made by players</h4>
                  <p>When you want to win the lottery, you can make a lot of lottery mistakes, which will make it difficult to win. Before you will start playing the lottery, you should find out which situations you should avoid to be safe and smart lottery player. All the situations below are really common – we know a lot of players, who made those lottery mistakes. We hope that you will not be one of them.</p>
                  <img src="{{ asset('front-end/assets/images/blog/b2.jpg')}}" alt="image">
                  <h4 class="title">Lottery winners mistakes</h4>
                  <p>Lottery winners are lucky people, but they can also make a lot of lottery mistakes. Probably they can make more  mistakes than the players because when they won, euphoria and joy can hinder logical thinking. Which lottery winners mistakes are the most common? Which situations you have to avoid? Let’s talk about the biggest lottery mistakes made by the winners of games of chance.</p>
                  <img src="{{ asset('front-end/assets/images/blog/b1.jpg')}}" alt="image">
                  <h4 class="title">Biggest lottery mistakes in history</h4>
                  <p>Do you want to know more about the biggest lottery mistakes? One of them is trying to double the winning by gambling. We heard about many lottery winners, who wanted to multiply the money. Their method was very dangerous because it was not an investment. They went to the casino or used the bookmaker and they… lost all the money.</p>
                </div>
              </div><!-- blog-single end -->
            </div>
          </div>
        </div>
      </section>
      <!-- blog single section end -->
</div>
