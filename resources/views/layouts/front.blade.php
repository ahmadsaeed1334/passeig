<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $page_title ?? general('app_name') }} - {{ $page_title ? general('app_name') : '' }}</title>
 @include('livewire.front-end.partial.style')
 <style>
  /* ::-webkit-scrollbar {
      width: 100px; 
      height: 20px;
  } */

  /* ::-webkit-scrollbar-track {
      background-image: -webkit-linear-gradient(7deg, rgb(236, 19, 121) 0%, rgb(108, 0, 146) 100%);
  } */

  /* ::-webkit-scrollbar-thumb {
      background-image: -webkit-linear-gradient(7deg, rgb(236, 19, 121) 0%, rgb(108, 0, 146) 100%);
      border-radius: 10px;
      border: 3px solid #f1f1f1; 
  } */
  /* ::-webkit-scrollbar-thumb:hover {
      background-image: -webkit-linear-gradient(7deg, rgb(236, 19, 121) 0%, rgb(108, 0, 146) 100%);
  } */
  html {
      scrollbar-width:50px; 
      scrollbar-color: rgb(236, 19, 121) rgb(7, 11, 40);
      /* scrollbar-background-color: #070B28; */
  }
  .scrollbar {
      -ms-overflow-style: none; 
  }
  .scrollbar::-ms-scrollbar {
      display: none; 
  }
 
</style>
</head>
  <body>
    <div class="preloader ">
      <svg class="mainSVG" viewBox="0 0 800 600" xmlns="http://www.w3.org/2000/svg">
        <defs>   
          <path id="puff" d="M4.5,8.3C6,8.4,6.5,7,6.5,7s2,0.7,2.9-0.1C10,6.4,10.3,4.1,9.1,4c2-0.5,1.5-2.4-0.1-2.9c-1.1-0.3-1.8,0-1.8,0
          s-1.5-1.6-3.4-1C2.5,0.5,2.1,2.3,2.1,2.3S0,2.3,0,4.4c0,1.1,1,2.1,2.2,2.1C2.2,7.9,3.5,8.2,4.5,8.3z" fill="#fff"/>
          <circle id="dot"  cx="0" cy="0" r="5" fill="#fff"/>   
        </defs>
        
          <circle id="mainCircle" fill="none" stroke="none" stroke-width="2" stroke-miterlimit="10" cx="400" cy="300" r="130"/>
          <circle id="circlePath" fill="none" stroke="none" stroke-width="2" stroke-miterlimit="10" cx="400" cy="300" r="80"/>
        
        <g id="mainContainer" >
          <g id="car">
      <path id="carRot" fill="#FFF"  d="M45.6,16.9l0-11.4c0-3-1.5-5.5-4.5-5.5L3.5,0C0.5,0,0,1.5,0,4.5l0,13.4c0,3,0.5,4.5,3.5,4.5l37.6,0
        C44.1,22.4,45.6,19.9,45.6,16.9z M31.9,21.4l-23.3,0l2.2-2.6l14.1,0L31.9,21.4z M34.2,21c-3.8-1-7.3-3.1-7.3-3.1l0-13.4l7.3-3.1
        C34.2,1.4,37.1,11.9,34.2,21z M6.9,1.5c0-0.9,2.3,3.1,2.3,3.1l0,13.4c0,0-0.7,1.5-2.3,3.1C5.8,19.3,5.1,5.8,6.9,1.5z M24.9,3.9
        l-14.1,0L8.6,1.3l23.3,0L24.9,3.9z"/>      
          </g>
        </g>
      </svg>
    </div>
 <!-- scroll-to-top start -->
 <div class="scroll-to-top">
  <span class="scroll-icon">
    <i class="las la-arrow-up"></i>
  </span>
</div>
<!-- scroll-to-top end -->
 <!-- theme-switcher start -->
 <div class="theme-switcher">
  <div class="theme-switcher__icon">
    <i class="las la-cog"></i>
  </div>
  <div class="theme-switcher__body">
    <div class="single dark active">
      <a href="index.html">Dark Version</a>
    </div>
    <div class="single light mt-4">
      <a href="light-index.html">Light Version</a>
    </div>
  </div>
</div>
<!-- theme-switcher end -->
<!-- page-wrapper start -->
<div class="page-wrapper">
  <!-- login modal -->
  {{-- @include('livewire.front-end.partial.login-modal') --}}
  <!-- login modal end -->
  <!-- Sign Up modal -->
  {{-- @include('livewire.front-end.partial.sign-up-modal') --}}
  {{-- <livewire:partisal/sign-up-modal /> --}}
  <!-- Sign Up modal end -->
  <!-- header start -->
  @livewire('front-end.partial.header')
  <!-- header end -->
  <!-- page-header start -->
  {{ $slot }}
 
  <!-- footer start -->
   @livewire('front-end.partial.footer')
  <!-- footer end -->
</div>
{{-- <div class="page-wrapper">
  {{ $slot }}
 </div> --}}
 <!-- page-wrapper end -->
 @include('livewire.front-end.partial.script')
  {{-- <div class="page-wrapper">
  {{ $slot }} --}}
 </div> 
</body>

</html>
