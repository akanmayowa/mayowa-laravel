<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $authUser = Auth::user();
            $success['token'] =  $authUser->createToken('MyAuthApp')->plainTextToken;
            $success['name'] =  $authUser->name;
            return response()->json(['data' => $success,'message' => 'User signed in'], 202);
        }
        else{
            return response()->json(['message' => 'Unauthorised.', 'error'=>'Unauthorised'], 401);
        }
    }

}
