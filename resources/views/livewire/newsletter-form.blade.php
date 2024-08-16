<div>
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="input-group">
            <input type="email" wire:model="email" class="form-control" placeholder="ENTER YOUR EMAIL" required>
            <span class="input-group-btn">
                <button type="submit" class="site-button"><i class="fa fa-paper-plane-o"></i></button>
            </span>
        </div>
        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
    </form>
</div>
