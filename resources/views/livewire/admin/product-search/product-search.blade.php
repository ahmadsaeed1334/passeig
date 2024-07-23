<div class="card-header mt-6">
    <div class="d-flex align-items-center position-relative me-5 my-1">
        <span class="svg-icon svg-icon-1 position-absolute ms-6 ">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
            </svg>
        </span>
        <input wire:model.live="search" type="text" class="form-control form-control-solid w-250px ps-15  fst-italic" placeholder="Search Products by name or description" />
    </div>

    <table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle">
        <thead>
            <tr class="fw-bold fs-7 text-uppercase gs-0  text-start">
                <th class="min-w-10px">S#</th>
                <th class="min-w-10px">Name</th>
                <th class="min-w-10px">Description</th>
                <th class="min-w-10px">Short Description</th>
                <th class="min-w-10px">Category</th>
                <th class="min-w-10px">Image</th>
                <th class="min-w-100px ">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $index => $product)
            <tr>
                <td>{{ $loop->iteration + ($products->currentPage() - 1) * $products->perPage() }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ \Illuminate\Support\Str::words(strip_tags($product->description), 10, '...') }}</td>
                <td>{{ \Illuminate\Support\Str::words(strip_tags($product->short_description), 10, '...') }}</td>
                <td>{{ $product->categorie->name }}</td>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="symbol symbol-50 overlay symbol-50px me-3">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 50px; height: 50px; border-radius: 50%;">
                        </div>
                    </div>
                </td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-icon btn-light btn-active-light-primary btn-sm mr-3">
                        <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                    </a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-icon btn-light btn-active-light-primary">
                            <i class="fa-solid fa-trash fs-6 fw-bold fw-bolder"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7">No products found</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4">
        {{ $products->links() }}
    </div>
</div>
