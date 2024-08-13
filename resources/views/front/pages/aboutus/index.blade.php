@extends('layouts.app')

@section('content')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    @include('livewire.admin.partial.preloader')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-lg-6 py-3">
            <div id="kt_app_toolbar_container" class="app-container container{{ general('layout') }} d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
                    <h1 wire:click.prevent="$dispatch('refresh')" class="page-heading d-flex text-{{ primary_color() }} fw-bold fs-3 flex-column justify-content-center pointer my-0">
                        {{ $page_title ?? 'About Us' }}
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <div class="breadcrumb-item text-muted">
                            {{-- {{ __('total') }} {{ 'About Us'}} --}}
                        </div>
                        <div class="breadcrumb-item">
                            <span class="bullet w-5px h-2px bg-gray-400"></span>
                        </div>
                        <div class="breadcrumb-item text-{{ primary_color() }}">
                            {{-- {{ count($aboutus) }} --}}
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container{{ general('layout') }}">
                <div class="card card-flush">

                    <div class="card-body scroll-x pt-0">
                        <table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_HeroBanners_table">
                            <thead>
                                <tr class="fw-bold fs-7 text-uppercase gs-0 text-{{ primary_color() }} text-start">
                                    <th class="min-w-10px">Title</th>
                                    <th class="min-w-10px">Short Description</th>
                                    <th class="min-w-10px">Image</th>
                                    <th class="min-w-10px">Description</th>
                                    <th class="min-w-100px ">Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($abouts as $about)
                                <tr>
                                    <td>{{ $about->title }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($about->short_description, 50) }}</td>

                                    <td>
                                        @if ($about->image)
                                        <img src="{{ asset('storage/' . $about->image) }}" alt="{{ $about->title }}" width="100">
                                        @endif
                                    </td>
                                    {{-- <td>{{ \Illuminate\Support\Str::words(strip_tags($about->short_description), 10, '...') }}</td> --}}
                                    {{-- <td>
                            @if ($about->image)
                            <img src="{{ asset('storage/' . $about->image) }}" alt="{{ $about->title }}" width="100">
                                    @endif
                                    </td> --}}
                                    {{-- <td>{{ \Illuminate\Support\Str::limit($about->long_description, 100) }}</td> --}}
                                    <td>{!! \Illuminate\Support\Str::words(strip_tags($about->long_description), 15, '...') !!}</td>

                                    <td>
                                        <a href="{{ route('aboutus.edit', $about->id) }}" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" {!! show_toltip('Update About US') !!}>
                                            <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                                        </a>
                                        {{-- <form action="{{ route('aboutus.destroy', $about->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" {!! confirm() !!} class="btn btn-sm btn-icon btn-light btn-active-light-{{ primary_color() }}" data-bs-placement="top" title="Delete {{ Str::singular('About US') }}" data-bs-toggle="tooltip">
                                            <i class="fa-solid fa-trash fs-6 fw-bold fw-bolder"></i></button>
                                        </form> --}}
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
