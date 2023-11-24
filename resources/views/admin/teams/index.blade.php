@extends('admin.layout.dashboard')

@section('content')
    <div class="container mt-5">
        <h1>Teams</h1>
        <a class="btn btn-primary mb-2" href="{{ route('teams.create') }}">Create Team</a>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teams as $team)
                    <tr>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->description }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('teams.edit', $team) }}">Edit</a>
                            <form method="post" action="{{ route('teams.destroy', $team) }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
