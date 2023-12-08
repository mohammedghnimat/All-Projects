<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signup(Request $request){
        $data = $request->validate([
               'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed',
            'role_id'=>'required'
        ]);

        $user = User::create([
             'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role_id'=>$data['role_id']
        ]);

        $token = $user->createToken('apiToken')->plainTextToken;

        $res = [
            'user'=>$user,
            'token'=>$token
        ];
        return response()->json(['data'=>$res],201);
    }

       public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        $user = User::where('email', $data['email'])->first();

if (!$user || !Hash::check($data['password'], $user->password)) {
            return response([
                'msg' => 'incorrect username or password'
            ], 401);
        }

        $token = $user->createToken('apiToken')->plainTextToken;

        $res = [
            'user' => $user,
            'token' => $token
        ];

        return response($res, 201);
    }
    public function logout(Request $request) {

    if (auth()->user()) {
        // Revoke all personal access tokens for the authenticated user
        auth()->user()->tokens()->delete();

        return [
            'message' => 'User logged out'
        ];
    } else {
        return response([
            'message' => 'User not authenticated'
        ], 401);
    }
}
}
