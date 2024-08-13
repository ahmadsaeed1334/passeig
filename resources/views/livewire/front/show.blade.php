<div id="comments-list">
	@foreach ($blog->comments->where('parent_id', null) as $comment)
		@include('livewire.front._replies', ['comments' => [$comment]])
	@endforeach
</div>

<!-- Main Comment Form for the Blog -->
<form action="{{ route('comments.store') }}" method="POST" class="comment-form">
	@csrf
	<input type="hidden" name="blog_id" value="{{ $blog->id }}">
	<input type="hidden" name="parent_id" value="">
	<div>
		<label for="author_name">Your Name:</label>
		<input type="text" id="author_name" name="author_name">
	</div>
	<div>
		<label for="body">Your Comment:</label>
		<textarea id="body" name="body"></textarea>
	</div>
	<button type="submit">Submit Comment</button>
</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
	$(document).ready(function() {
		// Hide all reply forms initially
		$('.reply-form').hide();

		// Show reply form when the "Reply" button is clicked
		$('.show-reply-form').on('click', function() {
			$(this).siblings('.reply-form').toggle();
		});

		// Handle form submission via AJAX
		$('form.comment-form').on('submit', function(e) {
			e.preventDefault(); // Prevent the default form submission behavior

			console.log('Form submitted via AJAX'); // Debugging line

			let form = $(this);
			let actionUrl = form.attr('action');
			let formData = form.serialize();

			$.ajax({
				type: 'POST',
				url: actionUrl,
				data: formData,
				success: function(response) {
					console.log('AJAX success:', response); // Debugging line

					let newCommentHtml = response.commentHtml;

					if (form.find('input[name="parent_id"]').val()) {
						// If it's a reply, append it to the parent comment
						form.closest('div').after(newCommentHtml);
					} else {
						// If it's a new comment, append it to the comments list
						$('#comments-list').append(newCommentHtml);
					}

					form.find('textarea').val(''); // Clear the textarea
					form.find('input[name="author_name"]').val(''); // Clear the name input
					form.hide(); // Hide the reply form after submission
				},
				error: function(response) {
					console.log('AJAX error:', response); // Debugging line
					alert('An error occurred. Please try again.');
				}
			});
		});
	});
</script>
