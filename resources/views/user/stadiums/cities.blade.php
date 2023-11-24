
@extends('user.layouts.master')

@section('content')
    <div class="container mt-5">
        <h2>All Visiting Cities</h2>
        <ul>
            @foreach($cities as $city)
            <div class="card m-2">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="card-title">{{ $city}}</h5>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </ul>
    </div>
@endsection
