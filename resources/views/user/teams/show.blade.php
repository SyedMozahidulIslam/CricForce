<!-- teams/show.blade.php -->

@extends('user.layouts.master')

@section('content')

<div class="container mt-5">
    <h1>{{ $team->name }}</h1>
    <div class="row">
        <div class="col-md-4">
            @if ($team->image)
                <img src="{{ asset('storage/' . $team->image) }}" class="img-fluid" alt="{{ $team->name }}">
            @else
                <img src="{{ asset('images/default-team-image.jpg') }}" class="img-fluid" alt="Default Team Image">
            @endif
        </div>
        <div class="col-md-8">
            <p>{{ $team->description }}</p>
            <!-- Add more details here as needed -->

            <h2>Players</h2>
            <div class="">
                @foreach ($team->players as $player)
                <div class="card mb-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            @if ($player->image)
                                <img src="{{ asset('storage/' . $player->image) }}" class="card-img" alt="{{ $player->name }}">
                            @else
                                <img src="{{ asset('images/default-player-image.jpg') }}" class="card-img" alt="Default Player Image">
                            @endif
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $player->name }}</h5>
                                <p class="card-text">{{ $player->type }}</p>
                                <p class="card-text">Age:{{ $player->age }}</p>
                                <a href="{{ route('players.show', ['player' => $player]) }}" class="btn btn-primary">View Player</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
