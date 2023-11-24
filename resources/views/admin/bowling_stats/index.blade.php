@extends('admin.layout.dashboard')

@section('content')

    <h2 class="mt-5">Bowling Stats</h2>
    <a href="{{ route('bowling_stats.create') }}" class="btn btn-primary">Add Bowling Stats</a>

    <table class="table">
        <thead>
            <tr>
                <th>Player</th>
                <th>Format</th>
                <th>Matches</th>
                <th>Wickets</th>
                <th>Best</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bowlingStats as $bowlingStat)
                <tr>
                    <td>{{ $bowlingStat->player->name }}</td>
                    <td>{{ $bowlingStat->format }}</td>
                    <td>{{ $bowlingStat->matches }}</td>
                    <td>{{ $bowlingStat->wickets }}</td>
                    <td>{{ $bowlingStat->best }}</td>
                    <td>

                     
                    
                        <a href="{{ route('bowling_stats.edit', $bowlingStat->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('bowling_stats.destroy', $bowlingStat->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                      
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
