<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Feby Mukharom Rosdiana",
        "email" => "feby.mr19@gmail.com",
        "image" => "foto.jpg"
    ]);
});

Route::get('/blog', function () {
    return view('posts', [
        "title" => "Posts"
    ]);
});



Route::get('/login' , [Logincontroller::class, 'index'])->name('login');
Route::post('/login', [RegisterController::class, 'authenticating'])->name('login');

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);