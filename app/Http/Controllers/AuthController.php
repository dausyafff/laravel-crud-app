<?php

namespace App\Http\Controllers;

use App\Models\User;

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

        $user = User::create([
            "name" => $data["nama"],
            "email" => $data["email"],
            "password" => bcrypt($data["password"]),
        ]);

        return response()->json([
            "message" => "User registered successfully",
            "user" => $user,
        ], 201);
    }
}
