@extends('admin.layout.dashboard')

@section('content')

    <div class="container mt-5">
        <h1>Edit News Article</h1>

        <form method="POST" action="{{ route('news.update', $article->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $article->title }}" required>
            </div>

            <div class="form-group">
                <label for="story">Story</label>
                <textarea name="story" id="story" class="form-control" required>{{ $article->story }}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control-file">
            </div>

            <div class="form-group">
                <label for="vdo_link">Video Link</label>
                <input type="text" name="vdo_link" id="video_link" class="form-control" value="{{ $article->video_link }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Article</button>
        </form>
    </div>
@endsection
