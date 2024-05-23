<?php

namespace App\Http\Controllers;

use App\Models\User;


class VerifyOwnerController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'owner')->get();
        return view('verifyowner', compact('users'));
    }

    public function verify($id)
    {
        $user = User::where('id', $id)->first();
        if ($user->verified == 'true') {
            $user->verified = 'false';
        } else {
            $user->verified = 'true';
        }
        $user->save();
        return redirect()->route('verify.owner');
    }
}
