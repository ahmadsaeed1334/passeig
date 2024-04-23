<div><section class="pb-120 mt-minus-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="contest-wrapper">
            <div class="contest-wrapper__header pt-120">
              <h2 class="contest-wrapper__title">Latest Contest</h2>


              <div class="contest-details__nav-slider"> 
  
                @foreach ($categories as $index => $category)
  
                <div class="single-slide ">
                  <ul class="nav winner-tab-nav" id="categoryTab{{ $index + 1 }}" role="tablist">
                  <li class="nav-item" role="presentation">
                 <button class="nav-link {{ $loop->first ? 'active' : '' }}" 
                 id="{{ $category->name }}-tab"  
                 data-bs-toggle="tab" 
                 data-bs-target="#{{ strtoupper($category->slug) }}"   
                role="tab" 
                aria-controls="{{ strtoupper($category->slug)}}" 
                aria-selected="{{ $loop->first ? 'true' : 'false' }}"
                onclick="toggleActiveTab(this)"
                {{-- wire:click.prevent="giveaway.filterGiveaways({{ $category->id }})" --}}
                >
              <div class="icon-thumb"><img src="{{ asset('storage/'. $category->icon ) }}" alt="image"></div>
              <span>{{ $category->name }}</span>
            </button>
          </li>
        </ul>
      </div>
      @endforeach
    </div>

            </div>
            <div class="contest-wrapper__body">

              <div class="row contest-filter-wrapper justify-content-center mt-30 mb-none-30">
                <div class="col-lg-2 col-sm-6 mb-30">
                  <select>
                    <option>SORT BY</option>
                    <option>Filter option</option>
                    <option>Filter option</option>
                    <option>Filter option</option>
                    <option>Filter option</option>
                    <option>Filter option</option>
                    <option>Filter option</option>
                  </select>
                </div>
                <div class="col-lg-2 col-sm-6 mb-30">
                  <select>
                    <option>ALL MAKES</option>
                    <option>Filter option</option>
                    <option>Filter option</option>
                    <option>Filter option</option>
                    <option>Filter option</option>
                    <option>Filter option</option>
                    <option>Filter option</option>
                  </select>
                </div>
                <div class="col-lg-3 mb-30">
                  <div class="rang-slider">
                    <span class="caption">Ticket Price</span>
                    <div id="slider-range-min-one" class="invest-range-slider" data-value="8" data-maxValue="16"></div>
                    <div class="amount-wrapper">
                      <span class="min-amount">0</span>
                      <div class="main-amount">
                        <input type="text" class="calculator-invest" id="basic-amount" readonly>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-sm-4 mb-30">
                  <div class="action-btn-wrapper">
                    <button type="button" class="action-btn"><i class="lar la-heart"></i></button>
                    <button type="button" class="action-btn"><i class="las la-redo-alt"></i></button>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-8 mb-30">
                  <form class="contest-search-form">
                    <input type="text" placeholder="SEARCH HERE">
                    <button><i class="fas fa-search"></i></button>
                  </form>
                </div>
              </div><!-- row end -->
              <div class="tab-content mt-50" id="myTabContent">
                @forelse ($categories as  $index => $category)
                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="{{ strtoupper($category->slug) }}" role="tabpanel" aria-labelledby="{{ $category->name }}-tab">

                {{-- <div class="tab-pane fade {{ $selectedCategoryId === $category->id ? 'show active' : '' }}" id="{{ $category->name }}" role="tabpanel" aria-labelledby="{{ $category->name }}-tab"> --}}

                  <div class="row mb-none-30 mt-50">
                    @forelse  ($giveaways as $giveaway)
                    @if (in_array($category->id, $giveaway->categories->pluck('id')->toArray()) && $giveaway->status === 'active')

                    <div class="col-xl-4 col-md-6 mb-30">
                    
                      <div class="contest-card">
                        <a href="{{ route('front-end/contest-details-one', ['giveawayId' => $giveaway->id]) }}" class="item-link"></a>
                        <div class="contest-card__thumb">
                          
                          <img src="{{ asset('storage/' . $giveaway->file_path) }}" alt="image">
                          <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
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
                      </div><!-- contest-card end -->
                     
                    </div> 
                    @endif
                    @empty
                    {!! no_data() !!}
                    @endforelse
                  </div>
              </div>
              @empty
              {!! no_data() !!}
              @endforelse
            </div>
          </div><!-- contest-wrapper end -->
        </div>
      </div>
    </div>
    <script>
      function toggleActiveTab(button) {
          // Remove 'active' class from all tab buttons
          document.querySelectorAll('.nav-link').forEach(function(btn) {
              btn.classList.remove('active');
          });
          
          // Add 'active' class to clicked tab button
          button.classList.add('active');
          
          // Hide all tab contents
          document.querySelectorAll('.tab-pane').forEach(function(tab) {
              tab.classList.remove('active');
              tab.classList.remove('show');
          });
          
          // Show the corresponding tab content
          var tabId = button.getAttribute('data-bs-target').substring(1);
          document.getElementById(tabId).classList.add('active');
          document.getElementById(tabId).classList.add('show');
      }
  </script>

  </section></div>