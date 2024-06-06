<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PayController extends Controller
{
    public function index()
{
    // Mendapatkan pengguna yang masuk
    $user = Auth::user();

    // Mendapatkan pesanan terkait dengan homestay yang dimiliki oleh pengguna yang masuk
    $history = Order::whereHas('homestay', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })
        ->orderBy('created_at', 'desc')
        ->paginate(5);

    // Mengembalikan data ke view
    return view('history', compact('history'));
}


    public function updateStatus(Request $request, $id)
    {
        $statuspesan = Order::find($id);
        if (!$statuspesan) {
            return response()->json(['message' => 'Data Kontrak Tidak Ditemukan'], 404);
        }

        $statuspesan->status = 'Verifikasi';
        $statuspesan->save();

        return redirect()->back()->with('message', 'IT WORKS!');
    }
}
