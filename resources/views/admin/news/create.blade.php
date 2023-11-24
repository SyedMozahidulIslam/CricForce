@extends('admin.layout.dashboard')

@section('content')

    <div class="container mt-5">
        <h1>Create News Article</h1>
        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="story">Story</label>
                <textarea name="story" id="story" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="video_link">Video Link</label>
                <input type="text" name="vdo_link" id="video_link" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Create News Article</button>
        </form>
    </div>
@endsection
