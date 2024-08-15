<div>
    <x-slot name="page_title">
        {{ $page_title ?? 'Home' }}
    </x-slot>

    @include('livewire.front.rev-slider')
    @include('livewire.front.aboutus-home')
    @include('livewire.front.health')
    @include('livewire.front.services-home')
    @include('livewire.front.pricing')
    @include('livewire.front.gallery')
    @include('livewire.front.contact-us')
    @include('livewire.front.experts')
    @include('livewire.front.home-products')
    @include('livewire.front.blogs-home')
    @include('livewire.front.partners')
</div>
