<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class TestApiController extends Controller
{
    function login(Request $request){
        $credentials =   $request->only('email','password');
        if(Auth::attempt($credentials)){
            return response()->json(['message'=>'Login Successfully','status' => true],Response::HTTP_OK);
        }
        return response()->json(['message'=>'Credentials does not match with our record','status' => false],Response::HTTP_UNAUTHORIZED);
    }
}
