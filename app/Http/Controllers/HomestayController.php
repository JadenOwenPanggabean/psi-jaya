<?php

namespace App\Http\Controllers;

use App\Models\Homestays;
use App\Models\HomestaysImage;
use Illuminate\Http\Request;

class HomestayController extends Controller
{
    public function index($title_slug)
    {
        $homestay = Homestays::where('slug', $title_slug)->firstOrFail();
        $homestay_images = HomestaysImage::where('homestays_id', $homestay->id)->get();
        return view('homestay', compact('homestay', 'homestay_images'));
    }
}
