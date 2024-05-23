<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        return view('news');
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
        ]);

        if ($request->hasFile('image')) {
            $path = $image->storeAs('img/news/' . $slug, $key . '.jpg', 'public');
        }

        News::create([
            'title' => $validatedData['name'],
            'description' => $validatedData['description'],
            'image' => $path,
        ]);
        return redirect()->route('homestay', $slug);
    }
}
