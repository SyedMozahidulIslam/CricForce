<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //

    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->get();

        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('news.index')
            ->with('success', 'News article deleted successfully.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'story' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed

        ]);

        $data = $request->all();

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('news_images'), $imageName);
            $data['image'] = 'news_images/' . $imageName;
        }

        News::create($data);

        return redirect()->route('news.index')
            ->with('success', 'News article created successfully.');
    }

    public function edit($id)
    {
        $article = News::findOrFail($id);
        return view('admin.news.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = News::findOrFail($id);

        // Validate the form data
        $this->validate($request, [
            'title' => 'required',
            'story' => 'required',

        ]);

        // Update the news article
        $article->title = $request->input('title');
        $article->story = $request->input('story');

        // Check if a new image has been uploaded
        if ($request->hasFile('image')) {
            // Handle image upload and update the image path
            $imagePath = $request->file('image')->store('news_images', 'public');
            $article->image = 'storage/' . $imagePath;
        }

        // Check if a new video link has been provided
        if ($request->has('vdo_link')) {
            $article->vdo_link = $request->input('vdo_link');
        }

        $article->save();

        return redirect()->route('news.index')
            ->with('success', 'News article updated successfully.');
    }

    public function usersIndex()
    {
        $news = News::orderBy('created_at', 'desc')->get(); // Fetch all news articles

        return view('user.news.index', compact('news'));
    }

    public function allVideos()
    {
        $videos = News::whereNotNull('vdo_link')->get(['id', 'title', 'vdo_link']);

        return view('user.news.videos', compact('videos'));
    }

    public function show($id)
    {
        $article = News::findOrFail($id);
        return view('user.news.show', compact('article'));
    }

}
