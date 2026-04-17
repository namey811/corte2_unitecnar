<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function register()
    {
        return view('register');
    }

    public function register_user(Request $request)
    {

        $request->validate([
            'name' => 'required|min:5|max:255',
            'email' => 'required|email:rfc|unique:users,email',
            'password' => 'required|min:4|max:10'
        ]);

        $hash = Hash::make($request->password);

        //Opcion1: Guardar el usuario en la base de datos, esta opcion es mas rapida pero no es recomendable por seguridad ya que se pueden enviar datos no deseados, es mejor usar el metodo create con un array de los campos a guardar

        //User::create($request->all());

        //Opcion 2: Crear un nuevo usuario usando el metodo create con un array de los campos a guardar, esta opcion es mas rapida pero no es recomendable por seguridad ya que se pueden enviar datos no deseados, es mejor usar el metodo create con un array de los campos a guardar
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $hash
        ]);

        //Opcion 3: Crear un nuevo usuario y asignar los valores manualmente, esta opcion es mas segura ya que se pueden validar los datos antes de guardarlos en la base de datos
        /*
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $hash;
        $user->save();
        */

        return back()->with('success', 'Usuario registrado correctamente');
    }
}
