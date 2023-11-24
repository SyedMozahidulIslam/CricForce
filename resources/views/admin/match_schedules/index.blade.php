@extends('admin.layout.dashboard')

@section('content')

    <div class="container mt-5">
        <h2>Match Schedules</h2>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <a href="{{ route('match_schedules.create') }}" class="btn btn-primary mb-3">Create New Match Schedule</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Match Date</th>
                    <th>Venue</th>
                    <th>Team 1</th>
                    <th>Team 2</th>
                    <th>Match Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($matchSchedules as $matchSchedule)
                    <tr>
                        <td>{{ $matchSchedule->match_date }}</td>
                        <td>{{ $matchSchedule->venue->name }}</td>
                        <td>{{ $matchSchedule->team1->name }}</td>
                        <td>{{ $matchSchedule->team2->name }}</td>
                        <td>{{ $matchSchedule->match_type }}</td>
                        <td>
                            <a href="{{ route('match_schedules.show', $matchSchedule) }}" class="btn btn-info">View</a>
                            <a href="{{ route('match_schedules.edit', $matchSchedule) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('match_schedules.destroy', $matchSchedule) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
