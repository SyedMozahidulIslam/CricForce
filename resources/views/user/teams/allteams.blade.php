@extends('user.layouts.master')

@section('content')
<div class="container">
    <h1>View Players of Teams</h1>
    
    @foreach ($teams as $team)
    <a href="{{ route('teams.show', $team) }}">
    <div class="card m-2">
        <div class="card-body">
            <div class="media">
                <img src="{{ asset('storage/' . $team->image) }}" class="mr-3" alt="{{ $team->name }} Image" width="80">
                <div class="media-body">
                    <h5 class="card-title">{{ $team->name }} Players</h5>
                </div>
            </div>
        </div>
    </div>
</a>
    @endforeach
</div>
@endsection
