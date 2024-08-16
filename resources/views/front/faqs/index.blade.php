@extends('layouts.app')

@section('content')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    @include('livewire.admin.partial.preloader')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
            <div id="kt_app_toolbar_container" class="app-container container{{ general('layout') }} d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
                    <h1 wire:click.prevent="$dispatch('refresh')" class="page-heading d-flex text-{{ primary_color() }} fw-bold fs-3 flex-column justify-content-center pointer my-0">
                        {{ $page_title ?? 'FAQS' }}
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <div class="breadcrumb-item text-muted">
                            {{ __('total') }} {{ 'FAQS'}}
                        </div>
                        <div class="breadcrumb-item">
                            <span class="bullet w-5px h-2px bg-gray-400"></span>
                        </div>
                        <div class="breadcrumb-item text-{{ primary_color() }}">
                            {{ count($faqs) }}
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
                            <div class="d-flex align-items-center position-relative me-5 my-1">
                                <span class="svg-icon svg-icon-1 position-absolute ms-6 text-{{ primary_color() }}">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <input wire:model.debounce.500ms="search" type="text" data-kt-Users-table-filter="search" class="form-control form-control-solid w-250px ps-15 text-{{ primary_color() }} fst-italic" placeholder="Search {{ Str::singular($page_title ?? ' faq') }} by id or name" />
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <a type="button" class="btn btn-light-{{ primary_color() }}" href="{{ route('faqs.create') }}">
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                    </svg>
                                </span>
                                Add Faqs
                            </a>
                        </div>
                    </div>
                    <div class="card-body scroll-x pt-0">
                        <table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_HeroBanners_table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($faqs as $index => $faq)
                                <tr>
                                    {{-- <td>{{ $faq->id }}</td> --}}
                                    <td>{{ $loop->iteration + ($faqs->currentPage() - 1) * $faqs->perPage() }}</td>
                                    <td>{{ $faq->question }}</td>
                                    {{-- <td>{{ $faq->answer }}</td> --}}
                                    <td>{{ \Illuminate\Support\Str::words(strip_tags($faq->answer), 10, '...') }}</td>

                                    <td>

                                        <a href="{{ route('faqs.edit', $faq->id) }}" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" {!! show_toltip('Update faq') !!}>
                                            <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                                        </a>
                                        <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" {!! confirm() !!} class="btn btn-sm btn-icon btn-light btn-active-light-{{ primary_color() }}" data-bs-placement="top" title="Delete {{ Str::singular('faq') }}" data-bs-toggle="tooltip">
                                                <i class="fa-solid fa-trash fs-6 fw-bold fw-bolder"></i></button>
                                        </form>

                                    </td>


                                </tr>
                                @endforeach
                            </tbody>
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
                    @if ($faqs->hasPages())
                    <ul class="pagination justify-content-center">
                        {{-- Previous Page Link --}}
                        @if ($faqs->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">&laquo;</span>
                        </li>
                        @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $faqs->previousPageUrl() }}" rel="prev">&laquo;</a>
                        </li>
                        @endif

                        {{-- First Page Link --}}
                        <li class="page-item {{ ($faqs->currentPage() == 1) ? 'active' : '' }}">
                            <a class="page-link" href="{{ $faqs->url(1) }}">1</a>
                        </li>

                        {{-- Second Page Link --}}
                        @if($faqs->lastPage() > 1)
                        <li class="page-item {{ ($faqs->currentPage() == 2) ? 'active' : '' }}">
                            <a class="page-link" href="{{ $faqs->url(2) }}">2</a>
                        </li>
                        @endif

                        {{-- Third Page Link --}}
                        @if($faqs->lastPage() > 2)
                        <li class="page-item {{ ($faqs->currentPage() == 3) ? 'active' : '' }}">
                            <a class="page-link" href="{{ $faqs->url(3) }}">3</a>
                        </li>
                        @endif

                        {{-- Ellipsis --}}
                        @if ($faqs->currentPage() > 4)
                        <li class="page-item disabled">
                            <span class="page-link">...</span>
                        </li>
                        @endif

                        {{-- Middle Page Links --}}
                        @for ($i = max(4, $faqs->currentPage() - 1); $i <= min($faqs->lastPage() - 1, $faqs->currentPage() + 1); $i++)
                            <li class="page-item {{ ($i == $faqs->currentPage()) ? 'active' : '' }}">
                                <a class="page-link" href="{{ $faqs->url($i) }}">{{ $i }}</a>
                            </li>
                            @endfor

                            {{-- Ellipsis --}}
                            @if ($faqs->currentPage() < $faqs->lastPage() - 2)
                                <li class="page-item disabled">
                                    <span class="page-link">...</span>
                                </li>
                                @endif

                                {{-- Last Page Link --}}
                                @if ($faqs->lastPage() > 3)
                                <li class="page-item {{ ($faqs->currentPage() == $faqs->lastPage()) ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $faqs->url($faqs->lastPage()) }}">{{ $faqs->lastPage() }}</a>
                                </li>
                                @endif

                                {{-- Next Page Link --}}
                                @if ($faqs->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $faqs->nextPageUrl() }}" rel="next">&raquo;</a>
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
