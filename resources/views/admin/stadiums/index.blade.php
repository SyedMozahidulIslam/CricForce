@extends('admin.layout.dashboard')

@section('content')
    <div class="container mt-5">
        <h1>Stadiums</h1>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <a href="{{ route('stadiums.create') }}" class="btn btn-primary mb-3">Create Stadium</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Location City</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stadiums as $stadium)
                    <tr>
                        <td>{{ $stadium->name }}</td>
                        <td>{{ $stadium->location }}</td>
                        <td>{{ $stadium->location_city }}</td>
                        <td>
                            <a href="{{ route('stadiums.edit', $stadium->id) }}" class="btn btn-primary">Edit</a>
                            <!-- Add a delete button if needed -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
