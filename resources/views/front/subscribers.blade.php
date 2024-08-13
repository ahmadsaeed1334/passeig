
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Subscribers List</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Email</th>
                <th>Subscribed At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subscribers as $subscriber)
                <tr>
                    <td>{{ $subscriber->email }}</td>
                    <td>{{ $subscriber->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
