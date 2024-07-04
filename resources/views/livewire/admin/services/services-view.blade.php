<div class="card-body scroll-x pt-0">
    <table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_HeroBanners_table">
      <thead>
        <tr class="fw-bold fs-7 text-uppercase gs-0 text-{{ primary_color() }} text-start">
          <th class="min-w-10px">S#</th>
          <th class="min-w-10px">Image</th>
          <th class="min-w-10px">Title</th>
          <th class="min-w-10px">Description</th>
          <th class="min-w-100px text-end">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($services as $service)
        <tr>
            <td>{{ $loop->index + 1}}</td>
            <td class="">         
                <div class="d-flex align-items-center">
                    <div class="symbol symbol-50 overlay symbol-50px me-3">                   
                        <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}" style="width: 50px; height: 50px; border-radius: 50%;">                        
                    </div>
                </div>
            </td>
            <td>{{ $service->title }}</td>
            <td>{{ $service->description }}</td>
  
            <td class="text-end">          
                <button wire:click="edit('{{ $service->id }}')" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" data-bs-toggle="modal" data-bs-target="#servicesEditModal" {!! show_toltip('Update Services') !!}>
                    <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                </button>
                <a wire:click.prevent="delete('{{  $service->id }}')" {!! confirm() !!} href="#"
				class="btn btn-sm btn-icon btn-light btn-active-light-{{ primary_color() }}" data-bs-toggle="tooltip"
				data-bs-placement="top" title="Delete {{ Str::singular('Categories') }}">
				<i class="fa-solid fa-trash fs-6 fw-bold fw-bolder"></i>
										</a>
            </td>
          </tr>
          @empty
          {!! no_data() !!}
          @endforelse
      </tbody>
    </table>
    </div>