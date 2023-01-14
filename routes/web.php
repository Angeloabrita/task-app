<?php

use App\Http\Controllers\Auth\Delete;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Dashboard;
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

//landcope main page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//route for login user
Route::get('/login', [Login::class, "index"])->name('login.index');
Route::post('/login',[Login::class, "login"])->name('login.login');
Route::post('/logout',[Login::class, "logout"])->name('login.logout');

//route for crud





//route for registration new users
Route::get('/register', [Register::class, "index"])->name('register.index');
Route::post('/register', [Register::class, "register"])->name('register.register');

//route after login or register new user
Route::get('/dashboard', [Dashboard::class, "index"])->name('dashboard.index');
Route::get('/dashboard/create', [Dashboard::class, "create"])->name('dashboard.create');
Route::get('/dashboard/edit/{$id}', [Dashboard::class, "edit"])->name('dashboard.edit');
Route::get('/dashboard/show/{$id}', [Dashboard::class, "show"])->name('dashboard.index');





