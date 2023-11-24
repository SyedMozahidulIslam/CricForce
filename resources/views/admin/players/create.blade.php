@extends('admin.layout.dashboard')

@section('content')

<div class="container mt-5">
    <h2>Add New Player</h2>
    <form action="{{ route('players.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $player->name ?? '') }}" required>
        </div>
        

        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" id="age" class="form-control" value="{{ old('age', $player->age ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="team_id">Select Team:</label>
            <select name="team_id" id="team_id" class="form-control">
                @foreach($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="type">Type:</label>
            <select name="type" id="type" class="form-control">
                <option value="Bowler">Bowler</option>
                <option value="Batsman">Batsman</option>
                <option value="All Rounder">All Rounder</option>
            </select>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" name="image" id="image" class="form-control-file">
        </div>

        <button type="submit" class="btn btn-primary">Create Player</button>
    </form>
</div>
@endsection
