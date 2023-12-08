<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Movie;

class LoginController extends Controller
{
    // ... other methods

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful
            $request->session()->start();

            $userId = Auth::user()->id;
            $roleId = Auth::user()->role_id;



            $request->session()->put('user_id', $userId);
            $request->session()->put('role_id', $roleId);

            if ($roleId == 1) {
                // If the user role is 1, redirect to the admin dashboard
                return view('movies.admin')->with([
                    'success' => 'login successful!',
                    'user_id' => $userId,
                ]);
            } elseif ($roleId == 2) {
                // If the user role is 2, redirect to the doctor dashboard
                $movies = Movie::all();
                return view('movies.index')->with([
                    'movies'=>$movies,
                    'success' => 'login successful!',
                    'user_id' => $userId,
                ]);
            } else {
                // If the user role doesn't match any database records, set a default redirect here
                return redirect()->route('default.home');
            }
        } else {
            // Authentication failed
            return redirect()->back()->with('error', 'Invalid login credentials');
        }
    }
}
