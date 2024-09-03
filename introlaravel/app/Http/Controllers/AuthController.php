<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('page.register');
    }
    public function welcome(Request $request)
    {
        $Firstname = $request->input('Firstname');
        $Lastname = $request->input('Lastname');
        return view('page.welcome', ['Firstname'=> $Firstname, 'Lastname'=> $Lastname]);
    }
}
