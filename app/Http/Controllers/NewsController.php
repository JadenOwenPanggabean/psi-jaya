<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all()->sortByDesc('created_at');

        return view('news', compact('news'));
    }

    public function create()
    {
        return view('createnews');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required',
        ]);

        $slug = Str::slug($validatedData['title']);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $slug . time() . '.' . $image->extension();
            $path = $image->storeAs('img/news', $imageName, 'public');
        }

        News::create([
            'title' => $validatedData['title'],
            'user_id' => auth()->user()->id,
            'description' => $validatedData['description'],
            'image' => $path,
        ]);
        return redirect()->route('news');
    }
}
