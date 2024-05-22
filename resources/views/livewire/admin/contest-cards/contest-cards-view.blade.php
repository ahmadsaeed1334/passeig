<div class="card-body pt-0 mt-0">
    @php 
        $counter = 0; 
    @endphp
    @forelse ($contestCards as $contestCard)
        @php
            $bgColorClasses = ['bg-primary', 'bg-success', 'bg-danger', 'bg-warning'];
            $bgColorIndex = $counter % count($bgColorClasses);
            $bgColor = $bgColorClasses[$bgColorIndex];
            $counter++;
        @endphp
        <div class="row">
            @include('livewire.admin.partial.view-style')
            <ul class="mt-10">
                @if ($loop->index % 2 == 0)
                    <li style="--i: {{ $loop->index / 2 * 2 + 1 }};" class="{{ $bgColor }}">
                        <img src="{{ asset('storage/'. $contestCard->card_icon) }}" alt="user image">
                        <div class="content">
                            <h3>{{ Str::limit($contestCard->card_title, 30) }}</h3>
                            <p>{{ Str::limit($contestCard->card_title, 30) }}</p>
                        </div>
                        <div class="action-buttons">
                            <button wire:click="edit({{ $contestCard->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3 mb-2" data-bs-toggle="modal" data-bs-target="#contestCardsEditModal" {!! show_toltip('Update Contest Card') !!}> <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i></button>
                            <button wire:click="delete({{ $contestCard->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm" {!! show_toltip('Delete Contest Card') !!}> <i class="fa-solid fa-trash-alt fs-6 fw-bold fw-bolder"></i></button>
                        </div>
                    </li>
                @else
                    <li style="--i: {{ $loop->index / 2 * 2 + 2 }};" class="{{ $bgColor }}">
                        <img src="{{ asset('storage/'. $contestCard->card_icon) }}" alt="user image">
                        <div class="content">
                            <h3>{{ Str::limit($contestCard->card_title, 30) }}</h3>
                            <p>{{ Str::limit($contestCard->card_title, 30) }}</p>
                        </div>
                        <div class="action-buttons">
                            <button wire:click="edit({{ $contestCard->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3 mb-2" data-bs-toggle="modal" data-bs-target="#contestCardsEditModal" {!! show_toltip('Update Contest Card') !!}> <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i></button>
                            <button wire:click="delete({{ $contestCard->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm" {!! show_toltip('Delete Contest Card') !!}  {!! confirm() !!} href="#" class=" btn btn-sm btn-icon btn-active-light-danger w-30px h-30px me-2 mt-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete {{ Str::singular($page_title ?? 'Contest ') }}"> <i class="fa-solid fa-trash-alt fs-6 fw-bold fw-bolder"></i></button>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    @empty
        {!! no_data() !!}
    @endforelse
    {{$contestCards->links()}}
</div>
