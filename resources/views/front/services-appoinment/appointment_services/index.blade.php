@extends('layouts.app')

@section('content')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    @include('livewire.admin.partial.preloader')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
            <div id="kt_app_toolbar_container" class="app-container container{{ general('layout') }} d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
                    <h1 class="page-heading d-flex text-{{ primary_color() }} fw-bold fs-3 flex-column justify-content-center my-0">
                        {{ $page_title ?? 'services' }}
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <div class="breadcrumb-item text-muted">
                            {{ __('total') }} {{ 'Services'}}
                        </div>
                        <div class="breadcrumb-item">
                            <span class="bullet w-5px h-2px bg-gray-400"></span>
                        </div>
                        <div class="breadcrumb-item text-{{ primary_color() }}">
                            {{ $totalServices}}
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
                            <a type="button" class="btn btn-light-{{ primary_color() }}" href="{{ route('appointment-services.create') }}">
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                    </svg>
                                </span>
                                Add services
                            </a>
                        </div>
                    </div>
                    <div class="card-body scroll-x pt-0">
                        <table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_HeroBanners_table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Service Name</th>
                                    <th>Duration</th>
                                    <th>Amount</th>
                                    <th>Category</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $service)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $service->service_name }}</td>
                                    <td>{{ $service->duration }} minutes</td>
                                    <td>${{ $service->amount }}</td>
                                    <td>{{ $service->serviceCategory->name }}</td>
                                    <td>
                                        <a href="{{  route('appointment-services.edit', $service->id)}}" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" {!! show_toltip('Update blog US') !!}>
                                            <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                                        </a>
                                        <form action="{{ route('appointment-services.destroy', $service->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" {!! confirm() !!} class="btn btn-sm btn-icon btn-light btn-active-light-{{ primary_color() }}" data-bs-placement="top" title="Delete {{ Str::singular('services') }}" data-bs-toggle="tooltip">
                                                <i class="fa-solid fa-trash fs-6 fw-bold fw-bolder"></i></button>
                                        </form>
                                    </td>

                                </tr>
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
                    @if ($services->hasPages())
                    <ul class="pagination justify-content-center">
                        {{-- Previous Page Link --}}
                        @if ($services->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">&laquo;</span>
                        </li>
                        @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $services->previousPageUrl() }}" rel="prev">&laquo;</a>
                        </li>
                        @endif

                        {{-- First Page Link --}}
                        <li class="page-item {{ ($services->currentPage() == 1) ? 'active' : '' }}">
                            <a class="page-link" href="{{ $services->url(1) }}">1</a>
                        </li>

                        {{-- Second Page Link --}}
                        @if($services->lastPage() > 1)
                        <li class="page-item {{ ($services->currentPage() == 2) ? 'active' : '' }}">
                            <a class="page-link" href="{{ $services->url(2) }}">2</a>
                        </li>
                        @endif

                        {{-- Third Page Link --}}
                        @if($services->lastPage() > 2)
                        <li class="page-item {{ ($services->currentPage() == 3) ? 'active' : '' }}">
                            <a class="page-link" href="{{ $services->url(3) }}">3</a>
                        </li>
                        @endif

                        {{-- Ellipsis --}}
                        @if ($services->currentPage() > 4)
                        <li class="page-item disabled">
                            <span class="page-link">...</span>
                        </li>
                        @endif

                        {{-- Middle Page Links --}}
                        @for ($i = max(4, $services->currentPage() - 1); $i <= min($services->lastPage() - 1, $services->currentPage() + 1); $i++)
                            <li class="page-item {{ ($i == $services->currentPage()) ? 'active' : '' }}">
                                <a class="page-link" href="{{ $services->url($i) }}">{{ $i }}</a>
                            </li>
                            @endfor

                            {{-- Ellipsis --}}
                            @if ($services->currentPage() < $services->lastPage() - 2)
                                <li class="page-item disabled">
                                    <span class="page-link">...</span>
                                </li>
                                @endif

                                {{-- Last Page Link --}}
                                @if ($services->lastPage() > 3)
                                <li class="page-item {{ ($services->currentPage() == $services->lastPage()) ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $services->url($services->lastPage()) }}">{{ $services->lastPage() }}</a>
                                </li>
                                @endif

                                {{-- Next Page Link --}}
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
