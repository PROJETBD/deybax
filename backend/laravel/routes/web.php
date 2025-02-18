<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElecteurController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\ParrainController;
use App\Http\Controllers\ParrainageController;
use App\Http\Controllers\PeriodeParrainageController;
use App\Http\Controllers\HistoriqueUploadController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/electeurs', [ElecteurController::class, 'index'])->name('electeurs.index');
Route::post('/electeurs', [ElecteurController::class, 'store'])->name('electeurs.store');

Route::get('/candidats', [CandidatController::class, 'index'])->name('candidats.index');
Route::post('/candidats', [CandidatController::class, 'store'])->name('candidats.store');

Route::get('/parrains', [ParrainController::class, 'index'])->name('parrains.index');
Route::post('/parrains', [ParrainController::class, 'store'])->name('parrains.store');

Route::get('/parrainages', [ParrainageController::class, 'index'])->name('parrainages.index');
Route::post('/parrainages', [ParrainageController::class, 'store'])->name('parrainages.store');

Route::get('/uploads', [HistoriqueUploadController::class, 'index'])->name('uploads.index');
Route::post('/uploads', [HistoriqueUploadController::class, 'store'])->name('uploads.store');

Route::get('/periodes', [PeriodeParrainageController::class, 'index'])->name('periodes.index');
Route::post('/periodes', [PeriodeParrainageController::class, 'store'])->name('periodes.store');

