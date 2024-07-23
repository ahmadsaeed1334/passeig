{{-- @extends('layouts.app')

@section('content')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    @include('livewire.admin.partial.preloader')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
            <div id="kt_app_toolbar_container" class="app-container container{{ general('layout') }} d-flex flex-stack">
<div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
    <h1 class="page-heading d-flex  fw-bold fs-3 flex-column justify-content-center my-0">
        {{ $page_title ?? 'Products' }}
    </h1>
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
        <div class="breadcrumb-item text-muted">
            {{ __('total') }} {{ 'Products'}}
        </div>
        <div class="breadcrumb-item">
            <span class="bullet w-5px h-2px bg-gray-400"></span>
        </div>
        <div class="breadcrumb-item ">
            {{ $totalProducts }}
        </div>
    </ul>
</div>
</div>
</div>
<div id="kt_app_content" class="app-content flex-column-fluid">
    <div id="kt_app_content_container" class="app-container container{{ general('layout') }}">
        <div class="card card-flush">
            <div class="card-header mt-6">
                <div class="card-title">
                    @livewire('admin.product-search.product-search')
                </div>
                <div class="card-toolbar">
                    <a type="button" class="btn btn-light-primary" href="{{ route('products.create') }}">
                        <span class="svg-icon svg-icon-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                            </svg>
                        </span>
                        Add Products
                    </a>
                </div>
            </div>
            <div class="card-body scroll-x pt-0">
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

            @if (session('success'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'success'
                        , title: 'Success'
                        , text: '{{ session('
                        success ') }}'
                    });
                });

            </script>
            @endif

        </div>
    </div>
</div>
</div>
</div>
@endsection --}}



@extends('layouts.app')

@section('content')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    @include('livewire.admin.partial.preloader')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
            <div id="kt_app_toolbar_container" class="app-container container{{ general('layout') }} d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
                    <h1 class="page-heading d-flex text-{{ primary_color() }} fw-bold fs-3 flex-column justify-content-center my-0">
                        {{ $page_title ?? 'Products' }}
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <div class="breadcrumb-item text-muted">
                            {{ __('total') }} {{ 'Products'}}
                        </div>
                        <div class="breadcrumb-item">
                            <span class="bullet w-5px h-2px bg-gray-400"></span>
                        </div>
                        <div class="breadcrumb-item text-{{ primary_color() }}">
                            {{ $totalProducts }}
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container{{ general('layout') }}">
                <div class="card card-flush">
                    <div class="card-header mt-6">
                        <div class="card-title">
                            {{-- <div class="d-flex align-items-center position-relative me-5 my-1">
                                <span class="svg-icon svg-icon-1 position-absolute ms-6 text-{{ primary_color() }}">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                            </svg>
                            </span>
                            <input wire:model.live="search" type="text" data-kt-Users-table-filter="search" class="form-control form-control-solid w-250px ps-15 text-{{ primary_color() }} fst-italic" placeholder="Search {{ Str::singular($page_title ?? ' Product') }} by user name or Product name" />
                        </div> --}}
                    </div>
                    <div class="card-toolbar">
                        <a type="button" class="btn btn-light-{{ primary_color() }}" href="{{ route('products.create') }}">
                            <span class="svg-icon svg-icon-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                    <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                    <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                </svg>
                            </span>
                            Add Products
                        </a>
                    </div>
                </div>
                <div class="card-body scroll-x pt-0">
                    <table class="table-bordered fs-6 gy-5 mb-0 table align-middle" id="kt_HeroBanners_table">
                        <thead>
                            <tr class="fw-bold fs-7 text-uppercase gs-0 text-{{ primary_color() }} text-start">
                                <th class="min-w-10px">Title</th>
                                <th class="min-w-10px">Long Description</th>
                                <th class="min-w-100px ">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($productTitles as $index => $productTitle)
                            <tr>
                                <td>{{ $productTitle->title }}</td>
                                <td>{{ \Illuminate\Support\Str::words(strip_tags($productTitle->long_description), 25, '...') }}</td>
                                <td>
                                    <a href="{{ route('products.editTitle', $productTitle->id) }}" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3">
                                        <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4">No Product titles found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_HeroBanners_table">
                        <thead>
                            <tr class="fw-bold fs-7 text-uppercase gs-0 text-{{ primary_color() }} text-start">
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
                            @forelse($products as $index => $product) <tr>
                                <td>{{ $loop->iteration + ($products->currentPage() - 1) * $products->perPage() }}</td>


                                <td>{{ $product->name  }}</td>
                                <td>{{ \Illuminate\Support\Str::words(strip_tags($product->description), 10, '...') }}</td>
                                <td>{{ \Illuminate\Support\Str::words(strip_tags($product->short_description), 10, '...') }}</td>
                                <td>{{$product->categorie->name }}</td>
                                <td class="">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-50 overlay symbol-50px me-3">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50 overlay symbol-50px me-3">
                                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 50px; height: 50px; border-radius: 50%;">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3">
                                        <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                                    </a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-icon btn-light btn-active-light-{{ primary_color() }}">
                                            <i class="fa-solid fa-trash fs-6 fw-bold fw-bolder"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            {!! no_data() !!}
                            @endforelse
                        </tbody>
                    </table>
                    {{ $products->links() }}

                </div>
                {{-- SweetAlert --}}
                @if (session('success'))
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'success'
                            , title: 'Success'
                            , text: '{{ session('
                            success ') }}'
                        , });
                    });

                </script>
                @endif

            </div>
        </div>
    </div>
</div>
</div>
@endsection
