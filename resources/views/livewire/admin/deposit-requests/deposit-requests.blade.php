{{-- <div>
    <x-slot name="page_title">
        {{ $page_title ?? 'Deposit Request' }}
    </x-slot>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <h3>Pending Deposit Requests</h3>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>User</th>
                <th>Amount</th>
                <th>File</th>
                <th>Comment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($requests as $request)
                <tr>
                    <td>{{ $request->user->name }}</td>
                    <td>{{ $request->amount }}</td>
                    <td><a href="{{ Storage::url($request->file_path) }}" target="_blank">View File</a></td>
                    <td>{{ $request->comment }}</td>
                    <td>
                        <button wire:click="approve({{ $request->id }})" class="btn btn-success btn-sm">Approve</button>
                        <button wire:click="reject({{ $request->id }})" class="btn btn-danger btn-sm">Reject</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> --}}


<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    @include('livewire.admin.partial.preloader')
    <div class="d-flex flex-column flex-column-fluid">
        <x-slot name="page_title">
            {{ $page_title ?? 'Deposit Request' }}
        </x-slot>
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container{{ general('layout') }} d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
                    <!--begin::Title-->
                    <h1 wire:click.prevent="$dispatch('refresh')" class="page-heading d-flex text-{{ primary_color() }} fw-bold fs-3 flex-column justify-content-center pointer my-0">
                        {{-- {{ $page_title }} --}}

                        {{ $page_title?? 'Deposit Request' }}
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
						<div class="breadcrumb-item text-muted">
							{{ __('total') }} {{ 'Deposit Request'}}
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="breadcrumb-item">
							<span class="bullet w-5px h-2px bg-gray-400"></span>
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="breadcrumb-item text-{{ primary_color() }}">
							{{ count($requests) }}
						</div>
						<!--end::Item-->
					</ul>
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Card header-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container{{ general('layout') }}">
                <!--begin::View-->
                <div class="card card-flush">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>S#</th>
                                <th>User</th>
                                <th>Amount</th>
                                <th>File</th>
                                <th>Comment</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($requests as $request)
                                <tr>
                                    <td>{{ $loop->index + 1}}</td>
                                    <td>{{ $request->user->name }}</td>
                                    <td>{{ $request->amount }}</td>
                                    <td><a href="{{ Storage::url($request->file_path) }}" target="_blank">View File</a></td>
                                    <td>{{ $request->comment }}</td>
                                    <td>
                                        <button wire:click="approve({{ $request->id }})" class="btn btn-success btn-sm">Approve</button>
                                        <button wire:click="reject({{ $request->id }})" class="btn btn-danger btn-sm">Reject</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $requests->links() }}
                    <!--end::View-->
                </div>
                <div id="kt_app_content" class="app-content flex-column-fluid">
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container container{{ general('layout') }}">
                       


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>