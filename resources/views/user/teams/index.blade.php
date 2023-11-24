<!-- teams/allteams.blade.php -->

@extends('user.layouts.master')

@section('content')
<div class="container">
    <h1>All Teams</h1>
    <div class="row">
        @foreach ($teams as $team)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if ($team->image)
                        <img src="{{ asset('storage/' . $team->image) }}" class="card-img-top" alt="{{ asset('storage/' . $team->image) }}">
                    @else
                        <img src="{{ asset('images/default-team-image.jpg') }}" class="card-img-top" alt="Default Team Image">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $team->name }}</h5>
                        <p class="card-text">{{ $team->description }}</p>
                        <a href="{{ route('teams.show', $team) }}" class="btn btn-primary">View Team</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
