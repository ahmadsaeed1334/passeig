<!-- Subscribe Section -->
<section id="subscribe">
    <img src="{{ asset('assets/images/subscribe-petal-left.png')}}" alt="" class="subscribe-petal-left img-fluid animation">
    <div class="container">
        <div id="message"></div> <!-- This div is for showing success or error messages -->
        <div class="subscribe-content-wrapper">
            <h2 class="my-5 animation">Subscribe To Receive <br> Waxly News & Offers</h2>
            <div class="col-md-7 mx-auto subscribe-email">
                <form id="email-collector" class="d-flex animation">
                    @csrf
                    <input type="email" name="email" class="w-100 p-3" placeholder="Email">
                    <button type="submit" class="btn"><img src="{{ asset('assets/images/submit.svg')}}"></button>
                </form>
            </div>
        </div>
    </div>
    <img src="{{ asset('assets/images/subscribe-petal-right.png')}}" alt="" class="subscribe-petal-right img-fluid animation">
</section>

<script>
    document.getElementById('email-collector').addEventListener('submit', function(event) {
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
                text: 'You need to log in first.',
            });
        });
    });
</script>
