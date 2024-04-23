<div class="card-body  pt-0  mt-0">
    @forelse ($buyTickets as $buyTicket )
    <div class="row ">
   @include('livewire.admin.partial.view-style')
   <div class="col-md-12 d-flex justify-content-between align-items-center  mt-10"> 
    <div>
        <h3><b>Subtitle : </b></h3> {{ $buyTicket->subtitle }}
    </div>
    <div>
        <h3><b>Title : </b></h3> {{ $buyTicket->title }}
    </div>
    
    <div>
        <h3><b>Description : </b></h3>{{ Str::limit($buyTicket->description, 49) }}
        @if (strlen($buyTicket->description) > 49)
            
        @endif
    </div>
</div>
    <ul class="mt-10">
        <li style="--i: 1;" class="bg-primary">
           <div>1</div>
            <div class="content">
                <h3>{{ Str::limit($buyTicket->btn_text  , 20)}}</h3>
                <p>{{Str::limit( $buyTicket->btn_title , 20) }}</p>
              
            </div>
        </li>
        
    </ul>
        <ul class="mt-5">
            <li style="--i: 2;" class="bg-success">
                <h3>{{ Str::limit($buyTicket->cart_top_text, 20) }}</h3>               
                 <div class="content">
                    <h3>{{ $buyTicket->cart_amount_1 }}</h3>
                    <p>{{ Str::limit($buyTicket->cart_text_1,20) }}</p>
                   
                </div>
            </li>
        <li style="--i: 3;" class="bg-danger" >
            <h3>{{Str::limit( $buyTicket->cart_top_text,20) }}</h3>               
            <div class="content">
                <h3>{{Str::limit( $buyTicket->cart_amount_2,20) }}</h3>
                <p>{{ Str::limit($buyTicket->cart_text_2,20) }}</p>
               
            </div>
        </li>
       
    </ul>
    <div class="col-sm-12 d-flex justify-content-center align-items-center mt-5">
          
        <button  wire:click="edit({{ $buyTicket->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" data-bs-toggle="modal" data-bs-target="#buyTicketEditModal" {!! show_toltip('Update Buy Ticket') !!}> <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i></button>                      
    </div>
</div>

@endforeach
</div>