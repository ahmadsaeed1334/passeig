<div class="card-body  pt-0  mt-0">
    @forelse ($abouts as $about)
    <div class="row ">
   @include('livewire.admin.partial.view-style')
    <ul class="mt-10">
        <li style="--i: 1;" class="bg-primary">
            <img src="{{ asset('storage/'. $about->image_1) }}" alt="user image">
            <div class="content">
                <h3>{{ Str::limit($about->title_1, 30) }}</h3>
                <p>{{ Str::limit($about->description_1, 60) }}</p>
            </div>
        </li>
        <li style="--i: 2;" class="bg-success">
            <img src="{{ asset('storage/'. $about->image_2) }}" alt="user image">
            <div class="content">
                <h3>{{ Str::limit($about->title_2, 30) }}</h3>
                <p>{{ Str::limit($about->description_2, 60) }}</p>

            </div>
        </li>
    </ul>
        {{-- <ul class="mt-5">
        
        <li style="--i: 3;" class="bg-danger">
            <img src="{{ asset('storage/'. $about->about_image_3) }}" alt="user image">
            <div class="content">
                <h3>{{ $about->about_name_3 }}</h3>
                <p>{{ $about->about_designation_3 }}</p>
            </div>
        </li>
       
    </ul> --}}
    <div class="col-sm-12 d-flex justify-content-center align-items-center mt-5">
          
        <button  wire:click="edit({{ $about->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" data-bs-toggle="modal" data-bs-target="#aboutEditModal" {!! show_toltip('Update About') !!}> <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i></button> 
    </div>
</div>

@endforeach
</div>