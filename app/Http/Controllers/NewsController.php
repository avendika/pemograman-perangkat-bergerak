<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $newsList = News::all();
        return view('news.index', compact('newsList'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048'
        ]);

        $news = new News();
        $news->title = $request->title;
        $news->description = $request->description;
        $news->link = $request->link;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('news', 'public');
            $news->image = $path;
        }

        $news->save();
        return redirect()->route('news.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('news.show', compact('news'));
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048'
        ]);

        $news = News::findOrFail($id);
        $news->title = $request->title;
        $news->description = $request->description;
        $news->link = $request->link;

        if ($request->hasFile('image')) {
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }
            $path = $request->file('image')->store('news', 'public');
            $news->image = $path;
        }

        $news->save();
        return redirect()->route('news.index')->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);

        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }

        $news->delete();
        return redirect()->route('news.index')->with('success', 'Berita berhasil dihapus!');
    }

    public function recent()
    {
        $newsList = News::all();
        return view('recent', compact('newsList'));
    }
    public function dasboard()
    {
        $newsList = News::all();
        return view('dasboard', compact('newsList'));
    }
}



