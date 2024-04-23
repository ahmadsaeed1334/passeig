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
             <li><a href="{{ route('front-end/user-transaction') }}">Transactions</a></li>
             <li class="active"><a href="{{ route('front-end/user-referral') }}">Referral Program</a></li>
             <li><a href="{{ route('front-end/user-lottery') }}">Favorite Lotteries</a></li>
             <li><a href="{{ route('front-end/contact') }}">Help Center</a></li>
             <li><a href="#0">Log Out</a></li>
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
             <div class="col-lg-5 col-sm-6 mb-30">
               <div class="referral-crad">
                 <div class="referral-crad__icon"><img src="{{ asset('front-end/assets/images/icon/referral/1.png')}}" alt="image"></div>
                 <div class="referral-crad__content">
                   <h3 class="number">$2956.00</h3>
                   <span>Earned Referral</span>
                 </div>
               </div><!-- referral-crad end -->
             </div>
             <div class="col-lg-5 col-sm-6 mb-30">
               <div class="referral-crad">
                 <div class="referral-crad__icon"><img src="{{ asset('front-end/assets/images/icon/referral/2.png')}}" alt="image"></div>
                 <div class="referral-crad__content">
                   <h3 class="number">$208.00</h3>
                   <span>Last Month</span>
                 </div>
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
 </div>
 