<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

 /*Route::get('/login', function () {
     return view('login');
});*/
Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/rdv', function () {
    return view('formeRendez');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/forgot', function () {
    return view('forgot');
});
Route::get('/reset', function () {
    return view('reset');
});*/
Route::post('rv',[App\Http\Controllers\RendezController::class, 'store']);
Route::get('rv', [App\Http\Controllers\RendezController::class, 'index']);
