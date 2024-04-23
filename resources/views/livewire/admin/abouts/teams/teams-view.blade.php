 <div class="card-body  pt-0  mt-0">
    @forelse ($teams as $team)
    <div class="row ">
   @include('livewire.admin.partial.view-style')
   <div class="col-md-12 d-flex justify-content-between align-items-center  mt-10"> 
    <div>
        <h3><b>Subtitle : </b></h3> {{ $team->subtitle }}
    </div>
    <div>
        <h3><b>Title : </b></h3> {{ $team->title }}
    </div>
    <div>
        <h3><b>Description : </b></h3>{{ Str::limit($team->description, 49) }}
        @if (strlen($team->description) > 49)
            
        @endif
    </div>
</div>
    <ul class="mt-10">
        <li style="--i: 1;" class="bg-primary">
            <img src="{{ asset('storage/'. $team->team_image_1) }}" alt="user image">
            <div class="content">
                <h3>{{ $team->team_name_1 }}</h3>
                <p>{{ $team->team_designation_1 }}</p>
            </div>
        </li>
        <li style="--i: 2;" class="bg-success">
            <img src="{{ asset('storage/'. $team->team_image_2) }}" alt="user image">
            <div class="content">
                <h3>{{ $team->team_name_2 }}</h3>
                <p>{{ $team->team_designation_2 }}</p>
            </div>
        </li>
    </ul>
        <ul class="mt-5">
        
        <li style="--i: 3;" class="bg-danger">
            <img src="{{ asset('storage/'. $team->team_image_3) }}" alt="user image">
            <div class="content">
                <h3>{{ $team->team_name_3 }}</h3>
                <p>{{ $team->team_designation_3 }}</p>
            </div>
        </li>
       
    </ul>
    <div class="col-sm-12 d-flex justify-content-center align-items-center mt-5">
          
        <button  wire:click="edit({{ $team->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" data-bs-toggle="modal" data-bs-target="#teamsEditModal" {!! show_toltip('Update Team') !!}> <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i></button> 
    </div>
</div>

@endforeach
</div>