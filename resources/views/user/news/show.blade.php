@extends('user.layouts.master')

@section('content')
    <div class="container mt-5 text-center">
        <div class="card" style="width: 70%;">
            @if ($article->image)
                <img src="{{ asset($article->image) }}" width="300" height="400" class="card-img-top"
                    alt="{{ $article->title }}">
                    
            @endif
            <div class="card-body">
                <h2>{{ $article->title }}</h2>
                <br>
                <p>{{ $article->story }}</p>
                @if ($article->vdo_link) {{-- Correct variable name --}}
                    <div class="mt-3">
                      <br>
                        <div class="mt-3">
                            <h4>Related Video:</h4>
                            {!! $article->vdo_link !!} {{-- Correct column name --}}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
