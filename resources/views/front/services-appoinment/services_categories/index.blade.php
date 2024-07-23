@extends('layouts.app')

@section('content')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    @include('livewire.admin.partial.preloader')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
            <div id="kt_app_toolbar_container" class="app-container container{{ general('layout') }} d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
                    <h1 class="page-heading d-flex text-{{ primary_color() }} fw-bold fs-3 flex-column justify-content-center my-0">
                        {{ $page_title ?? 'Categories' }}
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <div class="breadcrumb-item text-muted">
                            {{ __('total') }} {{ 'Categories'}}
                        </div>
                        <div class="breadcrumb-item">
                            <span class="bullet w-5px h-2px bg-gray-400"></span>
                        </div>
                        <div class="breadcrumb-item text-{{ primary_color() }}">
                            {{ $totalCategories }}
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
                        </div>
                        <div class="card-toolbar">
                            <a type="button" class="btn btn-light-{{ primary_color() }}" href="{{ route('services-category.create') }}">
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                    </svg>
                                </span>
                                Add Categories
                            </a>
                        </div>
                    </div>
                    <div class="card-body scroll-x pt-0">
                        <table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_HeroBanners_table">
                            <thead>
                                <tr>
                                    <th>S#</th>
                                    <th>Name</th>
                                    <th>Icon Image</th>
                                    <th>Parent Category</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $index=> $category)
                                <tr>
                                    <td>{{ $loop->iteration + ($categories->currentPage() - 1) * $categories->perPage() }}</td>

                                    <td>{{ $category->name }}</td>
                                    <td><img src="{{ asset('storage/'.$category->icon_image) }}" alt="{{ $category->name }}" width="50"></td>
                                    <td>{{ $category->parent ? $category->parent->name : 'None' }}</td>

                                    <td>
                                        <a href="{{  route('services-category.edit', $category->id) }}" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" {!! show_toltip('Update blog US') !!}>
                                            <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                                        </a>
                                        <form action="{{ route('services-category.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" {!! confirm() !!} class="btn btn-sm btn-icon btn-light btn-active-light-{{ primary_color() }}" data-bs-placement="top" title="Delete {{ Str::singular('Categories') }}" data-bs-toggle="tooltip">
                                                <i class="fa-solid fa-trash fs-6 fw-bold fw-bolder"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @foreach($category->subcategories as $subcategory)
                                <tr>
                                    <td>{{ $subcategory->id }}</td>
                                    <td>-- {{ $subcategory->name }}</td>
                                    <td><img src="{{ asset('storage/'.$subcategory->icon_image) }}" alt="{{ $subcategory->name }}" width="50"></td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="{{  route('services-category.edit', $subcategory->id) }}" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" {!! show_toltip('Update blog US') !!}>
                                            <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                                        </a>
                                        <form action="{{ route('services-category.destroy', $subcategory->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" {!! confirm() !!} class="btn btn-sm btn-icon btn-light btn-active-light-{{ primary_color() }}" data-bs-placement="top" title="Delete {{ Str::singular('Categories') }}" data-bs-toggle="tooltip">
                                                <i class="fa-solid fa-trash fs-6 fw-bold fw-bolder"></i></button>
                                        </form>
                                    </td>

                                </tr>
                                @endforeach
                                @endforeach
                            </tbody>
                        </table>

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
                            });
                        });

                    </script>
                    @endif
                    @if ($categories->hasPages())
                    <ul class="pagination justify-content-center">
                        {{-- Previous Page Link --}}
                        @if ($categories->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">&laquo;</span>
                        </li>
                        @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $categories->previousPageUrl() }}" rel="prev">&laquo;</a>
                        </li>
                        @endif

                        {{-- First Page Link --}}
                        <li class="page-item {{ ($categories->currentPage() == 1) ? 'active' : '' }}">
                            <a class="page-link" href="{{ $categories->url(1) }}">1</a>
                        </li>

                        {{-- Second Page Link --}}
                        @if($categories->lastPage() > 1)
                        <li class="page-item {{ ($categories->currentPage() == 2) ? 'active' : '' }}">
                            <a class="page-link" href="{{ $categories->url(2) }}">2</a>
                        </li>
                        @endif

                        {{-- Third Page Link --}}
                        @if($categories->lastPage() > 2)
                        <li class="page-item {{ ($categories->currentPage() == 3) ? 'active' : '' }}">
                            <a class="page-link" href="{{ $categories->url(3) }}">3</a>
                        </li>
                        @endif

                        {{-- Ellipsis --}}
                        @if ($categories->currentPage() > 4)
                        <li class="page-item disabled">
                            <span class="page-link">...</span>
                        </li>
                        @endif

                        {{-- Middle Page Links --}}
                        @for ($i = max(4, $categories->currentPage() - 1); $i <= min($categories->lastPage() - 1, $categories->currentPage() + 1); $i++)
                            <li class="page-item {{ ($i == $categories->currentPage()) ? 'active' : '' }}">
                                <a class="page-link" href="{{ $categories->url($i) }}">{{ $i }}</a>
                            </li>
                            @endfor

                            {{-- Ellipsis --}}
                            @if ($categories->currentPage() < $categories->lastPage() - 2)
                                <li class="page-item disabled">
                                    <span class="page-link">...</span>
                                </li>
                                @endif

                                {{-- Last Page Link --}}
                                @if ($categories->lastPage() > 3)
                                <li class="page-item {{ ($categories->currentPage() == $categories->lastPage()) ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $categories->url($categories->lastPage()) }}">{{ $categories->lastPage() }}</a>
                                </li>
                                @endif

                                {{-- Next Page Link --}}
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
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
