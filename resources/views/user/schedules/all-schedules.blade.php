@extends('user.layouts.master')

@section('content')
    <div class="container mt-5">
        <h2>Tournament Match Schedules</h2>

        <!-- Filter match schedules based on match type and display them in separate tables -->
        @foreach(['playoff', 'group', 'quarter', 'semi', 'final'] as $matchType)
            @php
                $filteredSchedules = $matchSchedules->where('match_type', $matchType);
            @endphp

            @if ($filteredSchedules->isNotEmpty())
                <h3>{{ ucfirst($matchType) }} Schedules:</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Match Date</th>
                            <th>Venue</th>
                            <th>Team 1</th>
                            <th>Team 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($filteredSchedules as $matchSchedule)
                            <tr>
                                <td>{{ $matchSchedule->match_date }}</td>
                                <td>{{ $matchSchedule->venue->name }}</td>
                                <td>{{ $matchSchedule->team1->name }}</td>
                                <td>{{ $matchSchedule->team2->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        @endforeach
    </div>
@endsection
