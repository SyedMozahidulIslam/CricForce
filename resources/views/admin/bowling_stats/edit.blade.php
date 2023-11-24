@extends('admin.layout.dashboard')

@section('content')

<div class="container mt-5">
    <h2>Edit Bowling Stat</h2>

    <form action="{{ route('bowling_stats.update', $bowling_stat) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Edit form fields for Bowling Stat based on your model attributes -->
        <div class="form-group">
            <label for="player_id">Player</label>
            <select name="player_id" id="player_id" class="form-control">
                @foreach($players as $player)
                    <option value="{{ $player->id }}" {{ $player->id == $bowling_stat->player_id ? 'selected' : '' }}>
                        {{ $player->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="format">Format</label>
            <select name="format" id="format" class="form-control">
                <option value="Test" {{ $bowling_stat->format == 'Test' ? 'selected' : '' }}>Test</option>
                <option value="ODI" {{ $bowling_stat->format == 'ODI' ? 'selected' : '' }}>ODI</option>
                <option value="T20I" {{ $bowling_stat->format == 'T20I' ? 'selected' : '' }}>T20I</option>
                <option value="IPL" {{ $bowling_stat->format == 'IPL' ? 'selected' : '' }}>IPL</option>
            </select>
        </div>

        <div class="form-group">
            <label for="matches">Matches</label>
            <input type="number" name="matches" id="matches" class="form-control" value="{{ old('matches', $bowling_stat->matches) }}">
        </div>

        <div class="form-group">
            <label for="wickets">Wickets</label>
            <input type="number" name="wickets" id="wickets" class="form-control" value="{{ old('wickets', $bowling_stat->wickets) }}">
        </div>

        <div class="form-group">
            <label for="best">Best Bowling Figures</label>
            <input type="text" name="best" id="best" class="form-control" value="{{ old('best', $bowling_stat->best) }}">
        </div>

        <!-- Add more form fields for other Bowling Stat attributes -->

        <button type="submit" class="btn btn-primary">Update Bowling Stat</button>
    </form>
</div>

@endsection
