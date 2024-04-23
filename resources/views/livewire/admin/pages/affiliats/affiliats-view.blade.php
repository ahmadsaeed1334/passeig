<div class="card-body scroll-x pt-0">
    <table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_HeroBanners_table">
      <thead>
        <tr class="fw-bold fs-7 text-uppercase gs-0 text-{{ primary_color() }} text-start">
          <th class="min-w-10px">Subtitle</th>
          <th class="min-w-10px">Title</th>
          <th class="min-w-10px">Description</th>
          <th class="min-w-10px">Button</th>
          <th class="min-w-100px text-end">Actions</th>
        </tr>
      </thead>
      <tbody>
          @forelse ($affiliats as $affiliate)
          <tr>
            <td class="text-gray-800 fw-bolder">
              {{ $affiliate->subtitle }}
            </td>
            <td class="text-gray-800 fw-bolder">
              {{ $affiliate->title }}
            </td>
            <td class="text-gray-800 fw-bolder">
              {{ $affiliate->description }}
            </td>
            <td class="text-gray-800 fw-bolder">
              {{ $affiliate->button }}
            </td>
            <td class="text-end">
                <button wire:click="edit('{{ $affiliate->id }}')" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" data-bs-toggle="modal" data-bs-target="#affiliateEditModal" {!! show_toltip('Update Affiliates') !!}>
                    <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                </button>
                {{-- <button wire:click="delete('{{ $affiliate->id }}')" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm" {!! show_toltip('Delete Affiliates')!!}>
                    <i class="fa-solid fa-trash fs-6 fw-bold fw-bolder"></i>
                </button> --}}
            </td>
          </tr>
          @empty
         
          {!! no_data() !!}
          @endforelse
        </tbody>
    </table>
    </div>