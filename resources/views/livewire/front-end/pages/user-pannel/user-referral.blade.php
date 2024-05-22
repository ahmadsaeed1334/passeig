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
             <li><a href="{{ route('front-end/user-transaction') }}">Transactions</a></li>
             <li class="active"><a href="{{ route('front-end/user-referral') }}">Referral Program</a></li>
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
         <div class="referral-link-wrapper">
           <h3 class="title">Partners</h3>
           <div class="copy-link">
             <span class="copy-link-icon"><i class="las la-link"></i></span>
             <span class="label">Referral Link :</span>
             <div class="copy-link-inner">
               <form data-copy=true>
                 <input type="text" value="https://rifa.com/?ref=albert24" data-click-select-all>
                 <input type="submit" value="Copy Link">
               </form>
             </div>
           </div>
         </div>
 
         <div class="referral-overview mt-30">
           <div class="row justify-content-center mb-none-30">
             <div class="col-lg-10 col-sm-12 mb-30">
               <div class="referral-crad">
                <h3 class="title">Share To Points with Friends</h3>
                <div class="sidebar">
                <div class="widget">
                  {{-- <h3 class="widget__title">sidebar</h3> --}}
                  <form wire:ignore wire:submit.prevent="shareBalance" class="sidebar-search" >
                    <input type="search" wire:model="recipientEmail" name="sidebar-search" id="sidebar-search" placeholder="Recipient's Email">
                    <input type="search" wire:model="amount" name="sidebar-search" id="sidebar-search" placeholder="Enter your Amount to Share">
                    <!-- Select option to choose wallet type -->
                    <select wire:model="selectedWallet" name="selectedWallet" class="mt-2" id="selectedWallet">
                      <option value="">-- Select Wallet --</option>
                      <option value="business">Business Wallet</option>
                      <option value="personal">Personal Wallet</option>
                  </select>
                    <button wire:loading.class="loading" type="submit"> Share</button>
                  </form>
                  <style>
                    .loading {
                     opacity: 0.5; 
                     cursor: wait;
                     }
                  </style>
                </div><!-- widget end -->
                </div><!-- widget end -->
          
               </div><!-- referral-crad end -->
             </div>
           </div>
         </div>
         <div class="referral-transaction">
           <div class="all-transaction__header">
             <h3 class="title">Your Partners:</h3>
             <div class="date-range">
               <input type="text" data-range="true" data-multiple-dates-separator=" - " data-language="en" class="datepicker-here form-control" data-position='top left' placeholder="min - max date">
               <i class="las la-calendar-alt"></i>
             </div>
           </div>
           <div class="table-responsive-lg">
             <table>
               <thead>
                 <tr>
                   <th>Date</th>
                   <th>Level</th>
                   <th>USERNAME</th>
                   <th>E-mail</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <td>
                     <div class="date">
                       <span>16</span>
                       <span class="month">APR</span>
                     </div>
                   </td>
                   <td>Level01</td>
                   <td>Maxine24</td>
                   <td><a href="https://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="216c4059484f44131561464c40484d0f424e4c">[email&#160;protected]</a></td>
                 </tr>
                 <tr>
                   <td>
                     <div class="date">
                       <span>16</span>
                       <span class="month">APR</span>
                     </div>
                   </td>
                   <td>Level01</td>
                   <td>Maxine24</td>
                   <td><a href="https://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="773a160f1e1912454337101a161e1b5914181a">[email&#160;protected]</a></td>
                 </tr>
                 <tr>
                   <td>
                     <div class="date">
                       <span>16</span>
                       <span class="month">APR</span>
                     </div>
                   </td>
                   <td>Level01</td>
                   <td>Maxine24</td>
                   <td><a href="https://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4d002c352423287f790d2a202c2421632e2220">[email&#160;protected]</a></td>
                 </tr>
                 <tr>
                   <td>
                     <div class="date">
                       <span>16</span>
                       <span class="month">APR</span>
                     </div>
                   </td>
                   <td>Level01</td>
                   <td>Maxine24</td>
                   <td><a href="https://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="571a362f3e3932656317303a363e3b7934383a">[email&#160;protected]</a></td>
                 </tr>
                 <tr>
                   <td>
                     <div class="date">
                       <span>16</span>
                       <span class="month">APR</span>
                     </div>
                   </td>
                   <td>Level01</td>
                   <td>Maxine24</td>
                   <td><a href="https://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cf82aeb7a6a1aafdfb8fa8a2aea6a3e1aca0a2">[email&#160;protected]</a></td>
                 </tr>
                 <tr>
                   <td>
                     <div class="date">
                       <span>16</span>
                       <span class="month">APR</span>
                     </div>
                   </td>
                   <td>Level01</td>
                   <td>Maxine24</td>
                   <td><a href="https://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9ed3ffe6f7f0fbacaadef9f3fff7f2b0fdf1f3">[email&#160;protected]</a></td>
                 </tr>
               </tbody>
             </table>
           </div>
           <div class="load-more">
             <button type="button">Show More Lotteries <i class="las la-angle-down ml-2"></i></button>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 <!-- user section end -->

 
 <style>
  .nice-select.open .list{
    background-color: transparent;
    background-image: -moz-linear-gradient(7deg, rgb(236, 19, 121) 0%, rgb(108, 0, 146) 100%);
    background-image: -webkit-linear-gradient(7deg, rgb(236, 19, 121) 0%, rgb(108, 0, 146) 100%);
    background-image: -ms-linear-gradient(7deg, rgb(236, 19, 121) 0%, rgb(108, 0, 146) 100%);
    box-shadow: 0px 3px 7px 0px rgba(0, 0, 0, 0.35);
    /* width: 75px; */
  }
  .nice-select.open .list:hover{
    background-color: transparent;

  }
.nice-select .option{
    color: white;
    background-color: transparent;
  }
  .nice-select .option.focus, .nice-select .option.selected.focus{
    background-color: transparent;
  }
  .nice-select .option, .nice-select .option.selected{
    background-color: transparent;
 
  }
 </style>
  </div>