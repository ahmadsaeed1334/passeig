<!-- resources/views/livewire/footer-manager.blade.php -->
<div>
    @if (session()->has('message'))
        <div>{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="{{ $isUpdate ? 'update' : 'store' }}">
        <input type="text" wire:model="number" placeholder="Number" />
        @error('number') <span>{{ $message }}</span> @enderror

        <input type="text" wire:model="address" placeholder="Address" />
        @error('address') <span>{{ $message }}</span> @enderror

        <textarea wire:model="description" placeholder="Description"></textarea>
        @error('description') <span>{{ $message }}</span> @enderror

        <input type="text" wire:model="working_hours" placeholder="Working Hours" />
        @error('working_hours') <span>{{ $message }}</span> @enderror

        <h4>Icons</h4>
        @foreach ($icons as $index => $icon)
            <div>
                <input type="text" wire:model="icons.{{ $index }}.name" placeholder="Icon Name" />
                <input type="url" wire:model="icons.{{ $index }}.link" placeholder="Icon Link" />
                @error('icons.'.$index.'.name') <span>{{ $message }}</span> @enderror
                @error('icons.'.$index.'.link') <span>{{ $message }}</span> @enderror
                <button type="button" wire:click="removeIcon({{ $index }})">Remove Icon</button>
            </div>
        @endforeach
        <button type="button" wire:click="addIcon">Add Icon</button>

        <button type="submit">{{ $isUpdate ? 'Update' : 'Create' }}</button>
    </form>

    <h2>Footers List</h2>
    <ul>
        @foreach ($footers as $footer)
            <li>
                {{ $footer->description }}
                <button wire:click="edit({{ $footer->id }})">Edit</button>
                <button wire:click="delete({{ $footer->id }})">Delete</button>
            </li>
        @endforeach
    </ul>
</div>
