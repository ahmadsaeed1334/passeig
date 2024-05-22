<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- <title>{{ $page_title ?? general('app_name') }} - {{ $page_title ? general('app_name') : '' }}</title> --}}
 {{-- @include('livewire.front-end.partial.style') --}}
  <link rel="stylesheet" href="{{ asset('admin-setup.css') }}">
  <link rel="stylesheet" href="{{ asset('binshops-blog.css') }}">
  <link rel="stylesheet" href="{{ asset('binshopsblog_admin_css.css') }}">



</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class="min-vh-100">

      
      
        
        <!-- Page Content -->
       <main class="container">
        @yield('content')
        </main> 
     
    </div>



    @stack('modals')
    
    @stack('scripts')
    <script src="{{ asset('binshops-blog.js') }}"></script>
</body>

</html>