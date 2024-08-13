<div>
    @foreach ($abouts as $about )


    <section id="hero">
        <div class="container">
            <div class="text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="animation">{{ $about->title }}</h2>
                    <p class="lead mb-4 p-below animation">{{$about->short_description}} </p>
                </div>
            </div>
        </div>
    </section>
    <main>
        <x-slot name="page_title">
            {{ $page_title ?? 'About Us' }}
        </x-slot>
        <section id="abt-sec">
            <div class="container-fluid">
                <img src="{{ asset('storage/' . $about->image) }}" alt="{{ $about->title }}" class="mx-auto img-fluid animation">
            </div>
        </section>
        <section id="abt-third">
            <div class="container">
                <h3 class="abt-heading animation" style="font-family: 'Brown-Sugar';">
                    {{-- {{$about->long_description}} --}}
                    {{ \Illuminate\Support\Str::words(strip_tags( $about->long_description))}}
                </h3>
            </div>
        </section>
        @endforeach
        <section id="img-sec animation">
            <img src="{{ asset('assets/images/abt-us-2.png') }}" class="mx-auto img-fluid">
        </section>

        @foreach ($passions as $passion )
        <section id="passion">
            <div class="container">
                <h2 class="animation">{{ $passion->title }}</h2>
                <p class="p-below text-center animation" style="font-family: 'Brown-Sugar';"> 
                    {{-- {{$passion->long_description}} --}}
                    {{ \Illuminate\Support\Str::words(strip_tags($passion->long_description))}}
                </p>
            </div>
        </section>
        @endforeach
        <!-- Partners Section -->
  
<section id="partners">
    <div class="container">
        <h3 class="my-5">Our Partners</h3>
        <section class="customer-logos slider">
            @foreach($partners as $partner)
                <div class="slide">
                    <img src="{{ asset('storage/' . $partner->partner_image) }}" alt="{{ $partner->name }}" class="partner-logo">
                </div>
            @endforeach
        </section>
    </div>
</section>
<style>
.customer-logos .slide img {
    width: 200px;  /* Set the desired width */
    height: 150px;  /* Set the desired height */
    object-fit: contain;  /* Ensures the image fits within the set dimensions without distortion */
    margin: 0 auto;  /* Center the image within the slide */
}
</style>
        <!-- Book Appointment-Section -->
         @foreach($appointments as $appointment)
        <section class="book-appointment-section">
            <img src="{{ asset('assets/images/appointment-sec-left.png')}}" alt="" class="appointment-left">
            <div class="container">
                <div class="text-center">
                    <div class="col-12 mx-auto">
                        <h2 class="text-uppercase text-white mb-4">{{ $appointment->title }}</h2>
                            <p class="lead mb-4 p-below text-white">{{ \Illuminate\Support\Str::words(strip_tags($appointment->long_description)) }}</p>
                            <a href="{{ route('appointments') }}" class="appointment-btn mt-5">{{ $appointment->button }}</a>
                    </div>
                </div>
            </div>
            <img src="{{ asset('assets/images/appointment0sec-right.png')}}" alt="" class="appointment-right">
        </section>
        @endforeach
       <!-- Subscribe Section -->
 @include('livewire.front.subscribe')


<style>
    input.w-100 {
        background-color: transparent !important;
        color: #000;
    }

    /* Style the autocomplete dropdown */
    input:-webkit-autofill {
        -webkit-box-shadow: 0 0 0 1000px transparent inset !important;
        -webkit-text-fill-color: #000 !important;
    }

    input:-webkit-autofill:focus {
        -webkit-box-shadow: 0 0 0 1000px transparent inset !important;
        -webkit-text-fill-color: #000 !important;
    }

    input:-webkit-autofill:hover {
        -webkit-box-shadow: 0 0 0 1000px transparent inset !important;
        -webkit-text-fill-color: #000 !important;
    }

    input:-webkit-autofill:active {
        -webkit-box-shadow: 0 0 0 1000px transparent inset !important;
        -webkit-text-fill-color: #000 !important;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </main>
</div>
