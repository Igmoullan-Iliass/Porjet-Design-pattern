<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\CalendarController;



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
// Route::get('/technicienne/calendar',[CalendarController::class,'index'])->name('technicienne.calendar');

Route::get('/technicienne/calendar', [CalendarController::class, 'index'])->name('technicienne.calendar');;
Route::post('calendar-crud-ajax', [CalendarController::class, 'calendarEvents']);

 /*Route::get('/login', function () {
     return view('login');
});*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/interface', function () {
    return view('interface');
});
Route::get('/admin', function () {
    return view('admin.admin');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/siccurcalelist', function () {
    return view('siccurcale.siccurcalelist');
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
//les routes

Route::post('rv',[App\Http\Controllers\RendezController::class, 'store']);
Route::get('rv', [App\Http\Controllers\RendezController::class, 'index']);
Route::get('rv/{id}/edit', [App\Http\Controllers\RendezController::class, 'edit']);
Route::put('rv/{id}', [App\Http\Controllers\RendezController::class, 'update']);
Route::delete('rv/{id}', [App\Http\Controllers\RendezController::class, 'destroy']);
