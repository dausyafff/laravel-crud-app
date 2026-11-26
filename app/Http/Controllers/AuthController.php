<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            "nama" => "required|string|max:255",
            "email" => "required|string|email|unique:users.email",
            "password" => "required|string|confirmed|min:8",
        ]);
    }
}
