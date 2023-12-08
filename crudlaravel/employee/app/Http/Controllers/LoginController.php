<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $request = Employee::all();
        return view('Auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function login(Request $request)
    {
         $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $request->session()->start();

            $userId = Auth::user()->id;
            $roleId = Auth::user()->role_id;

            $request->session()->put('user_id', '$userId');
            $request->session()->put('role_id', '$roleId');

            if ($roleId == 1) {
                // If the user role is 1, redirect to the user dashboard
                $departments = Department::all();
                return view('department.index',compact('departments'));
            } elseif ($roleId == 2) {
                // If the user role is 2, redirect to the admin dashboard
                 $employees = Employee::all();
                return view('employee.index',compact('employees'));


            } else {
                // If the user role doesn't match any database records, set a default redirect here
                return redirect()->route('Auth.login');
            }
        } else {
            // Authentication failed
            return redirect()->back()->with('error', 'Invalid login credentials');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Login $login)
    {
        //
    }
}
