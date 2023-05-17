<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assuming you have a User model
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $requestData = $request->validate([
            'email' => 'required|max:255',
            'username' => 'required|max:255',
            'password' => 'required|min:5|max:255',
            'telf_number' => 'required|max:255',
            'is_admin' => 'nullable|boolean', // Optional admin field
        ]);

        // Set the admin flag
        $isAdmin = $requestData['is_admin'] ?? false;

        // Create a new user
        $user = User::create([
            'email' => $requestData['email'],
            'username' => $requestData['username'],
            'password' => bcrypt($requestData['password']),
            'telf_number' => $requestData['telf_number'], // Corrected column name
            'is_admin' => $isAdmin,
        ]);

        // Authenticate the user after registration (optional)
        Auth::login($user);

        return redirect('/login')->with('success', 'Registration successful');
    }
}
