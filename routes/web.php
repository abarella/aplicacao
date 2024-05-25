<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
Route::view('/', 'auth.login');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', 'UserController@profile')->name('admin.profile');
Route::get ('/beto', [App\Http\Controllers\BetoController::class, 'index'])->name('beto');
Route::post('/beto', [App\Http\Controllers\BetoController::class, 'func1'])->name('beto');

Route::get ('/beto2', [App\Http\Controllers\Beto2Controller::class, 'index'])->name('beto2');
Route::post('/beto2', [App\Http\Controllers\Beto2Controller::class, 'func1'])->name('beto2');
