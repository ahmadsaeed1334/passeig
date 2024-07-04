@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-5">Manage Footers</h1>
    <div class="text-end mb-3">
        {{-- <a href="{{ route('footer.create') }}" class="btn btn-primary">Add Footer</a> --}}
    </div>
    <div class="card shadow-sm mb-5">
        <div class="card-body">
            <table class="table table-hover table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Number</th>
                        <th>Address</th>
                        <th>Description</th>
                        <th>Icons</th>
                        <th>Working Hours</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($footers as $footer)
                        <tr>
                            <td>{{ $footer->number }}</td>
                            <td>{{ $footer->address }}</td>
                            <td>{{ \Illuminate\Support\Str::words(strip_tags($footer->description), 10, '...') }}</td>
                            <td>
                                @foreach(json_decode($footer->icons) as $icon)
                                    @if (strtolower($icon->icon) == 'facebook')
                                        <a href="{{ $icon->link }}" target="_blank" class="me-2"><i class="fab fa-facebook fa-lg"></i></a>
                                    @elseif (strtolower($icon->icon) == 'twitter')
                                        <a href="{{ $icon->link }}" target="_blank" class="me-2"><i class="fab fa-twitter fa-lg"></i></a>
                                    @elseif (strtolower($icon->icon) == 'instagram')
                                        <a href="{{ $icon->link }}" target="_blank" class="me-2"><i class="fab fa-instagram fa-lg"></i></a>
                                    @else
                                        <a href="{{ $icon->link }}" target="_blank" class="me-2">{{ ucfirst($icon->icon) }}</a>
                                    @endif
                                @endforeach
                            </td>
                            <td>{{ $footer->working_hours }}</td>
                            <td>
                                {{-- <a href="{{ route('footer.edit', $footer->id) }}" class="btn btn-warning btn-sm mb-2">Edit</a> --}}
                                <a href="{{ route('footer.edit', $footer->id) }}" class="btn btn-icon btn-light btn-active-light-{{ primary_color() }} btn-sm mr-3" {!! show_toltip('Update Footer') !!}>
                                    <i class="fa-solid fa-pen-to-square fs-6 fw-bold fw-bolder"></i>
                                </a>
                                {{-- <form action="{{ route('footer.destroy', $footer->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm mb-2">Delete</button>
                                </form> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@if (session('success'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('success') }}',
        });
    });
</script>
@endif
<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }
    .card {
        border-radius: 10px;
        overflow: hidden;
    }
    table {
        border-collapse: separate;
        border-spacing: 0;
    }
    th, td {
        text-align: center;
        vertical-align: middle;
    }
    th {
        background-color: #343a40;
        color: white;
    }
    td img {
        max-width: 50px;
        border-radius: 50%;
    }
    .btn-sm {
        margin-right: 5px;
    }
    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
    }
    .table-dark th {
        background-color: #212529;
        color: #fff;
    }
</style>
@endsection
