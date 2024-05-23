<?php

namespace App\Http\Controllers;

use App\Models\Homestays;
use App\Models\HomestaysImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomestayController extends Controller
{
    public function index($title_slug)
    {
        $homestay = Homestays::where('slug', $title_slug)->firstOrFail();
        $homestay_images = HomestaysImage::where('homestays_id', $homestay->id)->get();
        $user_no_hp = $homestay->user->no_hp;
        return view('homestay', compact('homestay', 'homestay_images', 'user_no_hp'));
    }

    public function create()
    {
        return view('createhomestay');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'feature' => 'required|string',
            'roomsize' => 'required|string',
            'occupancy' => 'required|string',
            'view' => 'required|string',
            'smoking' => 'required|string',
            'bedsize' => 'required|string',
            'location' => 'required|string',
            'roomservice' => 'required|string',
            'swimmingpool' => 'required|string',
        ]);

        $slug = Str::slug($validatedData['name']);

        $homestay = Homestays::create([
            'name' => $validatedData['name'],
            'user_id' => auth()->user()->id,
            'slug' => $slug,
            'description' => $validatedData['description'],
            'features' => $validatedData['feature'],
            'room_size' => $validatedData['roomsize'],
            'occupancy' => $validatedData['occupancy'],
            'view' => $validatedData['view'],
            'smoking' => $validatedData['smoking'],
            'bed_size' => $validatedData['bedsize'],
            'location' => $validatedData['location'],
            'room_service' => $validatedData['roomservice'],
            'swimming_pool' => $validatedData['swimmingpool'],
        ]);

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $key => $image) {
                $path = $image->storeAs('img/homestay/' . $slug, $key . '.' . $image->extension(), 'public');
                HomestaysImage::create([
                    'homestays_id' => $homestay->id,
                    'image_location' => $path,
                ]);
            }
        }

        return redirect()->route('homestay', $slug);
    }


    public function delete($id)
    {
        $homestay = Homestays::where('id', $id)->firstOrFail();
        $homestay->delete();
        return redirect()->route('home');
    }

    public function available($id)
    {
        $homestay = Homestays::where('id', $id)->firstOrFail();
        if ($homestay->available === 'true') {
            $homestay->available = 'false';
        } else {
            $homestay->available = 'true';
        }
        $homestay->save();
        return redirect()->route('homestay', $homestay->slug);
    }

}
