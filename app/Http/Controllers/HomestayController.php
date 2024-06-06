<?php

namespace App\Http\Controllers;

use App\Models\Homestays;
use App\Models\HomestaysImage;
use App\Models\Order;
use App\Models\User;
use DateTime;
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
            'price' => 'required|integer',
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
            'price' => $validatedData['price'],
            'available' => 'true',
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

        return redirect()->route('homestay', $slug)->with('success', 'Data Atribut Berhasil Ditambahkan.');;
    }

    public function edit($id)
    {
        $homestay = Homestays::findOrFail($id);
        return view('edithomestay', compact('homestay'));
    }

    public function update(Request $request, string $id)
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
        'price' => 'required|integer',
    ]);

    $homestay = Homestays::findOrFail($id);
    $homestay->update($validatedData);

    return redirect()->route('homestay', $homestay->slug)->with('success', 'Data Atribut Berhasil Ditambahkan.');
}


    public function delete($id)
    {
        $homestay = Homestays::where('id', $id)->firstOrFail();
        $homestay->delete();
        return redirect()->route('home')->with('success', 'Data Atribut Berhasil Dihapus.');
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

    public function addorder(Request $request, $slug)
    {
        $homestay = Homestays::where('slug', $slug)->first(); 
        $price = $homestay->price; 
        $start = new DateTime($request->check_in_date);
        $end = new DateTime($request->check_out_date);
        $interval = $start->diff($end);
        $days = $interval->format('%a');

        Order::create([
            'user_id' => auth()->user()->id,
            'homestays_id' => $request->homestay_id,
            'check_in_date' => $request->check_in_date,
            'check_out_date' => $request->check_out_date,
            'people_count' => $request->people_count, 
            'total' => $request->people_count * intval($price) * $days,
            'status' => "Belum Verifikasi",
        ]);

        return redirect(url('https://api.whatsapp.com/send/?phone='. $homestay->user->no_hp));
    }

    public function updateAvailable(Request $request, $id)
    {
        $statuspesan = Homestays::find($id);
        if (!$statuspesan) {
            return response()->json(['message' => 'Data Kontrak Tidak Ditemukan'], 404);
        }

        $statuspesan->status = 'false';
        $statuspesan->save();

        return redirect()->route('home')->with('success', 'Data Atribut Berhasil Dihapus.');
    } 

    
    public function DataHapus()
    {
        $datahapus = Homestays::where('status', "false")
    ->orderBy('created_at', 'desc')
    ->paginate(5);  
        
        return view('historyhomestay', compact('datahapus'));
    }

    public function repairAvailable(Request $request, $id)
    {
        $statuspesan = Homestays::find($id);
        if (!$statuspesan) {
            return response()->json(['message' => 'Data Kontrak Tidak Ditemukan'], 404);
        }

        $statuspesan->status = 'true';
        $statuspesan->save();

        return redirect()->route('DataHapus')->with('success', 'Data Atribut Berhasil Diubah.');
    }
}
