@extends('admin.layout.dashboard')

@section('content')

    <h2 class="mt-5">Add Bowling Stats</h2>

    <form action="{{ route('bowling_stats.store') }}" method="POST">
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
            <label for="format">Format</label>
            <select name="format" id="format" class="form-control">
                <option value="Test">Test</option>
                <option value="ODI">ODI</option>
                <option value="T20I">T20I</option>
                <option value="IPL">IPL</option>
            </select>
        </div>

        <div class="form-group">
            <label for="matches">Matches</label>
            <input type="number" name="matches" id="matches" class="form-control" value="{{ old('matches') }}">
        </div>

        <div class="form-group">
            <label for="wickets">Wickets</label>
            <input type="number" name="wickets" id="wickets" class="form-control" value="{{ old('wickets') }}">
        </div>

        <div class="form-group">
            <label for="best">Best</label>
            <input type="text" name="best" id="best" class="form-control" value="{{ old('best') }}">
        </div>

        <button type="submit" class="btn btn-primary">Create Bowling Stats</button>
    </form>
@endsection
