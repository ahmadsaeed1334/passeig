
<div class="card-body  pt-0  mt-0">
    @forelse ($abouts as $about)
    <div class="row ">
   @include('livewire.admin.partial.view-style')
   <div class="col-md-12 d-flex justify-content-between align-items-center  mt-10"> 
    <div>
        <h3><b>Top Title: </b></h3> {{ $about->top_title  }}
    </div>
    <div>
        <h3><b>Title : </b></h3> {{ $about->title }}
    </div>
    <div>
        <h3><b>Description : </b></h3>{{ Str::limit($about->description_1, 49) }}
        @if (strlen($about->description_1) > 49)
            
        @endif
    </div>
</div>
    <ul class="mt-10">
        <li style="--i: 1;" class="bg-primary">
           <h2>1</h2>
            <div class="content">
                <h3>{{$about->number_1 }}</h3>
                <p>{{ $about->title_1  }}</p>
            </div>
        </li>
        <li style="--i: 2;" class="bg-success">
            <h2>2</h2>
            <div class="content">
                <h3>{{ $about->number_2 }}</h3>
                <p>{{ $about->title_2 }}</p>
            </div>
        </li>
    </ul>
        <ul class="mt-5">
        
        <li style="--i: 3;" class="bg-danger">
            <h2>3</h2>
            <div class="content">
                <h3>{{ $about->number_3 }}</h3>
                <p>{{ $about->title_3 }}</p>
            </div>
        </li>
       
    </ul>
    <div class="col-sm-12 d-flex justify-content-center align-items-center mt-5">
          
        <button wire:click="edit({{ $about->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" data-bs-toggle="modal" data-bs-target="#aboutEditModal" {!! show_toltip('Update About') !!}> <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i></button> 
    </div>
</div>

@endforeach
</div>