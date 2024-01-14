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
//inscription
Route::get('/inscription', [App\Http\Controllers\InscriptionController::class, 'index'])->name('inscription.index');
Route::get('/inscription/create', [App\Http\Controllers\InscriptionController::class, 'create'])->name('inscription.create');
Route::post('/inscription/store', [App\Http\Controllers\InscriptionController::class, 'store'])->name('inscription.store');
Route::get('/inscription/{id}', [App\Http\Controllers\InscriptionController::class, 'show'])->name('inscription.show');
Route::get('/inscription/{id}/edit', [App\Http\Controllers\InscriptionController::class, 'edit'])->name('inscription.edit');
Route::put('/inscription/{id}', [App\Http\Controllers\InscriptionController::class, 'update'])->name('inscription.update');
Route::delete('/inscription/{id}', [App\Http\Controllers\InscriptionController::class, 'delete'])->name('inscription.delete');
Route::post('/inscription/filter', [App\Http\Controllers\InscriptionController::class, 'filter'])->name('inscription.filter');
Route::get('/inscription/filter/create', [App\Http\Controllers\InscriptionController::class, 'form_filter'])->name('inscription.form_filter');
Route::get('/inscription/list/filter', [App\Http\Controllers\InscriptionController::class, 'list_filter'])->name('inscription.list_filter');


//module 
Route::get('/module', [App\Http\Controllers\ModuleController::class, 'index'])->name('module.index');
Route::get('/module/create', [App\Http\Controllers\ModuleController::class, 'create'])->name('module.create');
Route::post('/module/store', [App\Http\Controllers\ModuleController::class, 'store'])->name('module.store');
Route::delete('/module/{id}', [App\Http\Controllers\ModuleController::class, 'destroy'])->name('module.delete');
//professeur
Route::middleware(['checkRole:admin'])->group(function () {
    Route::get('/professeur', [App\Http\Controllers\ProfesseurController::class, 'index'])->name('professeur.index');
    Route::get('/professeur/create', [App\Http\Controllers\ProfesseurController::class, 'create'])->name('professeur.create');
    Route::post('/professeur/store', [App\Http\Controllers\ProfesseurController::class, 'store'])->name('professeur.store');
});

//Admin
Route::middleware(['checkRole:admin,prof'])->group(function () {
    Route::get('/emploi', [App\Http\Controllers\EmploiController::class, 'index'])->name('emploi.index');
});
