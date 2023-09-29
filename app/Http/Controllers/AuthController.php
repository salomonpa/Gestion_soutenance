<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function accueil(){
        return view('Auth');
    }

    public function login(Request $request){
        
       if(Auth::attempt(['username'=>$request->username, 'password'=>$request->password])){
        return view('dashboard');
       }
       return view('Auth')->with('status', 'identifiant ou mot de passe incorrect');
    }

    public function logout(){
        Auth::logout();
        return view('Auth');
}
}
