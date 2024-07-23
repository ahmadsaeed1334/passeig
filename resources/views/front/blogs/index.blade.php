@extends('layouts.app')

@section('content')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    @include('livewire.admin.partial.preloader')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
            <div id="kt_app_toolbar_container" class="app-container container{{ general('layout') }} d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
                    <h1 class="page-heading d-flex text-{{ primary_color() }} fw-bold fs-3 flex-column justify-content-center my-0">
                        {{ $page_title ?? 'Blogs' }}
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <div class="breadcrumb-item text-muted">
                            {{ __('total') }} {{ 'Blogs'}}
                        </div>
                        <div class="breadcrumb-item">
                            <span class="bullet w-5px h-2px bg-gray-400"></span>
                        </div>
                        <div class="breadcrumb-item text-{{ primary_color() }}">
                            {{ $totalBlogs }}
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
                            <a type="button" class="btn btn-light-{{ primary_color() }}" href="{{ route('blogs.create') }}">
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                    </svg>
                                </span>
                                Add Blog
                            </a>
                        </div>
                    </div>
                    <div class="card-body scroll-x pt-0">
                        <table class="table-bordered fs-6 gy-5 mb-0 table align-middle" id="kt_HeroBanners_table">
                            <thead>
                                <tr class="fw-bold fs-7 text-uppercase gs-0 text-{{ primary_color() }} text-start">
                                    <th class="min-w-10px">S#</th>
                                    <th class="min-w-10px">Title</th>
                                    <th class="min-w-10px">Long Description</th>
                                    <th class="min-w-100px ">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($blogTitles as $index => $blogTitle)
                                <tr>
                                    <td>{{ $loop->iteration + ($blogs->currentPage() - 1) * $blogs->perPage() }}</td>
                                    <td>{{ $blogTitle->title }}</td>
                                    <td>{{ \Illuminate\Support\Str::words(strip_tags($blogTitle->long_description), 25, '...') }}</td>
                                    <td>
                                        <a href="{{ route('blogs.editTitle', $blogTitle->id) }}" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3">
                                            <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4">No blog titles found</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_HeroBanners_table">
                            <thead>
                                <tr class="fw-bold fs-7 text-uppercase gs-0 text-{{ primary_color() }} text-start">
                                    <th class="min-w-10px">S#</th>
                                    <th class="min-w-10px">Image</th>
                                    <th class="min-w-10px">Title</th>
                                    <th class="min-w-10px">Description</th>
                                    <th class="min-w-10px">Categories</th>
                                    <th class="min-w-10px">Button</th>
                                    <th class="min-w-10px">Link</th>
                                    <th class="min-w-10px">Created By</th>
                                    <th class="min-w-100px ">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($blogs as $index => $blog)
                                <tr>
                                    <td>{{ $loop->iteration + ($blogs->currentPage() - 1) * $blogs->perPage() }}</td>
                                    <td class="">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50 overlay symbol-50px me-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50 overlay symbol-50px me-3">
                                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" style="width: 50px; height: 50px; border-radius: 50%;">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ \Illuminate\Support\Str::words(strip_tags($blog->description), 10, '...') }}</td>
                                    <td>{{ $blog->category ? $blog->category->name : 'No category' }}</td>
                                    <td>{{ $blog->button }}</td>
                                    <td>{{ $blog->link }}</td>
                                    <td><small>By {{ $blog->user->name }} on {{ $blog->created_at->format('d M Y') }}</small></td>
                                    <td>
                                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3">
                                            <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                                        </a>
                                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-icon btn-light btn-active-light-{{ primary_color() }}">
                                                <i class="fa-solid fa-trash fs-6 fw-bold fw-bolder"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="9">No blogs found</td>
                                </tr>
                                @endforelse
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
                            , });
                        });

                    </script>
                    @endif
                    @if ($blogs->hasPages())
                    <ul class="pagination justify-content-center">
                        {{-- Previous Page Link --}}
                        @if ($blogs->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">&laquo;</span>
                        </li>
                        @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $blogs->previousPageUrl() }}" rel="prev">&laquo;</a>
                        </li>
                        @endif

                        {{-- First Page Link --}}
                        <li class="page-item {{ ($blogs->currentPage() == 1) ? 'active' : '' }}">
                            <a class="page-link" href="{{ $blogs->url(1) }}">1</a>
                        </li>

                        {{-- Second Page Link --}}
                        @if($blogs->lastPage() > 1)
                        <li class="page-item {{ ($blogs->currentPage() == 2) ? 'active' : '' }}">
                            <a class="page-link" href="{{ $blogs->url(2) }}">2</a>
                        </li>
                        @endif

                        {{-- Third Page Link --}}
                        @if($blogs->lastPage() > 2)
                        <li class="page-item {{ ($blogs->currentPage() == 3) ? 'active' : '' }}">
                            <a class="page-link" href="{{ $blogs->url(3) }}">3</a>
                        </li>
                        @endif

                        {{-- Ellipsis --}}
                        @if ($blogs->currentPage() > 4)
                        <li class="page-item disabled">
                            <span class="page-link">...</span>
                        </li>
                        @endif

                        {{-- Middle Page Links --}}
                        @for ($i = max(4, $blogs->currentPage() - 1); $i <= min($blogs->lastPage() - 1, $blogs->currentPage() + 1); $i++)
                            <li class="page-item {{ ($i == $blogs->currentPage()) ? 'active' : '' }}">
                                <a class="page-link" href="{{ $blogs->url($i) }}">{{ $i }}</a>
                            </li>
                            @endfor

                            {{-- Ellipsis --}}
                            @if ($blogs->currentPage() < $blogs->lastPage() - 2)
                                <li class="page-item disabled">
                                    <span class="page-link">...</span>
                                </li>
                                @endif

                                {{-- Last Page Link --}}
                                @if ($blogs->lastPage() > 3)
                                <li class="page-item {{ ($blogs->currentPage() == $blogs->lastPage()) ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $blogs->url($blogs->lastPage()) }}">{{ $blogs->lastPage() }}</a>
                                </li>
                                @endif

                                {{-- Next Page Link --}}
                                @if ($blogs->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $blogs->nextPageUrl() }}" rel="next">&raquo;</a>
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
