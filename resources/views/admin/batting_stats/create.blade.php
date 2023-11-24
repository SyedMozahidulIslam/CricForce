@extends('admin.layout.dashboard')

@section('content')


    <h1 class="mt-5">Add Batting Stat</h1>

    <form action="{{ route('batting_stats.store') }}" method="POST">
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
                <option value="Test" @if(old('format') === 'Test') selected @endif>Test</option>
                <option value="ODI" @if(old('format') === 'ODI') selected @endif>ODI</option>
                <option value="T20I" @if(old('format') === 'T20I') selected @endif>T20I</option>
                <option value="IPL" @if(old('format') === 'IPL') selected @endif>IPL</option>
            </select>
        </div>
        <div class="form-group">
            <label for="matches">Matches</label>
            <input type="number" name="matches" id="matches" class="form-control" value="{{ old('matches') }}">
        </div>

        <div class="form-group">
            <label for="runs">Runs</label>
            <input type="number" name="runs" id="runs" class="form-control" value="{{ old('runs') }}">
        </div>

        <div class="form-group">
            <label for="highest_runs">Highest Runs</label>
            <input type="number" name="highest_runs" id="highest_runs" class="form-control" value="{{ old('highest_runs') }}">
        </div>

        <div class="form-group">
            <label for="hundreds">100s</label>
            <input type="number" name="hundreds" id="hundreds" class="form-control" value="{{ old('hundreds') }}">
        </div>

        <div class="form-group">
            <label for="fifties">50s</label>
            <input type="number" name="fifties" id="fifties" class="form-control" value="{{ old('fifties') }}">
        </div>

        <button type="submit" class="btn btn-primary">Create Batting Stat</button>
    </form>
@endsection
