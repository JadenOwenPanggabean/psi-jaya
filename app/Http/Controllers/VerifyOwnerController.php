<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class VerifyOwnerController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'owner')->get();
        return view('verifyowner', compact('users'));
    }

    public function verify($id)
    {
        $user = User::find($id);
        if ($user && $user->role !== 'admin') {
            $user->verified = $user->verified == 'true' ? 'false' : 'true';
            $user->save();
        }
        return redirect()->route('verify.owner');
    }
}
