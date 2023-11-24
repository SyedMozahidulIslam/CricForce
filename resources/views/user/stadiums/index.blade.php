@extends('user.layouts.master')

@section('content')
<div class="container">
    <h1 class="mt-5">All Venues</h1>

    
    <div class="row">
        @foreach($stadiums as $stadium)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('storage/' . $stadium->picture1) }}" class="card-img-top" alt="{{ asset('storage/' . $stadium->picture1) }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $stadium->name }}</h5>
                    <p class="card-text">
                        <i class="fas fa-map-location-dot"> </i> {{ $stadium->location_city }}<br> <br>
                        {{ Str::limit($stadium->description, 100) }}
                    </p>
                </div>
                <div class="card-footer">
                    <a href="{{route('stadiums.show',$stadium )}}" class="btn btn-primary">Explore Stadium</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
