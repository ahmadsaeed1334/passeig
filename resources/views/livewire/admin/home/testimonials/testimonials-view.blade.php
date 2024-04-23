        <div class="card-body  pt-0  mt-0">
            @forelse ($testimonials as $testimonial )
            <div class="row ">
           @include('livewire.admin.partial.view-style')
           <div class="col-md-12 d-flex justify-content-between align-items-center  mt-10"> 
            <div>
                <h3><b>Subtitle : </b></h3> {{ $testimonial->subtitle }}
            </div>
            <div>
                <h3><b>Title : </b></h3> {{ $testimonial->title }}
            </div>
            <div>
                <h3><b>Description : </b></h3>{{ Str::limit($testimonial->description, 49) }}
                @if (strlen($testimonial->description) > 49)
                    
                @endif
            </div>
        </div>
        <h2 class="text-center mt-10">Teams </h2>
            <ul class="mt-10">
                <li style="--i: 1;" class="bg-primary">
                    <img src="{{ asset('storage/'. $testimonial->slider_image_1) }}" alt="user image">
                    <div class="content">
                        <h3>{{ $testimonial->client_name_1 }}</h3>
                        <p>{{ Str::limit($testimonial->slider_description_1 , 60)}} <br/> <b>{{  $testimonial->rating_1  }}</b></p>
                      
                    </div>
                </li>
                <li style="--i: 2;" class="bg-success">
                    <img src="{{ asset('storage/'. $testimonial->slider_image_2) }}" alt="user image">
                    <div class="content">
                        <h3>{{ $testimonial->client_name_2 }}</h3>
                        <p>{{ Str::limit($testimonial->slider_description_2,60) }} <br/> <b>{{  $testimonial->rating_2  }}</b></p>
                       
                    </div>
                </li>
            </ul>
                <ul class="mt-5">
                
                <li style="--i: 3;" class="bg-danger" >
                    <img src="{{ asset('storage/'. $testimonial->slider_image_3) }}" alt="user image">
                    <div class="content">
                        <h3>{{ $testimonial->client_name_3 }}</h3>
                        <p>{{ Str::limit($testimonial->slider_description_3 ,60)}} <br/> <b>{{  $testimonial->rating  }}</b></p>
                       
                    </div>
                </li>
               
            </ul>
            <div class="col-sm-12 d-flex justify-content-center align-items-center mt-5">
                  
                <button  wire:click="edit({{ $testimonial->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" data-bs-toggle="modal" data-bs-target="#testimonialEditModal" {!! show_toltip('Update Testimonial') !!}> <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i></button>                      
                {{-- <button  wire:click="delete({{ $testimonial->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3"  {!! show_toltip('delete Testimonial') !!}> <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i></button>                       --}}
            </div>
        </div>
        
        @endforeach
        </div>