@extends('layouts.app')

@section('content')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    @include('livewire.admin.partial.preloader')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
            <div id="kt_app_toolbar_container" class="app-container container{{ general('layout') }} d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
                    <h1 wire:click.prevent="$dispatch('refresh')" class="page-heading d-flex text-{{ primary_color() }} fw-bold fs-3 flex-column justify-content-center pointer my-0">
                        {{ $page_title ?? 'Services' }}
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <div class="breadcrumb-item text-muted">
                            {{ __('total') }} {{ 'Services'}}
                        </div>
                        <div class="breadcrumb-item">
                            <span class="bullet w-5px h-2px bg-gray-400"></span>
                        </div>
                        <div class="breadcrumb-item text-{{ primary_color() }}">
                            {{ $totalServices }}
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
                                <input wire:model.debounce.500ms="search" type="text" data-kt-Users-table-filter="search" class="form-control form-control-solid w-250px ps-15 text-{{ primary_color() }} fst-italic" placeholder="Search {{ Str::singular($page_title ?? ' Services') }} by id or name" />
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <a type="button" class="btn btn-light-{{ primary_color() }}" href="{{ route('our-services.create') }}">
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                    </svg>
                                </span>
                                Add Services
                            </a>
                        </div>
                    </div>
                    <div class="card-body scroll-x pt-0">
                        <table class="table-bordered fs-6 gy-5 mb-0 table align-middle" id="kt_HeroBanners_table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($servicesTitles as $servicesTitle)
                                <tr>
                                    <td>{{ $servicesTitle->title }}</td>
                                    <td>{!! \Illuminate\Support\Str::words(strip_tags($servicesTitle->long_description), 23, '...') !!}</td>
                                    <td>
                                        <a href="{{ route('our-services.titleedit', $servicesTitle->id) }}" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" {!! show_toltip('Update Services') !!}>
                                            <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_HeroBanners_table">
                            <thead>
                                <tr>
                                    <th>SNO</th>
                                    <th>Title</th>
                                    <th>Short Description</th>
                                    <th>Image</th>
                                    <th>Long Description</th>
                                    <th>Price</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $index => $service)
                                <tr>
                                    <td>{{ $loop->iteration + ($services->currentPage() - 1) * $services->perPage() }}</td>
                                    <td>{{ $service->title }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($service->short_description, 50) }}</td>
                                    <td>
                                        @if ($service->image)
                                        <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" width="100">
                                        @endif
                                    </td>
                                    <td>{!! \Illuminate\Support\Str::words(strip_tags($service->long_description), 10, '...') !!}</td>
                                    <td>{{ $service->price }}</td>
                                    <td>
                                        <a href="{{ route('our-services.edit', $service->id) }}" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" {!! show_toltip('Update Services') !!}>
                                            <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                                        </a>
                                        <form action="{{ route('our-services.destroy', $service->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" {!! confirm() !!} class="btn btn-sm btn-icon btn-light btn-active-light-{{ primary_color() }}" data-bs-placement="top" title="Delete {{ Str::singular('Services') }}" data-bs-toggle="tooltip">
                                                <i class="fa-solid fa-trash fs-6 fw-bold fw-bolder"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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
                    @if ($services->hasPages())
                    <ul class="pagination justify-content-center">
                        @if ($services->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">&laquo;</span>
                        </li>
                        @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $services->previousPageUrl() }}" rel="prev">&laquo;</a>
                        </li>
                        @endif

                        @for ($i = 1; $i <= $services->lastPage(); $i++)
                            <li class="page-item {{ ($services->currentPage() == $i) ? 'active' : '' }}">
                                <a class="page-link" href="{{ $services->url($i) }}">{{ $i }}</a>
                            </li>
                            @endfor

                            @if ($services->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $services->nextPageUrl() }}" rel="next">&raquo;</a>
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
