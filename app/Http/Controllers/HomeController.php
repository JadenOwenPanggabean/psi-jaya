<?php

namespace App\Http\Controllers;
use App\Models\Homestays;
use App\Models\HomestaysImage;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $homestay = Homestays::get();
        return view('index', compact('homestay'));
    }
}
