
<div class="card-body pt-0 mt-0">
    <table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_TermsConditions_table">
      <thead>
        <tr class="fw-bold fs-7 text-uppercase gs-0 text-{{ primary_color() }} text-start">
          <th class="min-w-10px">S#</th>
          <th class="min-w-10px">Terms & Condition</th>
          <th class="min-w-10px">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($termsConditions as $termsCondition)
        <tr>
            <td> {{$loop->index + 1 }}</td>
           
            <td>{!! nl2br(strip_tags(\Illuminate\Support\Str::limit($termsCondition->content, 120))) !!}</td>

            <td class="text-end">          
                <button wire:click="TermsConditionEdit('{{ $termsCondition->id }}')" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" data-bs-toggle="modal" data-bs-target="#termsconditionEditModal" {!! show_toltip('Update Terms & Conditions') !!}>
                    <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                </button>
                <a wire:click.prevent="delete('{{ $termsCondition->id }}')" {!! confirm() !!} class=" btn btn-sm btn-icon btn-active-light-danger w-30px h-30px me-2 mt-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete {{ Str::singular($page_title ?? 'Terms & Conditions') }}">
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
