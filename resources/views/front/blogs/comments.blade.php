@if ($comments->isEmpty())
	<div class="text-muted py-5 text-center">
		<p>No comments found for this blog.</p>
	</div>
@else
	<div class="d-flex flex-column gap-5">
		@foreach ($comments as $comment)
			@if ($comment->parent_id == null)
				<div class="bg-light position-relative rounded border p-4">
					<!-- Delete Button -->
					<button type="button" class="btn btn-sm btn-icon btn-light-danger position-absolute delete-comment end-0 top-0"
						data-comment-id="{{ $comment->id }}">
						<i class="fas fa-times"></i>
					</button>

					<div class="d-flex align-items-center mb-3">
						<div class="symbol symbol-40px symbol-circle me-3">
							<span class="symbol-label fs-4 bg-primary text-inverse-primary">
								{{ strtoupper(substr($comment->author_name, 0, 1)) }}
							</span>
						</div>
						<div>
							<a href="#" class="text-body fw-bold text-hover-primary fs-6">{{ $comment->author_name }}</a>
							<span class="text-muted d-block fs-7">{{ $comment->created_at->format('d M Y, h:i A') }}</span>
						</div>
					</div>
					<div class="mb-3">
						<p class="fs-6 text-gray-800">{{ $comment->body }}</p>
					</div>

					<!-- Reply Icon -->
					<button type="button" class="btn btn-sm btn-icon btn-light-primary reply-comment"
						data-comment-id="{{ $comment->id }}" data-blog-id="{{ $comment->blog_id }}" data-bs-toggle="modal"
						data-bs-target="#replyModal">
						<i class="fas fa-reply"></i>
					</button>

					<!-- Replies -->
					@if ($comment->replies->isNotEmpty())
						<div class="ps-10">
							@foreach ($comment->replies as $reply)
								@include('front.blogs.comment', ['comment' => $reply])
							@endforeach
						</div>
					@endif
				</div>
			@endif
		@endforeach
	</div>
@endif


<!-- JavaScript for Handling Deletion and Reply -->
<script>
	$(document).ready(function() {
		// Handle delete comment
		$('.delete-comment').on('click', function() {
			var commentId = $(this).data('comment-id');
			var commentElement = $(this).closest('.bg-light');

			if (confirm('Are you sure you want to delete this comment?')) {
				$.ajax({
					url: '{{ route('admin.comments.destroy', ':id') }}'.replace(':id', commentId),
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

		// Handle reply comment
		$('.reply-comment').on('click', function() {
			var parentId = $(this).data('comment-id');
			var blogId = $(this).data('blog-id');

			$('#replyParentId').val(parentId);
			$('#replyBlogId').val(blogId); // Ensure the correct blog_id is set in the hidden field
		});
	});
</script>
