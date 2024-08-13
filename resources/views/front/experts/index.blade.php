@extends('layouts.app')

@section('content')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    @include('livewire.admin.partial.preloader')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
            <div id="kt_app_toolbar_container" class="app-container container{{ general('layout') }} d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
                    <h1 class="page-heading d-flex text-{{ primary_color() }} fw-bold fs-3 flex-column justify-content-center my-0">
                        {{ $page_title ?? 'Experts' }}
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <div class="breadcrumb-item text-muted">
                            {{ __('total') }} {{ 'Experts'}}
                        </div>
                        <div class="breadcrumb-item">
                            <span class="bullet w-5px h-2px bg-gray-400"></span>
                        </div>
                        <div class="breadcrumb-item text-{{ primary_color() }}">
                            {{ $totalExperts }}
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
                            <a type="button" class="btn btn-light-{{ primary_color() }}" href="{{ route('experts.createExpert') }}">
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                    </svg>
                                </span>
                                Add Expert
                            </a>
                        </div>
                    </div>

                    {{-- Expert Title Section --}}
                    {{-- @if($expertTitle)
                    <div class="card-body">
                        <h2>{{ $expertTitle->title }}</h2>
                    <p>{{ $expertTitle->description }}</p>
                    <a href="{{ route('experts.editTitle', $expertTitle->id) }}" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3">
                        <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                        Edit Title
                    </a>
                </div>
                @else
                <div class="card-body">
                    <a href="{{ route('experts.createTitle') }}" class="btn btn-primary">Create Expert Title</a>
                </div>
                @endif --}}

                {{-- Experts Section --}}
                <div class="card-body scroll-x pt-0">
                    <table class="table-bordered fs-6 gy-5 mb-0 table align-middle" id="kt_HeroBanners_table">
                        <thead>
                            <tr class="fw-bold fs-7 text-uppercase gs-0 text-{{ primary_color() }} text-start">
                                <th class="min-w-10px">Title</th>
                                <th class="min-w-10px">Description</th>
                                <th class="min-w-100px ">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($expertTitle)
                            <tr>
                                <td>{{ $expertTitle->title }}</td>
                                <td>{!! \Illuminate\Support\Str::words(strip_tags( $expertTitle->description ), 25, '...') !!}</td>
                                <td>
                                    <a href="{{ route('experts.editTitle', $expertTitle->id) }}" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3">
                                        <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                                    </a>
                                </td>
                            </tr>
                            @else
                            <div class="card-body">
                                <a href="{{ route('experts.createTitle') }}" class="btn btn-primary">Create Expert Title</a>
                            </div>
                            @endif
                        </tbody>
                    </table>
                    <table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_HeroBanners_table">
                        <thead>
                            <tr class="fw-bold fs-7 text-uppercase gs-0 text-{{ primary_color() }} text-start">
                                <th class="min-w-10px">S#</th>
                                <th class="min-w-10px">Name</th>
                                <th class="min-w-10px">Title</th>
                                <th class="min-w-10px">Image</th>
                                <th class="min-w-100px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($experts as $index => $expert)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $expert->name }}</td>
                                <td>{{ $expert->title }}</td>
                                <td>
                                    @if ($expert->image)
                                    <img src="{{ asset('storage/' . $expert->image) }}" alt="{{ $expert->name }}" width="100">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('experts.editExpert', $expert->id) }}" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3">
                                        <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                                    </a>
                                    <form action="{{ route('experts.destroyExpert', $expert->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-icon btn-light btn-active-light-{{ primary_color() }}">
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

                {{-- Pagination --}}
                @if ($experts->hasPages())
                <ul class="pagination justify-content-center">
                    {{-- Previous Page Link --}}
                    @if ($experts->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">&laquo;</span>
                    </li>
                    @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $experts->previousPageUrl() }}" rel="prev">&laquo;</a>
                    </li>
                    @endif

                    {{-- Pagination Links --}}
                    @for ($i = 1; $i <= $experts->lastPage(); $i++)
                        <li class="page-item {{ ($i == $experts->currentPage()) ? 'active' : '' }}">
                            <a class="page-link" href="{{ $experts->url($i) }}">{{ $i }}</a>
                        </li>
                        @endfor

                        {{-- Next Page Link --}}
                        @if ($experts->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $experts->nextPageUrl() }}" rel="next">&raquo;</a>
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
