<div>
    <x-slot name="page_title">
		{{ $page_title ?? 'User' }}
	</x-slot>
    <!-- inner-hero-section start -->
    <div class="inner-hero-section style--five">
    </div>
    <!-- inner-hero-section end -->

    <!-- user section start -->
    <div wire:ignore class="mt-minus-150 pb-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            @livewire('front-end.pages.user-pannel.user-profile')
            <div class="user-action-card">
              <ul class="user-action-list">
                <li><a href="{{ route('front-end/user-panel') }}">My Tickets <span class="badge">04</span></a></li>
                <li><a href="{{ route('front-end/user-info') }}">Personal Information</a></li>
                <li><a href="{{ route('front-end/user-transaction') }}">Transactions</a></li>
                <li><a href="{{ route('front-end/user-referral') }}">Referral Program</a></li>
                <li class="active"><a href="{{ route('front-end/user-lottery') }}">Favorite Lotteries</a></li>
                <li><a href="{{ route('front-end/contact') }}">Help Center</a></li>
                <li><a href="#0"><form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="dropdown-item">Log Out</button>
              </form></a></li>
              </ul>
            </div><!-- user-action-card end -->
          </div>
          <div class="col-lg-8 mt-lg-0 mt-4">
            <div class="upcoming-draw-wrapper">
              <h3 class="title">Upcoming Draw</h3>
              <div class="draw-ticket-slider">
                <div class="draw-single-ticket">
                  <div class="draw-single-ticket__header">
                    <div class="left">Tickey#1</div>
                    <div class="right">Contest No:R9D</div>
                  </div>
                  <div class="circle-divider"><img src="{{ asset('front-end/assets/images/elements/circle-border.png')}}" alt="image"></div>
                  <ul class="ticket-numbers-list active">
                    <li>23</li>
                    <li>22</li>
                    <li>19</li>
                    <li>9</li>
                    <li>50</li>
                    <li>11</li>
                    <li>12</li>
                  </ul>
                </div><!-- draw-single-ticket end -->
                <div class="draw-single-ticket">
                  <div class="draw-single-ticket__header">
                    <div class="left">Tickey#1</div>
                    <div class="right">Contest No:R9D</div>
                  </div>
                  <div class="circle-divider"><img src="{{ asset('front-end/assets/images/elements/circle-border.png')}}" alt="image"></div>
                  <ul class="ticket-numbers-list active">
                    <li>23</li>
                    <li>22</li>
                    <li>19</li>
                    <li>9</li>
                    <li>50</li>
                    <li>11</li>
                    <li>12</li>
                  </ul>
                </div><!-- draw-single-ticket end -->
                <div class="draw-single-ticket">
                  <div class="draw-single-ticket__header">
                    <div class="left">Tickey#3</div>
                    <div class="right">Contest No:R9D</div>
                  </div>
                  <div class="circle-divider"><img src="{{ asset('front-end/assets/images/elements/circle-border.png')}}" alt="image"></div>
                  <ul class="ticket-numbers-list active">
                    <li>23</li>
                    <li>22</li>
                    <li>19</li>
                    <li>9</li>
                    <li>50</li>
                    <li>11</li>
                    <li>12</li>
                  </ul>
                </div><!-- draw-single-ticket end -->
              </div><!-- draw-ticket-slider end -->
            </div><!-- upcoming-draw-wrapper end -->
            <div class="row mt-30  mb-none-30">
              @foreach($favoriteGiveaways as $giveaway)
        <div class="col-xl-6 col-lg-12 col-md-6 mb-30">
                    
            <div class="contest-card">
              <a href="{{ route('front-end/contest-details-one', ['giveawayId' => $giveaway->id]) }}" class="item-link"></a>
              <div class="contest-card__thumb">
                
                <img src="{{ asset('storage/' . $giveaway->file_path) }}" alt="image">
                {{-- <a href="#0" class="action-icon"><i class="lar la-heart"></i></a>
                <a href="#0" class="action-icon"><i class="far fa-heart"></i></a> --}}
                @if($giveaway->isFavorited())
      <a href="#" class="action-icon" wire:click.prevent="toggleFavorite({{ $giveaway->id }})">
          <i class="lar la-heart"></i>
      </a>
  @else
  <a href="#" class="action-icon" wire:click.prevent="toggleFavorite({{ $giveaway->id }})">
    <i class="lar la-heart"></i>
</a>
  @endif
                <div class="contest-num">
                  <span>contest no:</span>
                  <h4 class="number">b2t</h4>
                </div>
              </div>
              <div class="contest-card__content">
                <div class="left">
                  <h5 class="contest-card__name">{{ Str::title($giveaway->name) }}</h5>
                </div>
                <div class="right">
                  <span class="contest-card__price">{{ $giveaway->fee }}</span>
                  <p>Entry price</p>
                </div>
              </div>
              <div class="contest-card__footer">
                @php
                 $totalEntries = \App\Models\GiveawayEntry::where('giveaway_id', $giveaway->id)->count();
                @endphp
                <ul class="contest-card__meta">
                  <li>
                    <i class="las la-clock"></i>
                    {{ \Carbon\Carbon::now()->diffInDays($giveaway->due_date) }}d</span> 
                  </li>
                  <li>
                    <i class="las la-ticket-alt"></i>
                    <span>{{ $totalEntries }}</span>
                    <p>Total Entries</p>
                  </li>
                </ul>
              </div>
           
          </div> <!-- contest-card end -->
        </div>
    @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- user section end -->
</div>
