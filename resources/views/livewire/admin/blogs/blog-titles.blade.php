{{-- <div class="container mt-5"> --}}
    {{-- <h2 class="text-center">Manage blog Titles</h2> --}}
    <div>
        {{-- <button class="btn btn-primary" wire:click="create">Add blog Title</button> --}}
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($blogTitles as $blogTitle)
                    <tr>
                        <td>{{ $blogTitle->title }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($blogTitle->long_description, 200) }}</td>
                        <td>
                            {{-- <button wire:click="edit({{ $blogTitle->id }})" class="btn btn-warning">Edit</button> --}}
                            <button wire:click="edit({{ $blogTitle->id }})" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" {!! show_toltip('Update blog Title') !!}>
                                <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                            </button>
                            {{-- <button wire:click="delete({{ $blogTitle->id }})" class="btn btn-danger">Delete</button> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- {{ $blogTitles->links() }} --}}

        @if($isOpen)
            <div class="modal show d-block" style="background: rgba(0,0,0,0.5);">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{ $blogTitleId ? 'Edit blog Title' : 'Create blog Title' }}</h5>
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
