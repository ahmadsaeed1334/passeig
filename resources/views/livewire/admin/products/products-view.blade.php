<div class="card-body scroll-x pt-0">
    {{-- <div id="editor">
        <p>This is some sample content.</p>
    </div> --}}
    @livewire('admin.products.product-titles')
    <table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_HeroBanners_table">
      <thead>
        <tr class="fw-bold fs-7 text-uppercase gs-0 text-{{ primary_color() }} text-start">
          <th class="min-w-10px">S#</th>
          <th class="min-w-10px">Image</th>
          <th class="min-w-10px">Name</th>
          <th class="min-w-10px">Description</th>
          <th class="min-w-10px">Short Description</th>
          <th class="min-w-10px">Category</th>
          <th class="min-w-100px text-end">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($products  as $product)
                  <tr>
            <td> {{$loop->index + 1 }}</td>
            <td class="">
                <div class="d-flex align-items-center">
                    <div class="symbol symbol-50 overlay symbol-50px me-3">
                        <!-- Display Image as Avatar -->
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 50px; height: 50px; border-radius: 50%;">
                        <!-- Display Video Thumbnail or Icon -->
                    </div>
                </div>
            </td>
            <td>{{ $product->name }}</td>
                        {{-- <td>{{ $product->description }}</td> --}}
                        <td>{!! nl2br(strip_tags(\Illuminate\Support\Str::limit($product->description, 120))) !!}</td>
                        {{-- <td>{{ $product->short_description }}</td> --}}
                        <td>{!! nl2br(strip_tags(\Illuminate\Support\Str::limit($product->short_description, 120))) !!}</td>

                        @if ($product->categorie)
                        <td>{{ $product->categorie->name }}</td>
                    @else
                        <td>No Category</td>
                    @endif
            {{-- <td>{{ $banner->file }}</td>
             --}}

            <td class="text-end">
                <button wire:click="editRedirect('{{ $product->id }}')" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" {!! show_toltip('Update Product') !!}>
                    <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                </button>
                <a wire:click.prevent="delete('{{ $product->id }}')" {!! confirm() !!} href="#" class=" btn btn-sm btn-icon btn-active-light-danger w-30px h-30px me-2 mt-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete {{ Str::singular($page_title ?? 'Product') }}">
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
