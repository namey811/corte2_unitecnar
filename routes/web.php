<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Models\Comment;
use App\Models\Phone;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::post('/register_user', [HomeController::class, 'register_user'])->name('register_user');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/validate', [AuthController::class, 'validate'])->name('validate');



Route::get('crear_usuario', function () {

    User::create([
        'name' => 'Ivan Narvaez',
        'email' => 'namey811@gmail.com',
        'password' => bcrypt('12345678')
    ]);

    return 'Usuario creado';
});

Route::get('crear_telefono', function () {

    Phone::create([
        'number' => '3006910181',
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

    //Lo anterior seria este resultado en sentencia SQL 
    $sql = "SELECT u.name, u.email, p.number from users as u  inner join phones as p ON u.id = p.user_id WHERE u.id = 1;";

    return $user;
});

Route::get('crear_post', function () {

    $post = new \App\Models\Post();
    $post->title = 'Mi segundo post';
    $post->content = 'Este es el contenido de mi segundo post';
    $post->save();

    return 'Post creado';
});

Route::get('crear_comentario', function () {

    Comment::create([
        'content' => 'Este es un comentario2',
        'post_id' => 1,
    ]);

    return 'Comentario creado';
});

Route::get('ver_post_con_comentarios', function () {

    $post = Post::where('id', 1)->with('comments')->first();

    return $post;
});
