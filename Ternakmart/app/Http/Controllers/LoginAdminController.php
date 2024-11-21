<?php
// app/Http/Controllers/LoginAdminController.php

namespace App\Http\Controllers;

use App\Models\AkunOwner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginAdminController extends Controller
{
    public function index()
    {
        return view('login_admin');
    }

    public function login(Request $request)
    {
        $admin = AkunOwner::where('username_admin', $request->username)->first();

        if ($admin && Hash::check($request->password, $admin->password_admin)) {
            return redirect()->route('dashboard_admin');
        }

        return back()->withErrors(['message' => 'Invalid admin credentials']);
    }
}
