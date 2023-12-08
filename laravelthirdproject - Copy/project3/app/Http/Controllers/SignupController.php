<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SignupController extends Controller
{
    public function create()
    {
        return view('auth.signup');
    }

    public function store(Request $request)
    {
        $data = [
    'name' => 'required',
    'email' => 'required|email|unique:users,email',
    'password' => 'required|min:8',
    'role_id' => 'required',
];

        $validatedData = $request->validate($data);

        // Create a new user using the validated data
        User::create($validatedData);

        // Redirect to the login page
        return view('auth.login');
    }
}
