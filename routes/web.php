<?php

use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Register;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [Login::class, "index"])->name('login.index');
Route::get('/register', [Register::class, "index"])->name('register.index');

Route::get('/test', [Register::class, "register"])->name('register.register');

