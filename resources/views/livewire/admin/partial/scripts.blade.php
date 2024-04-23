<script>
	var hostUrl = "assets/";
</script>
<script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
<script>
   
	document.addEventListener('trix-change', function (event) {
    var detail = event.target.value;
    window.livewire.dispatch('trixContentChanged', detail);
});
  
</script>
<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

<!--end::Global Javascript Bundle-->
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
@stack('scripts')
@stack('modals')
<script>
	$(document).ready(function() {
		var slider = $('.slider');
		slider.slick(getSlickOptions(slider));
	});

	$(document).on('click', '.add-more', function(e) {
		$("html, body").animate({
			scrollTop: 0
		}, "slow");
		return false;
	});

	function getSlickOptions(slider) {
		return {
			slidesToShow: 1,
			slidesToScroll: 1,
			vertical: true,
			verticalSwiping: true,
			autoplay: true,
			autoplaySpeed: 5000,
			speed: 300,
			// Add other options here if needed
		};
	}
	window.addEventListener('openModal', event => {
		$('#' + event.detail.modalId).modal('show');
		$('body').addClass('modal-open');
	})
	window.addEventListener('closeModal', event => {
		$('#' + event.detail.modalId).modal('hide');
		$('body').removeClass('modal-open');
		$('.modal-backdrop').remove();
	})

	window.addEventListener('keysTop', event => {
		var myDiv = document.getElementById("commentDiv");
		setTimeout(function() {
			myDiv.scrollTo({
				top: myDiv.scrollHeight,
				behavior: "smooth"
			});
		}, 100);
	})
	document.addEventListener('livewire:load', function() {
		Livewire.on('reloadPage', function() {
			window.location.reload();
		});
	});
</script>
<script>
	// JavaScript to dynamically adjust the iframe height
	function adjustIframeHeight(event) {
		if (event.origin !== 'https://example.com') return; // Replace with the actual domain of the embedded content

		var iframe = document.querySelector('iframe');
		if (iframe && event.data && event.data.height) {
			iframe.style.height = event.data.height + 'px';
		}
	}

	// Listen for the 'message' event
	window.addEventListener('message', adjustIframeHeight, false);
</script>
@livewireScripts
<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
	data-turbolinks-eval="false" data-turbo-eval="false"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	$("#dob").flatpickr();
	$("#join").flatpickr();
</script>

<x-livewire-alert::scripts />
