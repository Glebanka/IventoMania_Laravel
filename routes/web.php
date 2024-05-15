<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Models\UserTypes;

Route::get('/', function () {
    return view('index');
});
Route::get('/list', function () {
    return view('list');
});
Route::get('/event', function () {
    return view('event');
});
Route::get('/create_event', function () {
    return view('create_form');
});
Route::get('/lector_cabinet', function () {
    return view('cabinets/lector');
});
Route::get('/user_cabinet', function () {
    return view('cabinets/user');
});
Route::get('/admin', function () {
    return view('cabinets/admin');
});



Route::post('/register', [RegisterController::class, 'register']);
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');

Route::post('/login', [LoginController::class, 'login']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');






Route::get('/userTypes', function () {
  $users = UserTypes::all();
  return response()->json($users);
});
Route::get('/users', [App\Http\Controllers\UsersController::class, 'index']);