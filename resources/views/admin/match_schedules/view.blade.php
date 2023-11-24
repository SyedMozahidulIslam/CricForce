@extends('user.layouts.master')

@section('content')

<div class="container mt-5">
    <div class="text-center mt-4">
        <!-- Teams' images and names -->
        <div class="d-flex align-items-center justify-content-center">
            <div>
                <img src="{{ asset('storage/' . $matchSchedule->team1->image) }}" alt="{{ $matchSchedule->team1->name }}" class="img-thumbnail" style="max-height: 100px;">
                <h3>{{ $matchSchedule->team1->name }}</h3>
            </div>
            <div class="mx-4"><h1>vs</h1></div>
            <div>
                <img src="{{ asset('storage/' . $matchSchedule->team2->image) }}" alt="{{ $matchSchedule->team2->name }}" class="img-thumbnail" style="max-height: 100px;">
                <h3>{{ $matchSchedule->team2->name }}</h3>
            </div>
        </div>

        <!-- Date and Time -->
        <h5 class="mt-4">{{ $matchSchedule->match_date }}</h5>
        <h5>{{ $matchSchedule->match_time }}</h5>

        <!-- Venue -->
        <h5 class="mt-4">{{ $matchSchedule->venue->name }}</h5>
    </div>

    <hr>

    <!-- Scores and Winner -->
    <div class="text-center mt-4">
        <h4>Match Result</h4>
        <h5>{{ $matchSchedule->team1->name }}: {{ $matchSchedule->team1_runs }}/{{ $matchSchedule->team1_overs_needed }}</h5>
        <h5>{{ $matchSchedule->team2->name }}: {{ $matchSchedule->team2_runs }}/{{ $matchSchedule->team2_overs_needed }}</h5>

        @if ($matchSchedule->won_team_id)
            <h3 class="mt-4">{{ $matchSchedule->won_team->name }} won the match!</h3>
        @else
            <h3 class="mt-4">Match ended in a draw.</h3>
        @endif
    </div>
</div>
@endsection
