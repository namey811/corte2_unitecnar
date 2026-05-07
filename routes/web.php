<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Models\Comment;
use App\Models\Phone;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/register',[HomeController::class,'register'])->name('register');
Route::post('/register_user',[HomeController::class,'register_user'])->name('register_user');
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/validate',[AuthController::class, 'validate'])->name('validate');


Route::get('crear_usuario', function () {
    
    User::create([
        'name' => 'Admin',
        'email' => 'admin@example.com',
        'password' => bcrypt('password'),
    ]);

    return 'Usuario creado';
});


Route::get('crear_telefono', function () {
    
    Phone::create([
        'number' => '123456789',
        'user_id' => 1,
    ]);

    return 'Telefono creado';
});

Route::get('ver_telefono', function () {
    
    $user = User::find(1);
    $phone = $user->phone;

    return $phone;
});

Route::get('ver_usuario', function () {
    
    $user = User::where('id', 1)->with('phone')->first();

    return $user;
});

Route::get('crear_post', function () {
    
    Post::create([
        'title' => 'Mi primer post',
        'content' => 'Este es el contenido de mi primer post',
    ]);

    return 'Post creado';
});

Route::get('crear_comentario', function () {
    
    Comment::create([
        'content' => 'Este es un comentario1',
        'post_id' => 1,
    ]);

    return 'Comentario creado';
});

