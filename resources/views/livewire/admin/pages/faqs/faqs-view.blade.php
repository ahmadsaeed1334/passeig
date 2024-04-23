<div class="card-body pt-0 mt-0">


    @forelse ($faqTops as $faqTop)
    <div class="row">
        @include('livewire.admin.partial.view-style')
        <div class="col-md-10 d-flex justify-content-between align-items-center mt-10"> 
            <div>
                <h3><b>Subtitle:</b></h3> {{ $faqTop->subtitle }}
            </div>
            <div>
                <h3><b>Title:</b></h3> {{ $faqTop->title }}
            </div>
            <div>
                <h3><b>Description:</b></h3>
                {{ Str::limit($faqTop->description, 49) }}
                @if (strlen($faqTop->description) > 49)
                    {{-- Show additional content or take other actions here --}}
                @endif
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-10 col-md-2 ">
            <button wire:click="editFaqTops({{ $faqTop->id }})" class="btn btn-icon  btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" data-bs-toggle="modal" data-bs-target="#faqTopEditModal" {!! show_toltip('Update Faq Top') !!}> <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i></button>       
         </div>
    </div>
@empty
  <div>Handle case when no FAQs are found </div>
@endforelse


    @php $counter = 0; @endphp
    @forelse ($faqs as $faq)
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
                        <div> <p><b>Category IDs:</b> 
                            @foreach($faq->categories as $category)
                                {{ $category->id }},
                            @endforeach
                        </p></div>
                        <div class="content">
                            <h3>{{ Str::limit($faq->question, 30) }}</h3>
                            <p>{{ Str::limit($faq->answer, 30) }}</p>
                        </div>
                        <div class="action-buttons">
                            <button wire:click="edit({{ $faq->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3 mb-2" data-bs-toggle="modal" data-bs-target="#faqEditModal" {!! show_toltip('Update Faq') !!}> <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i></button>
                            <button wire:click="delete({{ $faq->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm" {!! show_toltip('Delete Faq') !!} {!! confirm() !!}> <i class="fa-solid fa-trash-alt fs-6 fw-bold fw-bolder"></i></button>
                        </div>
                    </li>
                    @if ($loop->index + 1 < $faqs->count())
                        <li style="--i: {{ $loop->index / 2 + 2 }};" class="{{ $bgColor }}">
                            <div> <p><b>Category IDs:</b> 
                                @foreach($faqs[$loop->index + 1]->categories as $category)
                                    {{ $category->id }},
                                @endforeach
                            </p></div>
                            <div class="content">
                                <h3>{{ Str::limit($faqs[$loop->index + 1]->question, 30) }}</h3>
                                <p>{{ Str::limit($faqs[$loop->index + 1]->answer, 30) }}</p>
                            </div>
                            <div class="action-buttons">
                                <button wire:click="edit({{ $faqs[$loop->index + 1]->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3 mb-2" data-bs-toggle="modal" data-bs-target="#faqEditModal" {!! show_toltip('Update Faq') !!}> <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i></button>
                                <button wire:click="delete({{ $faqs[$loop->index + 1]->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm" {!! show_toltip('Delete Faq') !!} {!! confirm() !!}> <i class="fa-solid fa-trash-alt fs-6 fw-bold fw-bolder"></i></button>
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
