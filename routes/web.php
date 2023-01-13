<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;


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
/*
from saif
*/ 
Route::get('/test',[StaticController::class,'master'])->name('master');
Route::get('/contact',[StaticController::class,'contact'])->name('contact');
Route::get('/admin/accueil',[StaticController::class,'dashboard'])->name('dashboard');
Route::get('/dashboard',[StaticController::class,'dashboard'])->name('dashboard'); 
Route::get('/techniciens',[StaticController::class,'techniciens'])->name('techniciens');


Route::get('/t', function () {
    return view('test');
});

 Route::get('/login', function () {
     return view('login');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rdv', function () {
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
});

