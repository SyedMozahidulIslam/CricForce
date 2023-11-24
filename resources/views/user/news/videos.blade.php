@extends('user.layouts.master')

@section('content')
    <div class="container mt-5">
        <h2>All Videos</h2>
        <ul>
            @foreach($videos as $video)
                <li>
                    <h3>{{ $video->title }}</h3>
                    <div class="mt-3">
                        {!! $video->vdo_link !!}
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
