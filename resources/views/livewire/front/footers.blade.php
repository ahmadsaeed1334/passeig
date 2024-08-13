<footer id="footer">
    @foreach ($footers as $footer )

                            {{-- <td>{{ $footer->address }}</td>
                            <td>{{ \Illuminate\Support\Str::words(strip_tags($footer->description), 10, '...') }}</td>
                            <td>
                                @foreach(json_decode($footer->icons) as $icon)
                                    @if (strtolower($icon->icon) == 'facebook')
                                        <a href="{{ $icon->link }}" target="_blank" class="me-2"><i class="fab fa-facebook fa-lg"></i></a>
                                    @elseif (strtolower($icon->icon) == 'twitter')
                                        <a href="{{ $icon->link }}" target="_blank" class="me-2"><i class="fab fa-twitter fa-lg"></i></a>
                                    @elseif (strtolower($icon->icon) == 'instagram')
                                        <a href="{{ $icon->link }}" target="_blank" class="me-2"><i class="fab fa-instagram fa-lg"></i></a>
                                    @else
                                        <a href="{{ $icon->link }}" target="_blank" class="me-2">{{ ucfirst($icon->icon) }}</a>
                                    @endif
                                @endforeach
                            </td>
                            <td>{{ $footer->working_hours }}</td> --}}
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-lg-0 mb-5">
                <img src="{{env('APP_URL').'/storage' .'/'.general('logo_black')}}"width="170px"
                class="img-fluid">
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-6 col-12 text-center order-1 mb-md-0 mb-5">
               
                {{-- <a href="">+ 907 683 8196</a><br> --}}
                <a href="">{{ $footer->address }}</a><br>
                 <a href="">{{ $footer->number }}</a><br>
                {{-- <a href="">828 Timbercrest Road, <br>Healy City, AK 99743</a><br> --}}
                {{-- <a href="">info@celeste.com</a> --}}
            </div>
            <div class="col-lg-6 col-12 text-center mt-5 order-lg-2 order-3">
                <p class="mx-md-5 mx-2 mb-5 mt-lg-0 mt-4">{{ \Illuminate\Support\Str::words(strip_tags($footer->description)) }}</p>
                <div class="social mt-5 d-flex gap-3 justify-content-center">
                    {{-- <a href="#"><img src="{{asset('assets/images/facebook.svg')}}"></a>
                    <a href="#"><img src="{{asset('assets/images/twitter.svg')}}"></a>
                    <a href="#"><img src="{{asset('assets/images/instagram.svg')}}"></a> --}}
                    @foreach(json_decode($footer->icons) as $icon)
                    @if (strtolower($icon->icon) == 'facebook')
                        <a href="{{ $icon->link }}" target="_blank" class="me-2"><img src="{{asset('assets/images/facebook.svg')}}"></i></a>
                    @elseif (strtolower($icon->icon) == 'twitter')
                        <a href="{{ $icon->link }}" target="_blank" class="me-2"><img src="{{asset('assets/images/twitter.svg')}}"></a>
                    @elseif (strtolower($icon->icon) == 'instagram')
                        <a href="{{ $icon->link }}" target="_blank" class="me-2"><img src="{{asset('assets/images/instagram.svg')}}"></a>
                    @else
                        <a href="{{ $icon->link }}" target="_blank" class="me-2">{{ ucfirst($icon->icon) }}</a>
                    @endif
                @endforeach
                </div>
            </div>
   
            <div class="col-lg-3 col-md-6 col-12 text-center  order-lg-3 order-1">
                <p>Working hours: <br>{{ $footer->working_hours }}</p>
               <form  method="POST" id="email-collector-bottom" class="d-flex">
                     @csrf
                    <input type="email" name="email" class="w-100 p-3 border-0 bg-transparent"
                        placeholder="Your mail">
                  
                    <button type="submit" class="btn"><img src="{{asset('assets/images/subscribe.svg')}}"></button>

                </form>
            </div>
        <span class="text-danger" id="email-error"></span>
        </div>
    </div>
    <hr class="bg-white">
    <div class="row">
        <div class="col-12 text-center">
            <p class="text-white fs-6 pb-3">Copyright Balanced Skin, All Rights Reserved</p>
        </div>

    </div>
    @endforeach
  


<script>
    document.getElementById('email-collector-bottom').addEventListener('submit', function(event) {
        event.preventDefault();

        var form = this;
        var formData = new FormData(form);

        fetch("{{ route('subscribe') }}", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': formData.get('_token')
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: data.message,
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: data.message,
                });
            }
        })
        .catch(error => {
            console.error('Error:', error);
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'You need to log in first',
            });
        });
    });
</script>
</footer>
