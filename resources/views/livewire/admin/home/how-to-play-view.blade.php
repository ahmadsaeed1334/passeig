{{-- <div class="card-body scroll-x pt-0">
    <table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_HeroBanners_table">
        <thead>
            <tr class="fw-bold fs-7 text-uppercase gs-0 text-{{ primary_color() }} text-start">
                <th class="min-w-10px">S#</th>
                <th class="min-w-10px">Subtitle</th>
                <th class="min-w-10px">Title</th>
                <th class="min-w-10px">Description</th>
                <th class="min-w-10px">Play Card Icon 1</th>
                <th class="min-w-10px">Play Card Title 1</th>
                <th class="min-w-10px">Play Card Description 1</th>
                <th class="min-w-10px">Play Card Icon 2</th>
                <th class="min-w-10px">Play Card Title 2</th>
                <th class="min-w-10px">Play Card Description 2</th>
                <th class="min-w-10px">Play Card Icon 3</th>
                <th class="min-w-10px">Play Card Title 3</th>
                <th class="min-w-10px">Play Card Description 3</th>
                <th class="min-w-10px">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($howToPlays as $howToPlay )
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $howToPlay->subtitle }}</td>
                <td>{{ $howToPlay->title }}</td>
                <td>{{ $howToPlay->description }}</td>
                <td>
                    <div class="symbol symbol-50 overlay symbol-50px me-3">
                        @if($howToPlay->play_card_icon_1)
                        <!-- Display Icon -->
                        <img src="{{ asset('storage/' . $howToPlay->play_card_icon_1) }}" alt="Icon" style="width: 50px; height: 50px; border-radius: 50%;">
                        @else
                        <!-- Display Default Icon or Placeholder Image -->
                        <img src="{{ asset('path_to_default_icon_or_placeholder_image') }}" alt="Default Icon" style="width: 50px; height: 50px; border-radius: 50%;">
                        @endif
                    </div>
                </td>
                <td>{{ $howToPlay->play_card_title_1 }}</td>
                <td>{{ $howToPlay->play_card_description_1 }}</td>
                <td>
                    <div class="symbol symbol-50 overlay symbol-50px me-3">
                        @if($howToPlay->play_card_icon_2)
                        <!-- Display Icon -->
                        <img src="{{ asset('storage/' . $howToPlay->play_card_icon_2) }}" alt="Icon" style="width: 50px; height: 50px; border-radius: 50%;">
                        @else
                        <!-- Display Default Icon or Placeholder Image -->
                        <img src="{{ asset('path_to_default_icon_or_placeholder_image') }}" alt="Default Icon" style="width: 50px; height: 50px; border-radius: 50%;">
                        @endif
                    </div>
                </td>
                <td>{{ $howToPlay->play_card_title_2 }}</td>
                <td>{{ $howToPlay->play_card_description_2 }}</td>
                <td>
                    <div class="symbol symbol-50 overlay symbol-50px me-3">
                        @if($howToPlay->play_card_icon_3)
                        <!-- Display Icon -->
                        <img src="{{ asset('storage/' . $howToPlay->play_card_icon_3) }}" alt="Icon" style="width: 50px; height: 50px; border-radius: 50%;">
                        @else
                        <!-- Display Default Icon or Placeholder Image -->
                        <img src="{{ asset('path_to_default_icon_or_placeholder_image') }}" alt="Default Icon" style="width: 50px; height: 50px; border-radius: 50%;">
                        @endif
                    </div>
                </td>
                <td>{{ $howToPlay->play_card_title_3 }}</td>
                <td>{{ $howToPlay->play_card_description_3 }}</td>
                <td class="text-end">     
                    <button  wire:click="edit({{ $howToPlay->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" data-bs-toggle="modal" data-bs-target="#howToPlayEditModal" {!! show_toltip('Update How To Play') !!}> <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i></button>                      
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="14">{!! no_data() !!}</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
 --}}

       
<div class="card-body  pt-0  mt-0">
    @forelse ($howToPlays as $howToPlay )
    <div class="row ">
   @include('livewire.admin.partial.view-style')
   <div class="col-md-12 d-flex justify-content-between align-items-center  mt-10"> 
    <div>
        <h3><b>Subtitle: </b></h3> {{ $howToPlay->subtitle  }}
    </div>
    <div>
        <h3><b>Title : </b></h3> {{ $howToPlay->title }}
    </div>
    <div>
        <h3><b>Description : </b></h3>{{ Str::limit($howToPlay->description, 49) }}
        @if (strlen($howToPlay->description) > 49)
            
        @endif
    </div>
</div>

    <ul class="mt-10">
        <li style="--i: 1;" class="bg-primary">
            <img src="{{ asset('storage/'. $howToPlay->play_card_icon_1) }}" alt="user image">
            <div class="content">
                <h3>{{ Str::limit( $howToPlay->play_card_title_1 , 20)}}</h3>
                <p>{{ Str::limit($howToPlay->play_card_description_1, 60) }}</p>
            </div>
        </li>
        <li style="--i: 2;" class="bg-success">
            <img src="{{ asset('storage/'. $howToPlay->play_card_icon_2) }}" alt="user image">
            <div class="content">
                <h3>{{  Str::limit( $howToPlay->play_card_title_2 , 20) }}</h3>
                <p>{{ Str::limit($howToPlay->play_card_description_2, 60) }}</p>
            </div>
        </li>
    </ul>
        <ul class="mt-5">
        
        <li style="--i: 3;" class="bg-danger">
            <img src="{{ asset('storage/'. $howToPlay->play_card_icon_3) }}" alt="user image">
            <div class="content">
                <h3>{{  Str::limit( $howToPlay->play_card_title_3 , 20) }}</h3>
                <p>{{ Str::limit($howToPlay->play_card_description_3, 60) }}</p>
            </div>
        </li>
       
    </ul>
    <div class="col-sm-12 d-flex justify-content-center align-items-center mt-5">
          
        <button  wire:click="edit({{ $howToPlay->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" data-bs-toggle="modal" data-bs-target="#howToPlayEditModal" {!! show_toltip('Update How To Play') !!}> <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i></button>                      
    </div>
</div>

@endforeach
</div>