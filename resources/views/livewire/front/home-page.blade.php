<div>
    <x-slot name="page_title">
        {{ $page_title ?? 'Home' }}
    </x-slot>

    @include('livewire.front.rev-slider')
    @include('livewire.front.aboutus-home')

</div>
