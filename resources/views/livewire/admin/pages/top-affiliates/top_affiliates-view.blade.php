<div class="card-body  pt-0  mt-0">
    @forelse ($topAffiliates as $topAffiliate )
    <div class="row ">
   @include('livewire.admin.partial.view-style')
   <div class="col-md-12 d-flex justify-content-between align-items-center  mt-10"> 
    <div>
        <h3><b>Subtitle : </b></h3> {{ $topAffiliate->subtitle }}
    </div>
    <div>
        <h3><b>Title : </b></h3> {{ $topAffiliate->title }}
    </div>
    
    <div>
        <h3><b>Description : </b></h3>{{ Str::limit($topAffiliate->description, 49) }}
        @if (strlen($topAffiliate->description) > 49)
            
        @endif
    </div>
</div>
    <ul class="mt-10">
        <li style="--i: 1;" class="bg-primary">
            <img src="{{ asset('storage/'. $topAffiliate->card_image_1) }}" alt="user image">
            <div class="content">
                <h3>{{ $topAffiliate->card_name_1 }}</h3>
                <p>{{ $topAffiliate->card_amount_1 }}</p>
              
            </div>
        </li>
        <li style="--i: 2;" class="bg-success">
            <img src="{{ asset('storage/'. $topAffiliate->card_image_2) }}" alt="user image">
            <div class="content">
                <h3>{{ $topAffiliate->card_name_2 }}</h3>
                <p>{{ $topAffiliate->card_amount_2 }}</p>
               
            </div>
        </li>
    </ul>
        <ul class="mt-5">
        
        <li style="--i: 3;" class="bg-danger" >
            <img src="{{ asset('storage/'. $topAffiliate->card_image_3) }}" alt="user image">
            <div class="content">
                <h3>{{ $topAffiliate->card_name_3 }}</h3>
                <p>{{ $topAffiliate->card_amount_3 }}</p>
               
            </div>
        </li>
       
    </ul>
    <div class="col-sm-12 d-flex justify-content-center align-items-center mt-5">
          
        <button  wire:click="edit({{ $topAffiliate->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" data-bs-toggle="modal" data-bs-target="#topAffiliateEditModal" {!! show_toltip('Update Top Affiliates') !!}> <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i></button>                      
    </div>
</div>

@endforeach
</div>