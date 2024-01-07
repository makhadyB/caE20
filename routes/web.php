<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SecteurController;
use App\Http\Controllers\VigileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




Route::get('/accueil', function () {
    return view('accueil');

});
Route::get('/nav', function () {
    return view('nav');

});
Route::get('/vigile/{id}', [VigileController::class,'show'])->name('vigile.detail');
Route::get('/secteur/{id}', [SecteurController::class,'show'])->name('secteur.detail');



Route::get('/secteur', function () {
    $secteur = App\Models\secteur::all(); 
    return view('secteur.liste', compact('secteur'));
})->name('secteur.liste');

Route::get('/vigile', function () {
    $vigile = App\Models\vigile::all(); 
    return view('vigile.liste', compact('vigile'));
})->name('vigile.liste');

Route::get('/secteur.detail', function () {
    return view('secteur.detail');

});


Route::get('secteur.index', [SecteurController::class, 'index'])->name('secteur.index');
Route::post('secteur.store', [SecteurController::class, 'store'])->name('enregistrer.secteur');
Route::get('secteur.edit/{id}', [SecteurController::class, 'edit'])->name('edit.secteur');
Route::post('secteur.update/{id}', [SecteurController::class, 'update'])->name('update.secteur');
Route::get('secteur.supprimer/{id}', [SecteurController::class, 'destroy'])->name('supprimer.secteur');






Route::get('vigile.index', [VigileController::class, 'index'])->name('vigile.index');
Route::post('vigile.store', [VigileController::class, 'store'])->name('enregistrer.vigile');
Route::get('vigile.edit/{id}', [VigileController::class, 'edit'])->name('edit.vigile');

Route::post('vigile.update/{id}', [VigileController::class, 'update'])->name('update.vigile');
Route::get('vigile.supprimer/{id}', [VigileController::class, 'destroy'])->name('supprimer.vigile');

