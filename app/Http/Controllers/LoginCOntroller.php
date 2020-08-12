<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginCOntroller extends Controller
{
    public function index(Request $request)
    {
        return view('login2');
    }
    public function login(Request $request)
    {
        // return view('login2');
    }
    public function register(Request $request)
    {
        //   return view('login2');
    }
    public function logout(Request $request)
    {
        \Auth::logout();
        return redirect('/');
    }
}
