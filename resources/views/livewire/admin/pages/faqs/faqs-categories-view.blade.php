<div class="card-body pt-0 mt-0">
    @php $counter = 0; @endphp
    @forelse ($faqsCategories as $faqsCategorie)
        @if ($loop->index % 2 == 0)
        @php
                $bgColorClasses = ['bg-primary', 'bg-success', 'bg-danger', 'bg-warning'];
                $bgColorIndex = $loop->index / 2 % count($bgColorClasses);
                $bgColor = $bgColorClasses[$bgColorIndex];
            @endphp
        
            <div class="row">
                @include('livewire.admin.partial.view-style')
                <ul class="mt-10">
                    <li style="--i: {{ $loop->index / 2 + 1 }};" class="{{ $bgColor }}">
                        <div>{{ $loop->iteration - 1}}</div>
                        <div class="content">
                            <h3>{{ Str::limit($faqsCategorie->name, 30) }}</h3>
                            <p>{{ Str::limit($faqsCategorie->description, 30) }}</p>
                        </div>
                        <div class="action-buttons">
                            <button wire:click="edit({{ $faqsCategorie->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3 mb-2" data-bs-toggle="modal" data-bs-target="#editCategoriesEditModal" {!! show_toltip('Update Faq Categories') !!}> <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i></button>
                            <button wire:click="delete({{ $faqsCategorie->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm" {!! show_toltip('Delete Faq') !!}> <i class="fa-solid fa-trash-alt fs-6 fw-bold fw-bolder"></i></button>
                        </div>
                    </li>
                    @if ($loop->index + 1 < $faqsCategories->count())
                        <li style="--i: {{ $loop->index / 2 + 2 }};" class="{{ $bgColor }}">
                            <div>{{ $loop->iteration }}</div>
                            <div class="content">
                                <h3>{{ Str::limit($faqsCategories[$loop->index + 1]->name, 30) }}</h3>
                                <p>{{ Str::limit($faqsCategories[$loop->index + 1]->description, 30) }}</p>
                            </div>
                            <div class="action-buttons">
                                <button wire:click="edit({{ $faqsCategories[$loop->index + 1]->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3 mb-2" data-bs-toggle="modal" data-bs-target="#editCategoriesEditModal" {!! show_toltip('Update Faq Categories') !!}> <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i></button>
                                <button wire:click="delete({{ $faqsCategories[$loop->index + 1]->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm" {!! show_toltip('Delete Faq') !!}> <i class="fa-solid fa-trash-alt fs-6 fw-bold fw-bolder"></i></button>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        @endif
    @empty
        <p>No FAQs found.</p>
    @endforelse
</div>
