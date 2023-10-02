<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JuryController;
use App\Http\Controllers\SallesController;
use App\Http\Controllers\DemandesController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\PresidentjController;
use App\Http\Controllers\SoutenanceController;
use App\Http\Controllers\MaitrestageController;
use App\Http\Controllers\DirecteurmemoireController;
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
    return view('Auth');
});



Route::get('/dashboard', function () {
    return view('dashboard');
    
});
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

Route::post('/login',[AuthController::class, 'login'] )->name('login');
Route::get('/logout',[AuthController::class, 'logout'] )->name('logout');

Route::resource('etudiants', EtudiantController::class);

Route::get('supprimer-etudiant/{id}', [EtudiantController::class,'destroy']);





Route::resource('enseignants', EnseignantController::class);

Route::get('supprimer-enseignant/{id}', [EnseignantController::class,'destroy']);





Route::resource('soutenances', SoutenanceController::class);

Route::get('supprimer-soutenance/{id}', [SoutenanceController::class,'destroy']);





Route::resource('jury', JuryController::class);

Route::get('supprimer-jury/{id}', [JuryController::class,'destroy']);





Route::resource('salles', SallesController::class);







Route::resource('directeurmemoire', DirecteurmemoireController::class);

Route::get('supprimer-directeurmemoire/{id}', [ DirecteurmemoireController::class,'destroy']);





Route::resource('maitrestage', MaitrestageController::class);

Route::get('supprimer-maitrestage/{id}', [MaitrestageController::class,'destroy']);





Route::resource('demande', DemandesController::class);

Route::get('supprimer-demande/{id}', [DemandesController::class,'destroy']);





Route::resource('presidentj', PresidentjController::class);

Route::get('supprimer-presidentj/{id}', [PresidentjController::class,'destroy']);









