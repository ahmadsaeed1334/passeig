<div class="bg-light position-relative mt-3 rounded border p-4">
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
	<div>
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
