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
         <div class="user-card">
           <div class="avatar-upload">
             <div class="obj-el"><img src="{{ asset('front-end/assets/images/elements/team-obj.png')}}" alt="image"></div>
             <div class="avatar-edit">
                 <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                 <label for="imageUpload"></label>
             </div>
             <div class="avatar-preview">
                 <div id="imagePreview" style="background-image: url('front-end/assets/images/user/pp.png');">
                 </div>
             </div>
           </div>
           <h3 class="user-card__name">Albert Owens</h3>
           <span class="user-card__id">ID : 19535909</span>
         </div><!-- user-card end -->
         <div class="user-action-card">
           <ul class="user-action-list">
             <li><a href="{{ route('front-end/user-panel') }}">My Tickets <span class="badge">04</span></a></li>
             <li><a href="{{ route('front-end/user-info') }}">Personal Information</a></li>
             <li class="active"><a href="{{ route('front-end/user-transaction') }}">Transactions</a></li>
             <li><a href="{{ route('front-end/user-referral') }}">Referral Program</a></li>
             <li><a href="{{ route('front-end/user-lottery') }}">Favorite Lotteries</a></li>
             <li><a href="{{ route('front-end/contact') }}">Help Center</a></li>
             <li><a href="#0">Log Out</a></li>
           </ul>
         </div><!-- user-action-card end -->
       </div>
       <div class="col-lg-8 mt-lg-0 mt-4">
         <div class="transaction-balance-wrapper">
           <div class="left">
             <div class="transaction-balance">
               <h4 class="balance">$2956.00</h4>
               <span>Available Balance</span>
             </div>
           </div>
           <div class="right">
             <a href="#0" class="transaction-action-btn">
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
                   <th>Date</th>
                   <th>Description</th>
                   <th>Pay. method</th>
                   <th>Amount</th>
                   <th>Status</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <td>
                     <div class="date">
                       <span>16</span>
                       <span>APR</span>
                     </div>
                   </td>
                   <td>
                     <p>Withdraw</p>
                     <span>Withdraw to Bank account</span>
                   </td>
                   <td>
                     <p>Visa</p>
                   </td>
                   <td>
                     <span class="amount minus-amount">- $562 (USD)</span>
                   </td>
                   <td>
                     <div class="status-pending"><i class="fas fa-ellipsis-h"></i></div>
                   </td>
                 </tr>
                 <tr>
                   <td>
                     <div class="date">
                       <span>16</span>
                       <span>APR</span>
                     </div>
                   </td>
                   <td>
                     <p>lottery purchase</p>
                     <span>Contest No: D87T</span>
                   </td>
                   <td>
                     <p>Visa</p>
                   </td>
                   <td>
                     <span class="amount minus-amount">-$758.00 (USD)</span>
                   </td>
                   <td>
                     <div class="status-success"><i class="fas fa-check-circle"></i></div>
                   </td>
                 </tr>
                 <tr>
                   <td>
                     <div class="date">
                       <span>16</span>
                       <span>APR</span>
                     </div>
                   </td>
                   <td>
                     <p>lottery purchase</p>
                     <span>Contest No: D87T</span>
                   </td>
                   <td>
                     <p>Visa</p>
                   </td>
                   <td>
                     <span class="amount minus-amount">-$758.00 (USD)</span>
                   </td>
                   <td>
                     <div class="status-success"><i class="fas fa-check-circle"></i></div>
                   </td>
                 </tr>
                 <tr>
                   <td>
                     <div class="date">
                       <span>16</span>
                       <span>APR</span>
                     </div>
                   </td>
                   <td>
                     <p>Deposit</p>
                     <span>Bank account to Rifa Account</span>
                   </td>
                   <td>
                     <p>Visa</p>
                   </td>
                   <td>
                     <span class="amount plus-amount">-$758.00 (USD)</span>
                   </td>
                   <td>
                     <div class="status-success"><i class="fas fa-check-circle"></i></div>
                   </td>
                 </tr>
                 <tr>
                   <td>
                     <div class="date">
                       <span>16</span>
                       <span>APR</span>
                     </div>
                   </td>
                   <td>
                     <p>lottery purchase</p>
                     <span>Contest No: D87T</span>
                   </td>
                   <td>
                     <p>Visa</p>
                   </td>
                   <td>
                     <span class="amount minus-amount">-$758.00 (USD)</span>
                   </td>
                   <td>
                     <div class="status-success"><i class="fas fa-check-circle"></i></div>
                   </td>
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
 </div>
 