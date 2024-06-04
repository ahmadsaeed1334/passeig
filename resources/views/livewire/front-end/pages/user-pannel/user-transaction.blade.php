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
             <li><a href="{{ route('front-end/user-panel') }}">My Tickets <span class="badge">04</span></a></li>
             <li><a href="{{ route('front-end/user-info') }}">Personal Information</a></li>
             <li class="active"><a href="{{ route('front-end/user-transaction') }}">Transactions</a></li>
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
         <div class="transaction-balance-wrapper mb-10" style="margin-bottom: 10px">
           <div class="left d-flex" >
             <div class="transaction-balance">
               <h4 class="balance">{{ $personalWalletBalance ? $personalWalletBalance : 00.00 }}</h4>
               <span>Personal Balance</span>
             </div>
           </div>
           <div class="right">
            <a href="#0" class="transaction-action-btn" data-bs-toggle="modal" data-bs-target="#depositModal">
                <img src="{{ asset('front-end/assets/images/icon/transaction/1.png') }}" alt="image">
                <span>Deposit</span>
            </a>
            <a href="#0" class="transaction-action-btn ms-4" data-bs-toggle="modal" data-bs-target="#withdrawModal">
                <img src="{{ asset('front-end/assets/images/icon/transaction/2.png') }}" alt="image">
                <span>Withdraw</span>
            </a>
        </div>
        @livewire('front-end.partial.deposit-modal')
        
         </div><!-- transaction-balance-wrapper end -->
         <div class="transaction-balance-wrapper">
           <div class="left d-flex">
             <div class="transaction-balance">
               <h4 class="balance">{{ $businessWalletBalance ? $businessWalletBalance : 00.00  }}</h4>
               <span>Business Balance</span>
             </div>
           </div>
           <div class="right">
             <a href="#0" class="transaction-action-btn" data-bs-toggle="modal" data-bs-target="#depositModal">
               <img src="{{ asset('front-end/assets/images/icon/transaction/1.png')}}" alt="image">
               <span>Deposit</span>
             </a>
             <a href="#0" class="transaction-action-btn ms-4">
               <img src="{{ asset('front-end/assets/images/icon/transaction/2.png')}}" alt="image">
               <span>Withdraw</span>
             </a>
           </div>
         </div><!-- transaction-balance-wrapper end -->
        
         <div class="all-transaction">
           <div class="all-transaction__header">
             <h3 class="title">All Transactions</h3>
             <div class="date-range">
               <input type="text" data-range="true" data-multiple-dates-separator=" - " data-language="en" class="datepicker-here form-control" data-position='top left' placeholder="min - max date">
               <i class="las la-calendar-alt"></i>
             </div>
           </div>
           <div class="table-responsive-xl">
             <table>
               <thead>
                 <tr>
                   <th>Name</th>
                   <th>Fee</th>
                   <th>Total Entries</th>
                 </tr>
               </thead>
               <tbody>
                @foreach($userEntries as $giveawayId => $entries)
                
                 <tr>
                   <td>
                     <div class="date">
                       <h3>{{ $entries[0]['entry']->giveaway->name }}</h3>
                     </div>
                   </td>
                   <td>
                     <p>{{ $entries[0]['fee'] }}</p>

                   </td>
                   <td>
                     <p>{{ count($entries) }}</p>
                   </td>
                 </tr>
                 @endforeach
               </tbody>
             </table>
           </div>

           <div class="load-more">
             <button type="button">Show More Entry<i class="las la-angle-down ml-2"></i></button>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 <!-- user section end -->
 </div>
 