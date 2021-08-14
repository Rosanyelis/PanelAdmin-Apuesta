<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class WebAuthController extends Controller
{
    /**
     * Login
     */
    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $rol = Role::where('name', 'Visitante')->first();

        if (Auth::attempt($data) ) {

            if (Auth::user()->role_id == $rol->id ) {
                $token = Auth::user()->createToken('Auth-Web')->accessToken;
                $user = Auth::user();
                return response()->json(['token' => $token, 'user' => $user], 200);
            }

        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
        
    }   

    /**
     * Registration
     */
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $rol = Role::where('name', 'Visitante')->first();
 
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => $rol->id,
        ]);
       
        $token = $user->createToken('Auth-Web')->accessToken;
 
        return response()->json(['token' => $token], 200);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();   
        return response()->json([
            'status' => 200,
            'message' => 'Cerraste sesión',
        ], 200);
    }
}
