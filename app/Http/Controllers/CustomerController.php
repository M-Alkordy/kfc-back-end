<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class CustomerController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:8|max:20',
            'api_token'=>''
        ]);
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'api_token'=>''
        ]);
        $token=$user->createToken($user->name);
        $user->update([
            'api_token'=>$token->plainTextToken,
        ]);

        return response()->json([
                'message'=>'user has been created',
                'access_token'=>$token->plainTextToken,
            ]
        );
    }
    public function login(Request $request){
        $user=$request->validate([
            'name'=>'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
                $user=$request->user();
                return response()->json(['your access token is'=>$user->api_token]);
            }


        else{
            $user=Auth::user();
            return response()->json(['error'=>'login failed ']);
        }



    }
}

