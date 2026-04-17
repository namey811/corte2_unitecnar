<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }

    public function validate(Request $request){

      $credencials = $request->validate(
        [
            'email' => 'required|email',
            'password' =>'required|min:4|max:10'
        ]
       );
        
        if(Auth::attempt($credencials)){
            $request->session()->regenerate();
            return back()->with('success', 'Bienvenido ' . Auth::user()->name);
        }

        return back()->with('error', 'Credenciales incorrectas');
    }
}
