@extends('admin.layout.dashboard')

@section('content')

<div class="container mt-5">
    <h2>Add Score</h2>

    <form action="{{ route('scores.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="player_id">Player</label>
            <select name="player_id" id="player_id" class="form-control">
                @foreach($players as $player)
                    <option value="{{ $player->id }}">{{ $player->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="match_id">Match</label>
            <select name="match_id" id="match_id" class="form-control">
                @foreach($matches as $match)
                    @php
                        $team1 = $match->team1->name;
                        $team2 = $match->team2->name;
                        $matchDate = date('d-m-y', strtotime($match->match_date));
                        $matchText = "$team1 - $team2 $matchDate";
                    @endphp
                    <option value="{{ $match->id }}">{{ $matchText }}</option>
                @endforeach
            </select>
        </div>

        <!-- Other input fields for score attributes -->
        <div class="form-group">
            <label for="runs">Runs</label>
            <input type="number" name="runs" id="runs" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="balls_played">Balls Played</label>
            <input type="number" name="balls_played" id="balls_played" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="wickets_got">Wickets Got</label>
            <input type="number" name="wickets_got" id="wickets_got" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="overs_bowled">Overs Bowled</label>
            <input type="number" name="overs_bowled" id="overs_bowled" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="fours">4s</label>
            <input type="number" name="fours" id="fours" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="sixes">6s</label>
            <input type="number" name="sixes" id="sixes" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="strike_rate">Strike Rate</label>
            <input type="number" step="any"  name="strike_rate" id="strike_rate" class="form-control" required>
        </div>
        <!-- End of input fields for score attributes -->

        <button type="submit" class="btn btn-primary">Create Score</button>
    </form>
</div>
@endsection
