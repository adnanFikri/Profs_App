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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/professeur', [App\Http\Controllers\ProfesseurController::class, 'index'])->name('professeur.index');;
Route::get('/professeur/create', [App\Http\Controllers\ProfesseurController::class, 'create'])->name('professeur.create');;
Route::get('/emploi', [App\Http\Controllers\EmploiController::class, 'index'])->name('emploi.index');;