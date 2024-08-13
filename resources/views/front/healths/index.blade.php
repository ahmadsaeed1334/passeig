@extends('layouts.app')

@section('content')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    @include('livewire.admin.partial.preloader')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
            <div id="kt_app_toolbar_container" class="app-container container{{ general('layout') }} d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
                    <h1 class="page-heading d-flex text-{{ primary_color() }} fw-bold fs-3 flex-column justify-content-center my-0">
                        {{ $page_title ?? 'Health Section' }}
                    </h1>
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
                            <a type="button" class="btn btn-light-{{ primary_color() }}" href="{{ route('healths.createHealth') }}">
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                    </svg>
                                </span>
                                Add Health
                            </a>
                        </div>
                    </div>

                    {{-- Health Title Section --}}
                    {{-- @if($healthTitle)
                    <div class="card-body">
                        <h2>{{ $healthTitle->title }}</h2>
                    <p>{{ $healthTitle->description }}</p>
                    <a href="{{ route('healths.editTitle', $healthTitle->id) }}" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3">
                        <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                        Edit Title
                    </a>
                </div>
                @else
                <div class="card-body">
                    <a href="{{ route('healths.createTitle') }}" class="btn btn-primary">Create Health Title</a>
                </div>
                @endif --}}


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
                            @if($healthTitle)
                            <tr>
                                <td>{{ $healthTitle->title }}</td>
                                <td>{!! \Illuminate\Support\Str::words(strip_tags( $healthTitle->description ), 25, '...') !!}</td>
                                <td>
                                    <a href="{{ route('healths.editTitle', $healthTitle->id) }}" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3">
                                        <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                                    </a>
                                </td>
                            </tr>
                            @else
                            <div class="card-body">
                                <a href="{{ route('healths.createTitle') }}" class="btn btn-primary">Create Expert Title</a>
                            </div>
                            @endif
                        </tbody>
                    </table>
                    {{-- Health Section --}}
                    <table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_HeroBanners_table">
                        <thead>
                            <tr class="fw-bold fs-7 text-uppercase gs-0 text-{{ primary_color() }} text-start">
                                <th class="min-w-10px">S#</th>
                                <th class="min-w-10px">Title</th>
                                <th class="min-w-10px">Description</th>
                                <th class="min-w-10px">Icon</th>
                                <th class="min-w-10px">Image</th>
                                <th class="min-w-100px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($healths as $index => $health)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $health->title }}</td>
                                <td>{!! \Illuminate\Support\Str::words(strip_tags($health->description), 10, '...') !!}</td>
                                {{-- <td>{{ $health->icon }}</td> --}}
                                <td class="">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-50 overlay symbol-50px me-3">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50 overlay symbol-50px me-3">
                                                    <img src="{{ asset('storage/' .$health->icon ) }}" alt="{{ $health->title }}" style="width: 50px; height: 50px; border-radius: 50%;">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </td>
                                {{-- <td>
                                    @if ($health->image)
                                    <img src="{{ asset('storage/' . $health->image) }}" alt="{{ $health->title }}" width="100">
                                @endif
                                </td> --}}
                                <td class="">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-50 overlay symbol-50px me-3">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50 overlay symbol-50px me-3">
                                                    <img src="{{ asset('storage/' . $health->image) }}" alt="{{ $health->title }}" style="width: 50px; height: 50px; border-radius: 50%;">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="{{ route('healths.editHealth', $health->id) }}" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3">
                                        <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                                    </a>
                                    <form action="{{ route('healths.destroyHealth', $health->id) }}" method="POST" style="display:inline-block;">
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
                @if ($healths->hasPages())
                <ul class="pagination justify-content-center">
                    {{-- Previous Page Link --}}
                    @if ($healths->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">&laquo;</span>
                    </li>
                    @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $healths->previousPageUrl() }}" rel="prev">&laquo;</a>
                    </li>
                    @endif

                    {{-- Pagination Links --}}
                    @for ($i = 1; $i <= $healths->lastPage(); $i++)
                        <li class="page-item {{ ($i == $healths->currentPage()) ? 'active' : '' }}">
                            <a class="page-link" href="{{ $healths->url($i) }}">{{ $i }}</a>
                        </li>
                        @endfor

                        {{-- Next Page Link --}}
                        @if ($healths->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $healths->nextPageUrl() }}" rel="next">&raquo;</a>
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
