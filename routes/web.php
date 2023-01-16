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
Route::get('/welcome',[StaticController::class,'welcome'])->name('welcome');
Route::get('/techniciens',[StaticController::class,'techniciens'])->name('techniciens');
// Route::get('/technicienne/calendar',[CalendarController::class,'index'])->name('technicienne.calendar');

Route::get('/technicienne/calendar', [CalendarController::class, 'index'])->name('technicienne.calendar');;
Route::post('calendar-crud-ajax', [CalendarController::class, 'calendarEvents']);



Route::get('/test',[StaticController::class,'master'])->name('master');
Route::get('/contact',[StaticController::class,'contact'])->name('contact');




Route::get('/admin/accueil',[StaticController::class,'admindashboard'])->name('admin');
Route::get('/responsable/accueil',[StaticController::class,'responsabledashboard'])->name('responsabledashboard');

Route::get('/admin/admindashboard',[StaticController::class,'admindashboard'])->name('admindashboard');
Route::get('/responsable/responsabledashboard',[StaticController::class,'responsabledashboard'])->name('responsabledashboard');

Route::get('/admin/siccurcalelist',[StaticController::class,'siccurcalelist'])->name('siccurcalelist');
Route::get('/responsable/siccurcalelist',[StaticController::class,'responsablesiccurcalelist'])->name('responsablesiccurcalelist');

Route::get('/admin/techniciens',[StaticController::class,'techniciens'])->name('techniciens');
Route::get('/responsable/techniciens',[StaticController::class,'responsabletechniciens'])->name('responsabletechniciens');

Route::get('/admin/rendezvous',[StaticController::class,'adminrendezvous'])->name('adminrendezvous');
Route::get('/responsable/rendezvous',[StaticController::class,'responsablerendezvous'])->name('responsablerendezvous');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('navigation-menu');
});
Route::get('/dashboard', function () {
    return view('home');
});
Route::get('/interface', function () {
    return view('interface');
});
Route::get('/admin', function () {
    return view('admin.admin');
});
Route::get('/siccurcalelist', function () {
    return view('siccurcale.siccurcalelist');
});



Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('home');
})->name('home');

//RendezVous
Route::post('rv',[App\Http\Controllers\RendezController::class, 'store']);
Route::get('rv', [App\Http\Controllers\RendezController::class, 'index']);
Route::get('rv/{id}/edit', [App\Http\Controllers\RendezController::class, 'edit']);
Route::put('rv/{id}', [App\Http\Controllers\RendezController::class, 'update']);
Route::delete('rv/{id}', [App\Http\Controllers\RendezController::class, 'destroy']);
//Techniciens
Route::get('tech/create', [App\Http\Controllers\TechController::class, 'create']);
Route::get('tech', [App\Http\Controllers\TechController::class, 'index']);
Route::post('tech',[App\Http\Controllers\TechController::class, 'store']);
Route::get('tech/{id}/edittech', [App\Http\Controllers\TechController::class, 'edit']);
Route::put('tech/{id}', [App\Http\Controllers\TechController::class, 'update']);
Route::delete('tech/{id}', [App\Http\Controllers\TechController::class, 'destroy']);
//succurcales
Route::get('succ/create', [App\Http\Controllers\SuccurcaleController::class, 'create']);
Route::get('succ', [App\Http\Controllers\SuccurcaleController::class, 'index']);
Route::post('succ',[App\Http\Controllers\SuccurcaleController::class, 'store']);
Route::get('succ/{id}/editsucc', [App\Http\Controllers\SuccurcaleController::class, 'edit']);
Route::put('succ/{id}', [App\Http\Controllers\SuccurcaleController::class, 'update']);
Route::delete('succ/{id}', [App\Http\Controllers\SuccurcaleController::class, 'destroy']);