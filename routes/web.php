<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/list', function () {
    return view('list');
});
Route::get('/event', function () {
    return view('event');
});
Route::get('/register', function () {
    return view('registration');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/create_event', function () {
    return view('create_form');
});
Route::get('/lector_cabinet', function () {
    return view('cabinets/lector');
});
Route::get('/admin', function () {
    return view('cabinets/admin');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

