<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-lg-0 mb-5">
                <img src="{{env('APP_URL').'/storage' .'/'.general('logo_black')}}" class="img-fluid">
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-6 col-12 text-center order-1 mb-md-0 mb-5">
                <a href="">+ 383 (21) 23 43984</a><br>
                <a href="">+ 907 683 8196</a><br>
                <a href="">828 Timbercrest Road, <br>Healy City, AK 99743</a><br>
                <a href="">info@celeste.com</a>
            </div>
            <div class="col-lg-6 col-12 text-center mt-5 order-lg-2 order-3">
                <p class="mx-md-5 mx-2 mb-5 mt-lg-0 mt-4">Risus scelerisque a non turpis vitae malesuada sed
                    venenatis. In fringilla sollicitudin euismod
                    sed.
                </p>
                <div class="social mt-5 d-flex gap-3 justify-content-center">
                    <a href="#"><img src="{{asset('assets/images/facebook.svg')}}"></a>
                    <a href="#"><img src="{{asset('assets/images/twitter.svg')}}"></a>
                    <a href="#"><img src="{{asset('assets/images/instagram.svg')}}"></a>
                </div>
            </div>
             <div id="message"></div> <!-- This div is for showing success or error messages -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="col-lg-3 col-md-6 col-12 text-center  order-lg-3 order-1">
                <p>Working hours: <br>Monday to Friday 9am - 5pm</p>
                <form  method="POST" id="email-collector-bottom" class="d-flex">
                     @csrf
                    <input type="email" name="email" class="w-100 p-3 border-0 bg-transparent"
                        placeholder="Your mail">
                  
                    <button type="submit" class="btn"><img src="./assets/images/subscribe.svg"></button>

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
</footer>
<script>
    $(document).ready(function() {
        $('#email-collector-bottom').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('subscribe') }}",
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    $('#message').html('<div class="alert alert-success">' + response.message + '</div>');
                    $('#email-error').text('');
                    $('#email-collector-bottom')[0].reset(); // Correctly reset the form
                },
                error: function(response) {
                    $('#message').html('');
                    if (response.responseJSON.errors.email) {
                        $('#email-error').text(response.responseJSON.errors.email[0]);
                    }
                }
            });
        });
    });
</script>