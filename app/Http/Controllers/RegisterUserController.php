<?php
// app/Http/Controllers/RegisterUserController.php

namespace App\Http\Controllers;

use App\Models\AkunUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterUserController extends Controller
{
    public function index()
    {
        return view('register_user');
    }

    public function store(Request $request)
    {
        AkunUser::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'nomer_telepon' => $request->nomer_telepon,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login_user');
    }
}
