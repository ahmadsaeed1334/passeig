{{-- <div class="card-body scroll-x pt-0">
    <table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_HeroBanners_table">
        <thead>
            <tr class="fw-bold fs-7 text-uppercase gs-0 text-{{ primary_color() }} text-start">
                <th class="min-w-10px">S#</th>
                <th class="min-w-10px">Subtitle</th>
                <th class="min-w-10px">Title</th>
                <th class="min-w-10px">Description</th>
                <th class="min-w-10px">Card Icon 1</th>
                <th class="min-w-10px">Card Title 1</th>
                <th class="min-w-10px">Card Description 1</th>
                <th class="min-w-10px">Card Icon 2</th>
                <th class="min-w-10px">Card Title 2</th>
                <th class="min-w-10px">Card Description 2</th>
                <th class="min-w-10px">Card Icon 3</th>
                <th class="min-w-10px">Card Title 3</th>
                <th class="min-w-10px">Card Description 3</th>
                <th class="min-w-10px">Card Icon 4</th>
                <th class="min-w-10px">Card Title 4</th>
                <th class="min-w-10px">Card Description 4</th>
                <th class="min-w-10px">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($features as $feature )
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $feature->subtitle }}</td>
                <td>{{ $feature->title }}</td>
                <td>{{ $feature->description }}</td>
                <td>  <div class="symbol symbol-50 overlay symbol-50px me-3">
                    @if($feature->card_icon_1)
                    <!-- Display Icon -->
                    <img src="{{ asset('storage/' . $feature->card_icon_1) }}" alt="Icon" style="width: 50px; height: 50px; border-radius: 50%;">
                    @else
                    <!-- Display Default Icon or Placeholder Image -->
                    <img src="{{ asset('path_to_default_icon_or_placeholder_image') }}" alt="Default Icon" style="width: 50px; height: 50px; border-radius: 50%;">
                    @endif
                </div>
            </td>
                <td>{{ $feature->card_title_1 }}</td>
                <td>{{ $feature->card_description_1 }}</td>
                <td>  <div class="symbol symbol-50 overlay symbol-50px me-3">
                    @if($feature->card_icon_2)
                    <!-- Display Icon -->
                    <img src="{{ asset('storage/' . $feature->card_icon_2) }}" alt="Icon" style="width: 50px; height: 50px; border-radius: 50%;">
                    @else
                    <!-- Display Default Icon or Placeholder Image -->
                    <img src="{{ asset('path_to_default_icon_or_placeholder_image') }}" alt="Default Icon" style="width: 50px; height: 50px; border-radius: 50%;">
                    @endif
                </div>
            </td>
                <td>{{ $feature->card_title_2 }}</td>
                <td>{{ $feature->card_description_2 }}</td>
                <td>  <div class="symbol symbol-50 overlay symbol-50px me-3">
                    @if($feature->card_icon_3)
                    <!-- Display Icon -->
                    <img src="{{ asset('storage/' . $feature->card_icon_3) }}" alt="Icon" style="width: 50px; height: 50px; border-radius: 50%;">
                    @else
                    <!-- Display Default Icon or Placeholder Image -->
                    <img src="{{ asset('path_to_default_icon_or_placeholder_image') }}" alt="Default Icon" style="width: 50px; height: 50px; border-radius: 50%;">
                    @endif
                </div>
            </td>
                <td>{{ $feature->card_title_3 }}</td>
                <td>{{ $feature->card_description_3 }}</td>
                <td>  <div class="symbol symbol-50 overlay symbol-50px me-3">
                    @if($feature->card_icon_4)
                    <!-- Display Icon -->
                    <img src="{{ asset('storage/' . $feature->card_icon_4) }}" alt="Icon" style="width: 50px; height: 50px; border-radius: 50%;">
                    @else
                    <!-- Display Default Icon or Placeholder Image -->
                    <img src="{{ asset('path_to_default_icon_or_placeholder_image') }}" alt="Default Icon" style="width: 50px; height: 50px; border-radius: 50%;">
                    @endif
                </div>
            </td>
                <td>{{ $feature->card_title_4 }}</td>
                <td>{{ $feature->card_description_4 }}</td>
                <td class="text-end">     
                    <button  wire:click="edit({{ $feature->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" data-bs-toggle="modal" data-bs-target="#featureEditModal" {!! show_toltip('Update Features') !!}> <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i></button>                      
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
    @forelse ($features as $feature )
    <div class="row ">
   @include('livewire.admin.partial.view-style')
   <div class="col-md-12 d-flex justify-content-between align-items-center  mt-10"> 
    <div>
        <h3><b>Subtitle : </b></h3> {{ $feature->subtitle }}
    </div>
    <div>
        <h3><b>Title : </b></h3> {{ $feature->title }}
    </div>
    
    <div>
        <h3><b>Description : </b></h3>{{ Str::limit($feature->description, 49) }}
        @if (strlen($feature->description) > 49)
            
        @endif
    </div>
</div>
    <ul class="mt-10">
        <li style="--i: 1;" class="bg-primary">
            <img src="{{ asset('storage/'. $feature->card_icon_1) }}" alt="user image">
            <div class="content">
                <h3>{{ $feature->card_title_1 }}</h3>
                <p>{{ $feature->card_description_1 }}</p>
              
            </div>
        </li>
        <li style="--i: 2;" class="bg-success">
            <img src="{{ asset('storage/'. $feature->card_icon_2) }}" alt="user image">
            <div class="content">
                <h3>{{ $feature->card_title_2 }}</h3>
                <p>{{ $feature->card_description_2 }}</p>
               
            </div>
        </li>
    </ul>
        <ul class="mt-5">
        
        <li style="--i: 3;" class="bg-danger" >
            <img src="{{ asset('storage/'. $feature->card_icon_3) }}" alt="user image">
            <div class="content">
                <h3>{{ $feature->card_title_3 }}</h3>
                <p>{{ $feature->card_description_3 }}</p>
               
            </div>
        </li>
        <li style="--i: 4;" class="bg-warning" >
            <img src="{{ asset('storage/'. $feature->card_icon_4) }}" alt="user image">
            <div class="content">
                <h3>{{ $feature->card_title_4 }}</h3>
                <p>{{ $feature->card_description_4 }}</p>
               
            </div>
        </li>
       
    </ul>
    <div class="col-sm-12 d-flex justify-content-center align-items-center mt-5">
          
        <button  wire:click="edit({{ $feature->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" data-bs-toggle="modal" data-bs-target="#featureEditModal" {!! show_toltip('Update Features') !!}> <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i></button>                      
    </div>
</div>

@endforeach
</div>