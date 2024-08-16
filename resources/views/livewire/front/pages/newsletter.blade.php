<div class="m-t20">
    <form action="{{ route('newsletter.store') }}" method="POST">
        @csrf
        <div class="input-group">
            <input name="email" class="form-control" placeholder="ENTER YOUR EMAIL" type="email" required>
            <span class="input-group-btn">
                <button type="submit" class="site-button"><i class="fa fa-paper-plane-o"></i></button>
            </span>
        </div>
        @if ($errors->has('email'))
        <div class="text-danger">{{ $errors->first('email') }}</div>
        @endif
        @if (session('success'))
        <div class="text-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
        <div class="text-danger">{{ session('error') }}</div>
        @endif
    </form>
</div>
