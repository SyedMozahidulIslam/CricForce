@extends('admin.layout.dashboard')

@section('content')
    <div class="container mt-5">
        <h2>Scores</h2>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <!-- Add a link to create a new score record -->
        <a href="{{ route('scores.create') }}" class="btn btn-primary">Add New Score Data</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Player</th>
                    <th>Match</th>
                    <th>Runs</th>
                    <th>Balls Played</th>
                    <th>Wickets Got</th>
                    <th>Overs Bowled</th>
                    <th>4s</th>
                    <th>6s</th>
                    <th>Strike Rate</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($scores as $score)
                    <tr>
                        <td>{{ $score->id }}</td>
                        <td>{{ $score->player->name }}</td>
                        <td>{{ $score->match->match_date }}</td>
                        <td>{{ $score->runs }}</td>
                        <td>{{ $score->balls_played }}</td>
                        <td>{{ $score->wickets_got }}</td>
                        <td>{{ $score->overs_bowled }}</td>
                        <td>{{ $score['fours'] }}</td>
                        <td>{{ $score['sixes'] }}</td>
                        <td>{{ $score->strike_rate }}</td>
                        <td>
                            <!-- Add buttons for editing and deleting a score -->
                            <a href="{{ route('scores.edit', $score) }}" class="btn btn-primary">Edit</a>
                            <!-- Add a delete form or button here -->

                            <form action="{{ route('scores.destroy', $score->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
