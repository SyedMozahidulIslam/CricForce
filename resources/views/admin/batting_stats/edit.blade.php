@extends('admin.layout.dashboard')

@section('content')
<div class="container mt-5">
    <h2>Edit Batting Statistics</h2>

    <form action="{{ route('batting_stats.update', $battingStat->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Edit form fields for batting statistics -->
        <div class="form-group">
            <label for="player_id">Player</label>
            <select name="player_id" id="player_id" class="form-control">
                @foreach($players as $player)
                    <option value="{{ $player->id }}" @if($player->id == $battingStat->player_id) selected @endif>{{ $player->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="format">Format</label>
            <select name="format" id="format" class="form-control">
                <option value="Test" @if($battingStat->format == 'Test') selected @endif>Test</option>
                <option value="ODI" @if($battingStat->format == 'ODI') selected @endif>ODI</option>
                <option value="T20I" @if($battingStat->format == 'T20I') selected @endif>T20I</option>
                <option value="IPL" @if($battingStat->format == 'IPL') selected @endif>IPL</option>
            </select>
        </div>

        <div class="form-group">
            <label for="matches">Matches</label>
            <input type="number" name="matches" id="matches" class="form-control" value="{{ old('matches', $battingStat->matches) }}">
        </div>

        <div class="form-group">
            <label for="runs">Runs</label>
            <input type="number" name="runs" id="runs" class="form-control" value="{{ old('runs', $battingStat->runs) }}">
        </div>

        <div class="form-group">
            <label for="highest_runs">Highest Runs</label>
            <input type="number" name="highest_runs" id="highest_runs" class="form-control" value="{{ old('highest_runs', $battingStat->highest_runs) }}">
        </div>

        <div class="form-group">
            <label for="hundreds">Centuries (100s)</label>
            <input type="number" name="hundreds" id="hundreds" class="form-control" value="{{ old('hundreds', $battingStat->hundreds) }}">
        </div>

        <div class="form-group">
            <label for="fifties">Half-Centuries (50s)</label>
            <input type="number" name="fifties" id="fifties" class="form-control" value="{{ old('fifties', $battingStat->fifties) }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Batting Statistics</button>
    </form>
</div>
@endsection
