<div>
    <x-slot name="page_title">
		{{ $page_title ?? 'Contests' }}
	</x-slot>
    @include('livewire.front-end.contests.inner-hero-one')
<section class="pb-120 mt-minus-300">
 
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="clock-wrapper">
            <p class="mb-2">This competition ends in:</p>
            <div class="clock" data-clock="{{ $giveaway->due_date }}"></div>
          </div><!-- clock-wrapper end -->
        </div>
    
        <div class="col-lg-12">
          <div class="contest-cart">
            <div class="contest-cart__left">
              <div class="contest-cart__slider-area">
                <div class="contest-cart__thumb-slider">
                  <div class="single-slide"><img src="{{ asset('storage/' . $giveaway->file_path) }}" alt="image"></div>
                  <div class="single-slide"><img src="{{ asset('front-end/assets/images/contest/b1.png')}}" alt="image"></div>
                  <div class="single-slide"><img src="{{ asset('front-end/assets/images/contest/b1.png')}}" alt="image"></div>
                  <div class="single-slide"><img src="{{ asset('front-end/assets/images/contest/b1.png')}}" alt="image"></div>
                </div><!-- contest-cart__thumb-slider end -->
                <div class="contest-cart__nav-slider">
                  <div class="single-slide"><img src="{{ asset('front-end/assets/images/contest/s1.png')}}" alt="image"></div>
                  <div class="single-slide"><img src="{{ asset('front-end/assets/images/contest/s2.png')}}" alt="image"></div>
                  <div class="single-slide"><img src="{{ asset('front-end/assets/images/contest/s3.png')}}" alt="image"></div>
                  <div class="single-slide"><img src="{{ asset('front-end/assets/images/contest/s1.png')}}" alt="image"></div>
                </div><!-- contest-cart__nav-slider end -->
              </div>
            </div><!-- contest-cart__left end -->
            <div class="contest-cart__right">
              <h4 class="subtitle">Enter now for a chance to win</h4>
              <h3 class="contest-name">{{ $giveaway->name }}</h3>
              <p>{{ Str::limit($giveaway->description, 200) }}</p>
              <div class="contest-num">Contest no: <span>B2T</span></div>
              <h4>Tickets Sold</h4>
              <div class="ticket-amount">
                <span class="left">0</span>
                <span class="right">29994</span>
                <div class="progressbar" data-perc="70%">
                  <div class="bar"></div>
                </div>
                <p>Only 12045 remaining!</p>
              </div>
              <div class="ticket-price">
                <span class="amount">{{ $giveaway->fee }}</span>
                <small>Per ticket</small>
              </div>
              <div class="d-flex flex-wrap align-items-center mb-30">
                <div class="select-quantity">
                  <span class="caption">Quantity</span>
                  <div class="quantity">
                    <input type="number" min="0" max="100" step="1" value="16" readonly>
                  </div>
                </div><!-- select-quantity end -->
                <div class="mt-sm-0 mt-3"><a href="#0" class="cmn-btn style--three">buy tickets</a></div>
              </div>
              <ul class="social-links align-items-center">
                <li>Share :</li>
                <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#0"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div><!-- contest-cart__right end -->
          </div><!-- contest-cart end -->
        </div><!-- col-lg-12 end -->
        <div class="col-lg-10">
          <div class="contest-description">
            <ul class="nav nav-tabs justify-content-center mb-30 pb-4 border-0" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="cmn-btn active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" role="tab" aria-controls="description" aria-selected="true"><span class="mr-3"></span> description</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="cmn-btn" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" role="tab" aria-controls="details" aria-selected="false"><span class="mr-3"></span>competition details</button>
              </li>
            </ul>

            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                <div class="content-block">
                  <h3 class="title">{{ $giveaway->short_description}}</h3>
                  <p>{{$giveaway->long_description}}</p>
                </div><!-- content-block end -->
                {{-- <div class="content-block">
                  <h3 class="title">Specifications</h3>
                  <div class="row mb-none-30">
                    @foreach ($giveawaySpecifications as $specification)
                    <div class="col-lg-4 col-sm-6 mb-30">
                        <div class="icon-item">
                            <div class="icon-item__thumb"><img src="{{ asset('storage/' . $specification->card_icon)}}" alt="image"></div>
                            <div class="icon-item__content">
                                <p>{{ $specification->title }}</p>
                                <span>{{ $specification->value }}</span>
                            </div>
                        </div><!-- icon-item end -->
                    </div>
                @endforeach
                  </div>
                </div><!-- content-block end --> --}}
              </div>
              <div class="tab-pane fade" id="details" role="tabpanel" aria-labelledby="details-tab">
                <div class="content-block">
                  <h3 class="title">Competition Details</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ex eget mi sollicitudin consequat. Sed rhoncus ligula vel justo dignissim aliquam. Maecenas non est vitae ipsum luctus feugiat. Fusce purus nunc, sodales at condimentum sed, ullamcorper a nulla. Nam justo est, venenatis quis tellus in, volutpat eleifend nunc. Vestibulum congue laoreet mi non interdum. Ut ut dapibus tellus.</p>
                </div><!-- content-block end -->
              </div>
            </div><!-- tab-content end -->
          </div><!-- contest-description end -->
        </div>
      </div>
      @include('livewire.front-end.contests.leaderBoard-style')
      <div class="row mt-50 pt-3">
        <div class="col-lg-7">
          <div class="contest-details-content">
            
            <div class="contest-description">
              <div class="content-block">
                <h3 class="title">Specifications</h3>
                <div class="row mb-none-30">
                  @foreach ($giveawaySpecifications as $specification)
                  <div class="col-lg-4 col-sm-6 mb-30">
                      <div class="icon-item">
                          <div class="icon-item__thumb"><img src="{{ asset('storage/' . $specification->card_icon)}}" alt="image"></div>
                          <div class="icon-item__content">
                              <p>{{ $specification->title }}</p>
                              <span>{{ $specification->value }}</span>
                          </div>
                      </div><!-- icon-item end -->
                  </div>
              @endforeach
                </div>
              </div>
    
                    </div>
                  </div>
                </div>
              
        <div class="col-lg-5 mt-lg-0 mt-5">
          <div class="contest-sidebar">
            <div class="contest-sidebar__cart">
              
           
              <main>
                <div id="header">
                    <h1>Top Ranking</h1>
                    <button class="share">
                        <i class="fas fa-share-network"></i>
                    </button>
                </div>
                <div id="leaderboard">
                  <div class="ribbon"></div>
                  <table>
                    @if ($registeredUserss->isNotEmpty())
                      @foreach($registeredUserss as $index => $user)
                          <tr>
                              <td class="number">{{ $index + 1 }}</td>
                              <td class="name">{{ $user->name }}</td>
                              <td class="points">
                                {{ $user->entry_count }} 
                                @php
                                $totalEntries = $registeredUserss->sum('entry_count');
                                $winningPercentage = ($user->entry_count / $totalEntries) * 100;
                            @endphp
                           <span> ({{ number_format($winningPercentage, 2) }}%)</span>
                                @if ($index === 0)
                                    <img class="gold-medal" src="{{asset('front-end/assets/images/leaderboard/gold-madal.png')}}" alt="gold medal"/>
                                @elseif ($index === 1)
                                    <img class="gold-medal" src="{{asset('front-end/assets/images/leaderboard/silver-madal.png')}}" alt="silver medal"/>
                                @elseif ($index === 2)
                                    <img class="gold-medal" src="{{asset('front-end/assets/images/leaderboard/bronze-madal.png')}}" alt="bronze medal"/>
                                @endif
                            </td>
                           </tr>
                      @endforeach
                      @else
            <tr>
                <td colspan="3">No users found.</td>
            </tr>
        @endif
                  </table>
              </div>
            </main>
            {{-- {{ $registeredUserss->links() }} --}}
          
            </div><!-- contest-sidebar__cart end -->
            <ul class="social-links align-items-center">
              <li>Share :</li>
              <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#0"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
          </div><!-- contest-sidebar end -->
        </div>
      </div>
    </div>
  </section>
</div>