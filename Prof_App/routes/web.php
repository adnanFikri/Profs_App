<?php

// use Illuminate\Support\Facades\Auth;
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

// web.php

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['checkRole:admin'])->group(function () {
    Route::get('/professeur', [App\Http\Controllers\ProfesseurController::class, 'index'])->name('professeur.index');
    Route::get('/professeur/create', [App\Http\Controllers\ProfesseurController::class, 'create'])->name('professeur.create');
    Route::post('/professeur/store', [App\Http\Controllers\ProfesseurController::class, 'store'])->name('professeur.store');
});

Route::middleware(['checkRole:admin,prof'])->group(function () {
    Route::get('/emploi', [App\Http\Controllers\EmploiController::class, 'index'])->name('emploi.index');
});
