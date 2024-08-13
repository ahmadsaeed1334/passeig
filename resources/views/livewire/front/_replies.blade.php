@foreach ($comments as $comment)
	<div style="margin-left: {{ $comment->parent_id ? '20px' : '0px' }};">
		<strong>{{ $comment->author_name }}</strong> {{ $comment->parent_id ? 'replied:' : 'said:' }}
		<p>{{ $comment->body }}</p>

		<!-- Reply Button -->
		<button class="show-reply-form">Reply</button>

		<!-- Reply Form (hidden by default) -->
		<form action="{{ route('comments.store') }}" method="POST" class="comment-form reply-form" style="display: none;">
			@csrf
			<input type="hidden" name="blog_id" value="{{ $comment->blog_id }}">
			<input type="hidden" name="parent_id" value="{{ $comment->id }}">
			<div>
				<label for="author_name">Your Name:</label>
				<input type="text" id="author_name" name="author_name">
			</div>
			<div>
				<label for="body">Your Reply:</label>
				<textarea id="body" name="body"></textarea>
			</div>
			<button type="submit">Reply</button>
		</form>

		<!-- Display Replies -->
		@if ($comment->replies->count())
			@include('livewire.front._replies', ['comments' => $comment->replies])
		@endif
	</div>
@endforeach
