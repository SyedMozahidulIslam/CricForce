@extends('admin.layout.dashboard')

@section('content')

    <h1 class="mt-5">All Batting Stats</h1>

    <a href="{{ route('batting_stats.create') }}" class="btn btn-primary">Add Batting Stat</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Player</th>
                <th>Format</th>
                <th>Matches</th>
                <th>Runs</th>
                <th>Highest Runs</th>
                <th>100s</th>
                <th>50s</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($battingStats as $battingStat)
                <tr>
                    <td>{{ $battingStat->id }}</td>
                    <td>{{ $battingStat->player->name }}</td>
                    <td>{{ $battingStat->format }}</td>
                    <td>{{ $battingStat->matches }}</td>
                    <td>{{ $battingStat->runs }}</td>
                    <td>{{ $battingStat->highest_runs }}</td>
                    <td>{{ $battingStat->hundreds }}</td>
                    <td>{{ $battingStat->fifties }}</td>
                    <td>
                        <a href="{{ route('batting_stats.edit', $battingStat->id) }}" class="btn btn-primary">Edit</a>
                        <!-- Add delete button or link here -->

                        <a href="{{ route('batting_stats.destroy', $battingStat->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
