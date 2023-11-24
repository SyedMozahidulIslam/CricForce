@extends('user.layouts.master')

@section('content')
    <div class="container text-center">
        <h1 class="mt-4">Explore Stadium</h1>

        <div class="card my-4">
            <div class="card-header">
                <h2>{{ $stadium->name }}</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('storage/' . $stadium->picture1) }}" alt="{{ $stadium->name }}" class="img-fluid mb-3">
                        <img src="{{ asset('storage/' . $stadium->picture2) }}" alt="{{ $stadium->name }}" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <p><i class="fas fa-map-marker-alt"></i> {{ $stadium->location_city }}</p>
                        <p><strong>Description:</strong> {{ $stadium->description }}</p>
                        <p><strong>Location:</strong></p>
                        {!! $stadium->location_link !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
