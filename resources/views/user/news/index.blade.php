@extends('user.layouts.master')

@section('content')
<div class="container mt-5">
    <h2>News Articles</h2>
    <div class="row">
        @foreach($news as $article)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if ($article->image)
                        <img src="{{ asset($article->image) }}" class="card-img-top" alt="{{ $article->title }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">{{ Str::limit($article->story, 100) }}</p>
                        <a href="{{ route('news.show', $article->id) }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
