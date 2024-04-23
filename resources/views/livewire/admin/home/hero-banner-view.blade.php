<div class="card-body scroll-x pt-0">
    <table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_HeroBanners_table">
      <thead>
        <tr class="fw-bold fs-7 text-uppercase gs-0 text-{{ primary_color() }} text-start">
          <th class="min-w-10px">S#</th>
          <th class="min-w-10px">Subtitle</th>
          <th class="min-w-10px">Title</th>
          <th class="min-w-10px">Description</th>
          <th class="min-w-10px">Button Text</th>
          <th class="min-w-10px">Button Link</th>
          <th class="min-w-10px">File</th>
          <th class="min-w-100px text-end">Actions</th>
        </tr>
      </thead>
      <tbody>
        @if ($heroBanners)
          @forelse ($heroBanners as $banner)
          <tr>
            <td> {{$loop->index + 1 }}</td>
            <td>{{ $banner->subtitle }}</td>
            <td>{{ $banner->title }}</td>
            <td>{{ $banner->description }}</td>
            <td>{{ $banner->button_text_1 }}</td>
            <td>{{ $banner->button_link_1 }}</td>
            {{-- <td>{{ $banner->file }}</td>
             --}}
             <td class="">         
                <div class="d-flex align-items-center">
                    <div class="symbol symbol-50 overlay symbol-50px me-3">                   
                        <!-- Display Image as Avatar -->
                        <img src="{{ asset('storage/' . $banner->file) }}" alt="Giveaway Image" style="width: 50px; height: 50px; border-radius: 50%;">  
                        <!-- Display Video Thumbnail or Icon -->                       
                    </div>
                </div>
            </td>
            <td class="text-end">          
                <button wire:click="editHeroBanner('{{ $banner->id }}')" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" data-bs-toggle="modal" data-bs-target="#heroBannerModal" {!! show_toltip('Update Hero Banner') !!}>
                    <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                </button>
            </td>
          </tr>
          @empty
          {!! no_data() !!}
          @endforelse
          @else
      @endif
             
      </tbody>
    </table>
    </div>