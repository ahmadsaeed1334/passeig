<div>
    <x-slot name="page_title">
		{{ $page_title ?? 'User' }}
	</x-slot>
    <!-- inner-hero-section start -->
    <div class="inner-hero-section style--five">
  </div>
  <!-- inner-hero-section end -->
   <!-- user section start -->
   <div class="mt-minus-150 pb-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            @livewire('front-end.pages.user-pannel.user-profile')
            <div class="user-action-card">
              <ul class="user-action-list">
                <li class="active"><a href="{{ route('front-end/user-panel') }}">My Tickets <span class="badge">04</span></a></li>
                <li><a href="{{ route('front-end/user-info') }}">Personal Information</a></li>
                <li><a href="{{ route('front-end/user-transaction') }}">Transactions</a></li>
                <li><a href="{{ route('front-end/user-referral') }}">Referral Program</a></li>
                <li><a href="{{ route('front-end/user-lottery') }}">Favorite Lotteries</a></li>
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
                  <ul class="ticket-numbers-list">
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
                  <ul class="ticket-numbers-list">
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
                  <ul class="ticket-numbers-list">
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
            <div class="past-draw-wrapper">
              <h3 class="title">Past Draws</h3>
              <div class="table-responsive-lg">
                <table>
                  <thead>
                    <tr>
                      <th>Draw</th>
                      <th>Contest No</th>
                      <th>Result</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><span class="date">02.04.2023</span></td>
                      <td><span class="contest-no">R9D</span></td>
                      <td>
                        <ul class="number-list">
                          <li>1</li>
                          <li>2</li>
                          <li>3</li>
                          <li>4</li>
                          <li>5</li>
                          <li>6</li>
                          <li>7</li>
                        </ul>
                      </td>
                      <td><span class="fail">No Win</span></td>
                    </tr>
                    <tr>
                      <td><span class="date">02.04.2023</span></td>
                      <td><span class="contest-no">R9D</span></td>
                      <td>
                        <ul class="number-list">
                          <li>1</li>
                          <li>2</li>
                          <li>3</li>
                          <li>4</li>
                          <li>5</li>
                          <li>6</li>
                          <li>7</li>
                        </ul>
                      </td>
                      <td><span class="fail">No Win</span></td>
                    </tr>
                    <tr>
                      <td><span class="date">02.04.2023</span></td>
                      <td><span class="contest-no">R9D</span></td>
                      <td>
                        <ul class="number-list">
                          <li>1</li>
                          <li>2</li>
                          <li>3</li>
                          <li>4</li>
                          <li>5</li>
                          <li>6</li>
                          <li>7</li>
                        </ul>
                      </td>
                      <td><span class="fail">No Win</span></td>
                    </tr>
                    <tr>
                      <td><span class="date">02.04.2023</span></td>
                      <td><span class="contest-no">R9D</span></td>
                      <td>
                        <ul class="number-list win-list">
                          <li>1</li>
                          <li>2</li>
                          <li>3</li>
                          <li>4</li>
                          <li>5</li>
                          <li>6</li>
                          <li>7</li>
                        </ul>
                      </td>
                      <td><span class="win">Win</span></td>
                    </tr>
                    <tr>
                      <td><span class="date">02.04.2023</span></td>
                      <td><span class="contest-no">R9D</span></td>
                      <td>
                        <ul class="number-list">
                          <li>1</li>
                          <li>2</li>
                          <li>3</li>
                          <li>4</li>
                          <li>5</li>
                          <li>6</li>
                          <li>7</li>
                        </ul>
                      </td>
                      <td><span class="fail">No Win</span></td>
                    </tr>
                    <tr>
                      <td><span class="date">02.04.2023</span></td>
                      <td><span class="contest-no">R9D</span></td>
                      <td>
                        <ul class="number-list">
                          <li>1</li>
                          <li>2</li>
                          <li>3</li>
                          <li>4</li>
                          <li>5</li>
                          <li>6</li>
                          <li>7</li>
                        </ul>
                      </td>
                      <td><span class="fail">No Win</span></td>
                    </tr>
                    <tr>
                      <td><span class="date">02.04.2023</span></td>
                      <td><span class="contest-no">R9D</span></td>
                      <td>
                        <ul class="number-list">
                          <li>1</li>
                          <li>2</li>
                          <li>3</li>
                          <li>4</li>
                          <li>5</li>
                          <li>6</li>
                          <li>7</li>
                        </ul>
                      </td>
                      <td><span class="fail">No Win</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="load-more">
                <button type="button">Show More Lotteries <i class="las la-angle-down ml-2"></i></button>
              </div>
            </div><!-- past-draw-wrapper end -->
          </div>
        </div>
      </div>
    </div>
    <!-- user section end -->
  </div>
  