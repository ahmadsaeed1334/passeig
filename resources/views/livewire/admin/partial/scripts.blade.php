<!--begin::Javascript-->
<script>
	var hostUrl = "assets/";
</script>
<!-- Include CKEditor JavaScript -->
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/balloon/ckeditor.js"></script> --}}
<script src="{{ asset('assets/ckeditor.js') }}"></script>
<script>
	ClassicEditor
		.create(document.querySelector('#editor'), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		})
		.then(editor => {
			window.editor = editor;
		})
		.catch(err => {
			console.error(err.stack);
		});
</script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
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

<script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
<script>
	document.addEventListener('trix-change', function(event) {
		var detail = event.target.value;
		window.livewire.dispatch('trixContentChanged', detail);
	});
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	$("#dob").flatpickr();
	$("#join").flatpickr();
</script>
<script>
	$(document).ready(function() {
		// Handle reply submission via AJAX
		$('#replyForm').on('submit', function(e) {
			e.preventDefault(); // Prevent the default form submission which causes a page reload

			var form = $(this);
			var formData = form.serialize();
			var modal = $('#replyModal');

			$.ajax({
				url: '{{ route('admin.comments.storeReply') }}',
				type: 'POST',
				data: formData,
				success: function(response) {
					modal.modal('hide'); // Hide the reply modal

					// Find the comment container where the reply belongs
					var parentComment = $('button[data-comment-id="' + response.comment
						.parent_id + '"]').closest('.bg-light');

					// Create the new reply HTML
					var newReply = `
                        <div class="bg-light position-relative mt-3 rounded border p-4">
                            <button type="button" class="btn btn-sm btn-icon btn-light-danger position-absolute delete-comment end-0 top-0"
                                data-comment-id="` + response.comment.id + `">
                                <i class="fas fa-times"></i>
                            </button>
                            <div class="d-flex align-items-center mb-3">
                                <div class="symbol symbol-40px symbol-circle me-3">
                                    <span class="symbol-label fs-4 bg-primary text-inverse-primary">
                                        ` + response.comment.author_name.charAt(0).toUpperCase() + `
                                    </span>
                                </div>
                                <div>
                                    <a href="#" class="text-body fw-bold text-hover-primary fs-6">` + response.comment
						.author_name + `</a>
                                    <span class="text-muted d-block fs-7">` + response.comment.created_at + `</span>
                                </div>
                            </div>
                            <div>
                                <p class="fs-6 text-gray-800">` + response.comment.body + `</p>
                            </div>
                        </div>
                    `;

					// Append the new reply to the parent comment
					parentComment.find('.ps-10').append(newReply);

					// Reattach the delete event handler for the new delete button
					reattachDeleteHandler();

					// Reopen the comments modal
					$('#commentsModal').modal('show');
				},
				error: function(response) {
					console.error('Error:', response
						.responseText); // Log the error for debugging
					alert('An error occurred while submitting your reply.');
				}
			});
		});

		// Open reply modal and set parent_id
		$('.reply-comment').on('click', function() {
			var parentId = $(this).data('comment-id');
			var blogId = $(this).data('blog-id');

			$('#replyParentId').val(parentId);
			$('#replyBlogId').val(blogId); // Set the correct blog ID
		});

		// Reattach delete handler function
		function reattachDeleteHandler() {
			$('.delete-comment').off('click').on('click', function() {
				var commentId = $(this).data('comment-id');
				var commentElement = $(this).closest('.bg-light');

				if (confirm('Are you sure you want to delete this comment?')) {
					$.ajax({
						url: '{{ route('admin.comments.destroy', ':id') }}'.replace(':id',
							commentId),
						type: 'DELETE',
						data: {
							_token: '{{ csrf_token() }}'
						},
						success: function(response) {
							commentElement.remove();
						},
						error: function(response) {
							console.error('Error:', response.responseText);
							alert('An error occurred while deleting the comment.');
						}
					});
				}
			});
		}

		// Initial call to attach delete event handlers
		reattachDeleteHandler();
	});
</script>


@livewireScripts
<x-livewire-alert::scripts />
