@extends('admin.layout.dashboard')

@section('content')
    <div class="container mt-5">
        <h1>News Articles</h1>
        <a href="{{ route('news.create') }}" class="btn btn-primary mb-3">Create News Article</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($news as $article)
                    <tr>
                        <td>{{ $article->title }}</td>
                        <td>
                            <img src="{{ asset($article->image) }}" alt="{{ $article->title }}" width="100">
                        </td>
                        <td>
                           
                            <a href="{{ route('news.edit', $article->id) }}" class="btn btn-success">Edit</a>
                            <form action="{{ route('news.destroy', $article->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this article?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
