@extends('user.layouts.master')

@section('content')
<div class="container mt-5">
    <h1>Team Schedule</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Date</th>
                <th>Venue</th>
                <th>Opponent</th>
                <th>Match Type</th>
                <th>Result</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teamSchedule as $schedule)
            <tr>
                <td>{{ $schedule->match_date }}</td>
                <td>{{ $schedule->venue->name }}</td>
                <td>
                    @if ($schedule->team1_id == $teamId)
                        {{ $schedule->team2->name }}
                    @else
                        {{ $schedule->team1->name }}
                    @endif
                </td>
                <td>{{ $schedule->match_type }}</td>
                <td>
                    @if ($schedule->won_team_id)
                        {{ $schedule->wonTeam->name }} won
                    @else
                        Match not played yet
                    @endif
                </td>

                <td>
                    <a href="{{route('match_schedules.show', $schedule)}}" class="btn btn-info">View Details</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
