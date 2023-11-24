@extends('admin.layout.dashboard')

@section('content')

    <div class="container mt-5">
        <h1>Players</h1>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="row">
            @foreach($players as $player)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        @if ($player->image)
                            <img src="{{ asset('storage/' . $player->image) }}" class="card-img-top" alt="Player Image">
                        @else
                            <img src="{{ asset('storage/default-player-image.jpg') }}" class="card-img-top" alt="Default Image">
                        @endif
                        <div class="card-body">
                            <h4 class="card-title">{{ $player->name }}</h5>
                            <h6 class="card-title">{{ $player->team->name }}</h5>
                            <p class="card-text">
                                <strong>Type:</strong> {{ $player->type }}
                            </p>
                            <p class="card-text">
                                <strong>Description:</strong> {{ $player->description }}
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('players.edit', $player->id) }}" class="btn btn-primary">Edit</a>
                            <br>
                            <form action="{{ route('players.destroy', $player->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <a href="{{ route('players.create') }}" class="btn btn-success">Add New Player</a>
    </div>
@endsection
