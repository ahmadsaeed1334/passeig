{{-- <div class="container mt-5"> --}}
    {{-- <h2 class="text-center">Manage Product Titles</h2> --}}
    {{-- <button class="btn btn-primary" wire:click="create">Add Product Title</button> --}}
    <div>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productTitles as $productTitle)
                <tr>
                    <td>{{ $productTitle->title }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($productTitle->long_description, 200) }}</td>
                    <td>
                        {{-- <button wire:click="edit({{ $productTitle->id }})" class="btn btn-warning">Edit</button> --}}
                        <button wire:click="edit({{ $productTitle->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" {!! show_toltip('Update Product Title') !!}>
                            <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                        </button>
                        {{-- <button wire:click="delete({{ $productTitle->id }})" class="btn btn-danger">Delete</button> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $productTitles->links() }}

    @if($isOpen)
        <div class="modal show d-block" style="background: rgba(0,0,0,0.5);">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ $productTitleId ? 'Edit Product Title' : 'Create Product Title' }}</h5>
                        <button type="button" class="close" wire:click="closeModal">×</button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="title" class="mb-2 required">Title</label>
                                <input type="text" class="form-control" id="title" wire:model="title">
                                @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="long_description " class="mb-2 required mt-2">Long Description</label>
                                <textarea class="form-control" id="long_description" cols="20" rows="5" wire:model="long_description"></textarea>
                                @error('long_description') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mt-3" wire:click.prevent="store">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
