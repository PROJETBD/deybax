<?php
// routes/web.php
use App\Http\Controllers\ElecteurController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\ParrainageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HistoriqueUploadController;
use Illuminate\Support\Facades\Route;

// Page d'accueil / Dashboard
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Routes pour les électeurs
Route::get('/electeurs', [ElecteurController::class, 'index'])->name('electeurs.index');
Route::get('/electeurs/create', [ElecteurController::class, 'create'])->name('electeurs.create');
Route::post('/electeurs', [ElecteurController::class, 'store'])->name('electeurs.store');
Route::get('/electeurs/{id}/edit', [ElecteurController::class, 'edit'])->name('electeurs.edit');
Route::put('/electeurs/{id}', [ElecteurController::class, 'update'])->name('electeurs.update');
Route::delete('/electeurs/{id}', [ElecteurController::class, 'destroy'])->name('electeurs.destroy');

//Routes pour uploads
Route::get('/uploads', [HistoriqueUploadController::class, 'index'])->name('uploads.index');
Route::post('/uploads', [HistoriqueUploadController::class, 'store'])->name('uploads.store');

// Routes pour les candidats
Route::get('/candidats', [CandidatController::class, 'index'])->name('candidats.index');
Route::get('/candidats/create', [CandidatController::class, 'create'])->name('candidats.create');
Route::post('/candidats', [CandidatController::class, 'store'])->name('candidats.store');
Route::get('/candidats/{id}', [CandidatController::class, 'show'])->name('candidats.show');
Route::get('/candidats/{id}/edit', [CandidatController::class, 'edit'])->name('candidats.edit');
Route::put('/candidats/{id}', [CandidatController::class, 'update'])->name('candidats.update');
Route::delete('/candidats/{id}', [CandidatController::class, 'destroy'])->name('candidats.destroy');

// Routes pour les parrainages
Route::get('/parrainages', [ParrainageController::class, 'index'])->name('parrainages.index');
Route::get('/parrainages/create1', [ParrainageController::class, 'create1'])->name('parrainages.create');
Route::post('/parrainages', [ParrainageController::class, 'store'])->name('parrainages.store');

// Routes d'authentification
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
