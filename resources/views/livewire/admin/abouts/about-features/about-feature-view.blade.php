
<div class="card-body  pt-0  mt-0">
    @forelse ($aboutfeatures as $aboutfeature )
    <div class="form-group mt-6 ">

        <div class="image-input image-input-outline align-items-center" style="background-image: url({{ asset('img/bg-back.jpg') }}); background-size:100% 100%;width:300px">
            <!-- Preview existing file -->
            <div class="image-input-wrapper" style="background-image: url({{ asset('storage/'.$aboutfeature->image) }}); background-size:100% 100%;width:500px"></div>
           
            @error('image')
                <div class="text-{{ primary_color() }}">{{ $message }}</div>
            @enderror
        </div>
    </div>
    
    <div class="row ">
   @include('livewire.admin.partial.view-style')
   <div class="col-md-12 d-flex justify-content-between align-items-center  mt-10"> 
    <div>
        <h3><b>Subtitle : </b></h3> {{ $aboutfeature->subtitle }}
    </div>
    <div>
        <h3><b>Title : </b></h3> {{ $aboutfeature->title }}
    </div>
    <div>
        <h3><b>Description : </b></h3>{{ Str::limit($aboutfeature->description, 49) }}
        @if (strlen($aboutfeature->description) > 49)
            
        @endif
    </div>
</div>

  

    <ul class="mt-10">
        <li style="--i: 1;" class="bg-success">
            <img src="{{ asset('storage/' . $aboutfeature->inner_icon_1) }}" alt="user image">
            <div class="content">
                <h3>{{ Str::limit($aboutfeature->icon_title_1, 20) }}</h3>
               
            </div>
        </li>
        <li style="--i: 2;" class="bg-danger">
            <img src="{{ asset('storage/' . $aboutfeature->inner_icon_2) }}" alt="user image">
            <div class="content">
                <h3>{{ $aboutfeature->icon_title_2 }}</h3>
                
            </div>
        </li>
    </ul>
        <ul class="mt-5">
        
        <li style="--i: 3;" class="bg-warning">
            <img src="{{ asset('storage/' . $aboutfeature->inner_icon_3) }}" alt="user image">
            <div class="content">
                <h3>{{ $aboutfeature->icon_title_3 }}</h3>
                
            </div>
        </li>
        <li style="--i: 4;" class="bg-primary">
            <img src="{{ asset('storage/' . $aboutfeature->inner_icon_4) }}" alt="user image">
            <div class="content">
                <h3>{{ $aboutfeature->icon_title_4 }}</h3>
               
            </div>
        </li>
       
    </ul>
        <ul class="mt-5">
        
        <li style="--i: 5;" class="bg-info">
            <img src="{{ asset('storage/' . $aboutfeature->inner_icon_5) }}" alt="user image">
            <div class="content">
                <h3>{{ $aboutfeature->icon_title_5 }}</h3>
               
            </div>
        </li>
        <li style="--i: 6;" class="bg-success">
            <img src="{{ asset('storage/' . $aboutfeature->inner_icon_6) }}" alt="user image">
            <div class="content">
                <h3>{{ $aboutfeature->icon_title_6 }}</h3>
               
            </div>
        </li>
       
    </ul>
    <div class="col-sm-12 d-flex justify-content-center align-items-center mt-5">
          
        <button  wire:click="edit({{ $aboutfeature->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" data-bs-toggle="modal" data-bs-target="#aboutfeatureEditModal" {!! show_toltip('Update Features') !!}> <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i></button>                      
    </div>
</div>

@endforeach
</div>
                 
