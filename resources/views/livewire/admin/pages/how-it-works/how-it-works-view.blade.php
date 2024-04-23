
<div class="card-body  pt-0  mt-0">
    @forelse ($howItWorks as $howItWork )
    <div class="row ">
   @include('livewire.admin.partial.view-style')
   <div class="col-md-12 d-flex justify-content-between align-items-center  mt-10"> 
    <div>
        <h3><b>Subtitle : </b></h3> {{ $howItWork->subtitle }}
    </div>
    <div>
        <h3><b>Title : </b></h3> {{ $howItWork->title }}
    </div>
    
    <div>
        <h3><b>Description : </b></h3>{{ Str::limit($howItWork->description, 49) }}
        @if (strlen($howItWork->description) > 49)
            
        @endif
    </div>
</div>
    <ul class="mt-10">
        <li style="--i: 1;" class="bg-primary">
            <img src="{{ asset('storage/'. $howItWork->card_icon_1) }}" alt="user image">
            <div class="content">
                <h3>{{ Str::limit($howItWork->card_title_1 , 20)}}</h3>
                <p>{{ Str::limit($howItWork->card_description_1, 60) }}</p>
              
            </div>
        </li>
        <li style="--i: 2;" class="bg-success">
            <img src="{{ asset('storage/'. $howItWork->card_icon_2) }}" alt="user image">
            <div class="content">
                <h3>{{  Str::limit($howItWork->card_title_2 , 20) }}</h3>
                <p>{{  Str::limit($howItWork->card_description_2, 60) }}</p>
               
            </div>
        </li>
    </ul>
        <ul class="mt-5">
        
        <li style="--i: 3;" class="bg-danger" >
            <img src="{{ asset('storage/'. $howItWork->card_icon_3) }}" alt="user image">
            <div class="content">
                <h3>{{  Str::limit($howItWork->card_title_3 , 20) }}</h3>
                <p>{{  Str::limit($howItWork->card_description_3, 60) }}</p>
               
            </div>
        </li>
       
    </ul>
    <div class="col-sm-12 d-flex justify-content-center align-items-center mt-5">
          
        <button  wire:click="edit({{ $howItWork->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" data-bs-toggle="modal" data-bs-target="#howItWorkEditModal" {!! show_toltip('Update Features') !!}> <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i></button>                      
    </div>
</div>

@endforeach
</div>