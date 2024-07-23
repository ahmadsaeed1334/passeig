<div class="card-body scroll-x pt-0">
    <table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_HeroBanners_table">
        <thead>
            <tr class="fw-bold fs-7 text-uppercase gs-0 text-{{ primary_color() }} text-start">
                <th class="min-w-10px">S#</th>
                <th class="min-w-10px">Name</th>
                <th class="min-w-10px">Description</th>
                <th class="min-w-100px text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $index => $category)
            <tr>
                <td>{{ $loop->iteration + ($categories->currentPage() - 1) * $categories->perPage() }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td class="text-end">
                    <button wire:click="edit('{{ $category->id }}')" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" data-bs-toggle="modal" data-bs-target="#categoriesEditModal" {!! show_toltip('Update Categories') !!}>
                        <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                    </button>
                    <a wire:click.prevent="delete('{{  $category->id }}')" {!! confirm() !!} href="#" class="btn btn-sm btn-icon btn-light btn-active-light-{{ primary_color() }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete {{ Str::singular('Categories') }}">
                        <i class="fa-solid fa-trash fs-6 fw-bold fw-bolder"></i>
                    </a>
                </td>
            </tr>
            @empty
            {!! no_data() !!}
            @endforelse
        </tbody>
    </table>
    {{ $categories->links() }}

    {{-- @if ($categories->hasPages())
    <ul class="pagination justify-content-center">
        @if ($categories->onFirstPage())
        <li class="page-item disabled">
            <span class="page-link">&laquo;</span>
        </li>
        @else
        <li class="page-item">
            <a class="page-link" href="{{ $categories->previousPageUrl() }}" rel="prev">&laquo;</a>
    </li>
    @endif

    @for ($i = 1; $i <= $categories->lastPage(); $i++)
        <li class="page-item {{ ($categories->currentPage() == $i) ? 'active' : '' }}">
            <a class="page-link" href="{{ $categories->url($i) }}">{{ $i }}</a>
        </li>
        @endfor

        @if ($categories->hasMorePages())
        <li class="page-item">
            <a class="page-link" href="{{ $categories->nextPageUrl() }}" rel="next">&raquo;</a>
        </li>
        @else
        <li class="page-item disabled">
            <span class="page-link">&raquo;</span>
        </li>
        @endif
        </ul>
        @endif --}}
</div>
