<div>
    
    <x-slot name="page_title">
		{{ $page_title ?? 'Cart' }}
	</x-slot>
    <!-- inner-hero-section start -->
    <div class="inner-hero-section">
       <div class="bg-shape"><img src="{{ asset('front-end/assets/images/elements/inner-hero-shape.png')}}" alt="image"></div>
       <div class="container">
         <div class="row">
           <div class="col-lg-12">
             <ul class="page-list">
               <li><a href="{{ route('front-end/navbar') }}">Home</a></li>
               <li><a href="#0">Lottery</a></li>
               <li><a href="#0">Contest No: B2T</a></li>
               <li><a href="#0">Pick your Lottery Number</a></li>
               <li class="active">My Cart</li>
             </ul>
           </div>
         </div>
       </div>
     </div>
     <!-- inner-hero-section end -->
 
     <!-- cart section start -->
     <section class="pb-120 mt-minus-300">
       <div class="container">
         <div class="row">
           <div class="col-lg-12">
             <div class="cart-wrapper">
               <h2 class="cart-wrapper__title">My Cart</h2>
               <div class="row justify-content-lg-between">
                 <div class="col-lg-7">
                   <div class="ticket-wrapper">
                     <div class="ticket-wrapper__header">
                       <h3>Your tickets:</h3>
                       <button type="button">clear all</button>
                     </div>
                     <div class="ticket-wrapper__body">
                       <div class="single-row">
                         <ul class="numbers">
                           <li>23</li>
                           <li>22</li>
                           <li>19</li>
                           <li>9</li>
                           <li>50</li>
                           <li>11</li>
                           <li>12</li>
                         </ul>
                         <div class="action-btns">
                            <button type="button" class="edit-btn"><i class="las la-pen"></i></button>
                            <button type="button" class="del-btn"><i class="las la-trash-alt"></i></button>
                         </div>
                       </div><!-- single-row end -->
                       <div class="single-row">
                         <ul class="numbers">
                           <li>23</li>
                           <li>22</li>
                           <li>19</li>
                           <li>9</li>
                           <li>50</li>
                           <li>11</li>
                           <li>12</li>
                         </ul>
                         <div class="action-btns">
                            <button type="button" class="edit-btn"><i class="las la-pen"></i></button>
                            <button type="button" class="del-btn"><i class="las la-trash-alt"></i></button>
                         </div>
                       </div><!-- single-row end -->
                       <div class="single-row">
                         <ul class="numbers">
                           <li>23</li>
                           <li>22</li>
                           <li>19</li>
                           <li>9</li>
                           <li>50</li>
                           <li>11</li>
                           <li>12</li>
                         </ul>
                         <div class="action-btns">
                            <button type="button" class="edit-btn"><i class="las la-pen"></i></button>
                            <button type="button" class="del-btn"><i class="las la-trash-alt"></i></button>
                         </div>
                       </div><!-- single-row end -->
                       <div class="single-row">
                         <ul class="numbers">
                           <li>23</li>
                           <li>22</li>
                           <li>19</li>
                           <li>9</li>
                           <li>50</li>
                           <li>11</li>
                           <li>12</li>
                         </ul>
                         <div class="action-btns">
                            <button type="button" class="edit-btn"><i class="las la-pen"></i></button>
                            <button type="button" class="del-btn"><i class="las la-trash-alt"></i></button>
                         </div>
                       </div><!-- single-row end -->
                       <div class="single-row">
                         <ul class="numbers">
                           <li>23</li>
                           <li>22</li>
                           <li>19</li>
                           <li>9</li>
                           <li>50</li>
                           <li>11</li>
                           <li>12</li>
                         </ul>
                         <div class="action-btns">
                            <button type="button" class="edit-btn"><i class="las la-pen"></i></button>
                            <button type="button" class="del-btn"><i class="las la-trash-alt"></i></button>
                         </div>
                       </div><!-- single-row end -->
                       <div class="single-row">
                         <ul class="numbers">
                           <li>23</li>
                           <li>22</li>
                           <li>19</li>
                           <li>9</li>
                           <li>50</li>
                           <li>11</li>
                           <li>12</li>
                         </ul>
                         <div class="action-btns">
                            <button type="button" class="edit-btn"><i class="las la-pen"></i></button>
                            <button type="button" class="del-btn"><i class="las la-trash-alt"></i></button>
                         </div>
                       </div><!-- single-row end -->
                       <div class="single-row">
                         <ul class="numbers">
                           <li>23</li>
                           <li>22</li>
                           <li>19</li>
                           <li>9</li>
                           <li>50</li>
                           <li>11</li>
                           <li>12</li>
                         </ul>
                         <div class="action-btns">
                            <button type="button" class="edit-btn"><i class="las la-pen"></i></button>
                            <button type="button" class="del-btn"><i class="las la-trash-alt"></i></button>
                         </div>
                       </div><!-- single-row end -->
                       <div class="single-row">
                         <ul class="numbers">
                           <li>23</li>
                           <li>22</li>
                           <li>19</li>
                           <li>9</li>
                           <li>50</li>
                           <li>11</li>
                           <li>12</li>
                         </ul>
                         <div class="action-btns">
                            <button type="button" class="edit-btn"><i class="las la-pen"></i></button>
                            <button type="button" class="del-btn"><i class="las la-trash-alt"></i></button>
                         </div>
                       </div><!-- single-row end -->
                     </div>
                   </div>
                 </div>
                 <div class="col-lg-4 mt-lg-0 mt-4">
                   <div class="checkout-wrapper">
                     <div class="checkout-wrapper__header">
                       <h3>Your tickets:</h3>
                     </div>
                     <div class="checkout-wrapper__body">
                       <ul class="price">
                         <li>
                           <div class="left">
                             <h4 class="caption">Ticket Price</h4>
                             <span>(8 tickets X $ 4.99)</span>
                           </div>
                           <div class="right">
                             <span class="price">$39.92</span>
                           </div>
                         </li>
                         <li>
                           <div class="left">
                             <h4 class="caption">Total</h4>
                           </div>
                           <div class="right">
                             <span class="price">$39.92</span>
                           </div>
                         </li>
                       </ul>
                       <div class="checkout-wrapper__btn">
                         <button type="submit" class="cmn-btn">buy tickets</button>
                       </div>
                     </div>s
                   </div><!-- checkout-wrapper end -->
                   <div class="mt-30">
                     <img src="{{ asset('front-end/assets/images/elements/payment.png')}}" alt="image">
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-lg-12 pt-120">
             <div class="pick-lottery-package">
               <h2 class="title">Choose a Quick Pick</h2>
               <div class="lottery-package-list">
                 <a href="#0">3 Quick Picks For $14.97</a>
                 <a href="#0">5 Quick Picks For $24.95</a>
                 <a href="#0">10 Quick Picks For $49.90</a>
                 <a href="#0">20 Quick Picks For $99.80</a>
               </div>
             </div>
           </div><!-- col-lg-12 -->
         </div>
       </div>
     </section>
     <!-- cart section end -->
</div>
