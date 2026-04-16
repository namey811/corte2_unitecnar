<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function validate(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        print('Email: ' . $request->email);
        print('Password: ' . $request->password);
        
    }
}
