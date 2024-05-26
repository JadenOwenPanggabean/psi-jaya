<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'no_hp' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'in:user,owner'],
        ]);
    }

    protected function create(array $data)
    {
        $role = $data['role'] === 'owner' ? 'owner' : 'user';
        $verified = $data['role'] === 'owner' ? 'false' : 'true';

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'no_hp' => $data['no_hp'],
            'role' => $role,
            'verified' => $verified,
        ]);
    }
}
