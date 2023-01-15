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
<<<<<<< Updated upstream

Route::get('/admin/accueil',[StaticController::class,'admindashboard'])->name('admin');
Route::get('/responsable/accueil',[StaticController::class,'responsable'])->name('responsable');

Route::get('/admin/admindashboard',[StaticController::class,'admindashboard'])->name('admindashboard');
Route::get('/responsable/responsabledashboard',[StaticController::class,'responsabledashboard'])->name('responsabledashboard');

Route::get('/admin/siccurcalelist',[StaticController::class,'siccurcalelist'])->name('siccurcalelist');
Route::get('/responsable/siccurcalelist',[StaticController::class,'responsablesiccurcalelist'])->name('responsablesiccurcalelist');

Route::get('/admin/techniciens',[StaticController::class,'techniciens'])->name('techniciens');
Route::get('/responsable/techniciens',[StaticController::class,'responsabletechniciens'])->name('responsabletechniciens');



=======
Route::get('/admin/accueil',[StaticController::class,'admin'])->name('admin');
Route::get('/admin/dashboard',[StaticController::class,'admin'])->name('admin');
Route::get('/techniciens',[StaticController::class,'techniciens'])->name('techniciens');
>>>>>>> Stashed changes
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

Route::get('/siccurcalelist22', function () {
    return view('responsable.responsablesiccurcalelist');
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
