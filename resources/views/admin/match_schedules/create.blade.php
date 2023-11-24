@extends('admin.layout.dashboard')

@section('content')

    <div class="container mt-5">
        <h2>Create Match Schedule</h2>

        <form action="{{ route('match_schedules.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="match_date">Match Date</label>
                <input type="date" name="match_date" id="match_date" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="venue">Venue</label>
                <select name="venue_id" id="venue" class="form-control" required>
                    @foreach($stadiums as $stadium)
                        <option value="{{ $stadium->id }}">{{ $stadium->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="team1">Team 1</label>
                <select name="team1_id" id="team1" class="form-control" required>
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="team2">Team 2</label>
                <select name="team2_id" id="team2" class="form-control" required>
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="match_type">Match Type</label>
                <select name="match_type" id="match_type" class="form-control" required>
                    <option value="playoff">Playoff</option>
                    <option value="group">Group</option>
                    <option value="semi">Semi</option>
                    <option value="quarter">Quarter</option>
                    <option value="final">Final</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Create Match Schedule</button>
        </form>
    </div>
@endsection
