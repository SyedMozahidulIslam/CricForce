@extends('user.layouts.master')

@section('content')
    <div class="container mt-5">
        <h1>Player Profile</h1>

        <div class="card mb-4">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('storage/' . $player->image) }}" alt="{{ $player->name }}" class="img-fluid" />
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2>{{ $player->name }}</h2>
                        <p>Age: {{ $player->age }}</p>
                        <p>Type: {{ $player->type }}</p>
                        <p>Description: {{ $player->description }}</p>
                    </div>
                </div>
            </div>
        </div>

        <h2>Batting Stats</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Format</th>
                        <th>Matches</th>
                        <th>Runs</th>
                        <th>High Score</th>
                        <th>100s</th>
                        <th>50s</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($battingStats as $stat)
                        <tr>
                            <td>{{ $stat->format }}</td>
                            <td>{{ $stat->matches }}</td>
                            <td>{{ $stat->runs }}</td>
                            <td>{{ $stat->highest_runs }}</td>
                            <td>{{ $stat->hundreds }}</td>
                            <td>{{ $stat->fifties }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <h2>Bowling Stats</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Format</th>
                        <th>Matches</th>
                        <th>Wickets</th>
                        <th>Best Bowling</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bowlingStats as $stat)
                        <tr>
                            <td>{{ $stat->format }}</td>
                            <td>{{ $stat->matches }}</td>
                            <td>{{ $stat->wickets }}</td>
                            <td>{{ $stat->best }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <h2>Recent Scores</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Match</th>
                        <th>Runs</th>
                        <th>Wickets</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($scores as $score)
                        <tr>
                            <td>{{ $score->match->match_date }}</td>
                            @if ($score->runs > 0)
                                <td>{{ $score->runs }} / {{ $score->balls_played }}</td>
                            @else
                                <td>N/A</td>
                            @endif
                            @if ($score->overs_bowled > 0)
                                <td>{{ $score->wickets_got }} / {{ $score->overs_bowled }}</td>
                            @else
                                <td>N/A</td>
                            @endif

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
