<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Signup;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Auth.signin');
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
    public function store(Request $request)
    {
        $rules = [
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'role_id'=>'required',
        ];

        $data = $request->validate($rules);
        User::create($data);
        return redirect('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(Signup $signup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Signup $signup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Signup $signup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Signup $signup)
    {
        //
    }
}
