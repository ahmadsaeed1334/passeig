<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
	<base href="" />
	<title>{{ $page_title ?? general('app_name') }} - {{ $page_title ? general('app_name') : '' }}</title>
	<link rel="shortcut icon" href="{{ env('APP_URL') . '/storage' . '/' . setting('general_settings.favicon') }}" data-navigate-track/>
	@include('front.partial.style')


	</style>
</head>

<body>


    <div class="load_animation first">
        <div class="load_animation first">

            @include('front.partial.header')
            <main class="content">
                @if (isset($slot))
                    {{ $slot }}
                @else
                    @yield('content')
                @endif
            </main>
            <section id="hero">
                <div class="container">
                    <div class="text-center">
                        <div class="col-lg-8 mx-auto">
                            <img class="d-block mx-auto mb-4 img-fluid animation" src="assets/images/LOGO-PASSEIG.png"
                                alt="">
                            <p class="lead mb-4 p-below animation">Risus scelerisque a non turpis vitae
                                malesuada sed venenatis. In fringilla
                                sollicitudin euismod sed.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    {{-- @include('front.partial.main') --}}
    @include('front.partial.footer')
    @include('front.partial.script')
</body>
</html>
