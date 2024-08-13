@extends('layouts.app')

@section('content')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    @include('livewire.admin.partial.preloader')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container{{ general('layout') }}">
                <div class="card card-flush">
                    <div class="card-header mt-6">
                        <div class="card-title">
                        </div>
                        <div class="card-toolbar">
                            <a type="button" class="btn btn-light-{{ primary_color() }}" href="{{ route('rev_slider.create') }}">
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
                                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                    </svg>
                                </span>
                                Add Slider
                            </a>
                        </div>
                    </div>
                    <div class="card-body scroll-x pt-0">
                        <table class="table-row-dashed fs-6 gy-5 mb-0 table align-middle" id="kt_RevSlider_table">
                            <thead>
                                <tr class="fw-bold fs-7 text-uppercase gs-0 text-{{ primary_color() }} text-start">
                                    <th class="min-w-10px">Title</th>
                                    <th class="min-w-10px">Image</th>
                                    <th class="min-w-10px">Description</th>
                                    <th class="min-w-100px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sliders as $slider)
                                <tr>
                                    <td>{{ $slider->title }}</td>
                                    {{-- <td>
                                        @if ($slider->image)
                                        <img src="{{ asset('storage/' . $slider->image) }}" alt="{{ $slider->title }}" width="100">
                                    @endif
                                    </td> --}}
                                    <td class="">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50 overlay symbol-50px me-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50 overlay symbol-50px me-3">
                                                        <img src="{{ asset('storage/' . $slider->image) }}" alt="{{ $slider->title }}" style="width: 50px; height: 50px; border-radius: 50%;">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td>{!! \Illuminate\Support\Str::words(strip_tags($slider->description), 15, '...') !!}</td>
                                    <td>
                                        <a href="{{ route('rev_slider.edit', $slider->id) }}" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3">
                                            <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                                        </a>
                                        <form action="{{ route('rev_slider.destroy', $slider->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-icon btn-light btn-active-light-{{ primary_color() }}" data-bs-placement="top" title="Delete {{ Str::singular('Slider') }}" data-bs-toggle="tooltip">
                                                <i class="fa-solid fa-trash fs-6 fw-bold fw-bolder"></i>
                                            </button>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
