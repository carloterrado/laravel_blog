<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function home(Request $request){
    
           return view('back.pages.home');
     
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        return redirect()->route('author.login');
    }
}
