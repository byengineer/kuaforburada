<?php

namespace App\Http\Controllers\api;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
class loginController extends Controller
{
    protected function login(){
        if (Auth::attempt(array('email' => Input::get('mail'), 'password' => Input::get('sifre')))){
            return Response::json( [
                'data' => [
                    'case' => 1,
                    'user_id' => Auth::user()->id,
                    'token' => Auth::user()->api_token,
                ]
            ], 200);
        }
        else {
            return Response::json( [
                'data' => [
                    'case' => 0,
                    'message' => "Mail adresiniz veya şifreniz hatalı",
                ]
            ], 404 );
        }



    }



}
