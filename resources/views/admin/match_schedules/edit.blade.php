@extends('admin.layout.dashboard')

@section('content')
    <div class="container mt-5">
        <h2 mt-5>Edit Match Schedule</h2>

        <form action="{{ route('match_schedules.update', $matchSchedule) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Existing fields from the create form -->
            <div class="form-group">
                <label for="match_date">Match Date</label>
                <input type="date" name="match_date" id="match_date" class="form-control" value="{{ old('match_date', $matchSchedule->match_date) }}" required>
            </div>

            <div class="form-group">
                <label for="venue">Venue</label>
                <select name="venue_id" id="venue" class="form-control" required>
                    @foreach($stadiums as $stadium)
                        <option value="{{ $stadium->id }}"
                            {{ old('venue_id', $matchSchedule->venue_id) == $stadium->id ? 'selected' : '' }}>
                            {{ $stadium->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="team1">Team 1</label>
                <select name="team1_id" id="team1" class="form-control" required>
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}"
                            {{ old('team1_id', $matchSchedule->team1_id) == $team->id ? 'selected' : '' }}>
                            {{ $team->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="team2">Team 2</label>
                <select name="team2_id" id="team2" class="form-control" required>
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}"
                            {{ old('team2_id', $matchSchedule->team2_id) == $team->id ? 'selected' : '' }}>
                            {{ $team->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="match_type">Match Type</label>
                <select name="match_type" id="match_type" class="form-control" required>
                    <option value="playoff" {{ old('match_type', $matchSchedule->match_type) == 'playoff' ? 'selected' : '' }}>Playoff</option>
                    <option value="group" {{ old('match_type', $matchSchedule->match_type) == 'group' ? 'selected' : '' }}>Group</option>
                    <option value="semi" {{ old('match_type', $matchSchedule->match_type) == 'semi' ? 'selected' : '' }}>Semi</option>
                    <option value="quarter" {{ old('match_type', $matchSchedule->match_type) == 'quarter' ? 'selected' : '' }}>Quarter</option>
                    <option value="final" {{ old('match_type', $matchSchedule->match_type) == 'final' ? 'selected' : '' }}>Final</option>
                </select>
            </div>

            <!-- New fields -->
            <div class="form-group">
                <label for="won_team">Won Team</label>
                <select name="won_team_id" id="won_team" class="form-control">
                    <option value="">Select Won Team</option>
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}"
                            {{ old('won_team_id', $matchSchedule->won_team_id) == $team->id ? 'selected' : '' }}>
                            {{ $team->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="lost_team">Lost Team</label>
                <select name="lost_team_id" id="lost_team" class="form-control">
                    <option value="">Select Lost Team</option>
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}"
                            {{ old('lost_team_id', $matchSchedule->lost_team_id) == $team->id ? 'selected' : '' }}>
                            {{ $team->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="team1_runs">{{ $matchSchedule->team1->name }} Runs</label>
                <input type="number" name="team1_runs" id="team1_runs" class="form-control" value="{{ old('team1_runs', $matchSchedule->team1_runs) }}">
            </div>
            
            <div class="form-group">
                <label for="team1_overs_needed">{{ $matchSchedule->team1->name }} Overs Needed</label>
                <input type="number" name="team1_overs_needed" step="any" id="team1_overs_needed" class="form-control" value="{{ old('team1_overs_needed', $matchSchedule->team1_overs_needed) }}">
            </div>
            
            <div class="form-group">
                <label for="team2_runs">{{ $matchSchedule->team2->name }} Runs</label>
                <input type="number" name="team2_runs" id="team2_runs" class="form-control" value="{{ old('team2_runs', $matchSchedule->team2_runs) }}">
            </div>
            
            <div class="form-group">
                <label for="team2_overs_needed">{{ $matchSchedule->team2->name }} Overs Needed</label>
                <input type="number" name="team2_overs_needed" step="any" id="team2_overs_needed" class="form-control" value="{{ old('team2_overs_needed', $matchSchedule->team2_overs_needed) }}">
            </div>
            

            <button type="submit" class="btn btn-primary">Update Match Schedule</button>
        </form>
    </div>
@endsection
