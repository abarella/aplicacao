<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();
Route::view('/', 'auth.login');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', 'UserController@profile')->name('admin.profile');
Route::get ('/beto', [App\Http\Controllers\BetoController::class, 'index'])->name('beto');
Route::post('/beto', [App\Http\Controllers\BetoController::class, 'func1'])->name('beto');

Route::get ('/beto2', [App\Http\Controllers\Beto2Controller::class, 'index'])->name('beto2');
Route::post('/beto2', [App\Http\Controllers\Beto2Controller::class, 'func1'])->name('beto2');

Route::get ('/useradmin', [\App\Http\Controllers\UserController\adminuserController::class, 'index'])->name('useradmin');
