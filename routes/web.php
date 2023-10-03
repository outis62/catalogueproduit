<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'login'])->name('login');

Route::get('/dashboard', function () {
    return redirect()->route('adminhome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/adminhome', [HomeController::class, 'adminhome'])->name('adminhome');

    Route::get('/categorie', [CategorieController::class, 'categorie'])->name('categorie');
    Route::get('/ajoutcategorie', [CategorieController::class, 'ajoutcategorie'])->name('ajoutcategorie');
    Route::post('/nouvellecategorie', [CategorieController::class, 'nouvellecategorie'])->name('nouvellecategorie');
    Route::get('/supprimer/{id}/categorie', [CategorieController::class, 'delete'])->name('delete');
    Route::get('/modifiercategorie/{id}', [CategorieController::class, 'modifiercategorie'])->name('modifiercategorie');
    Route::post('updatecategorie/{id}', [CategorieController::class, 'updatecategorie'])->name('updatecategorie');

    Route::get('/produit', [ProduitController::class, 'produit'])->name('produit');
    Route::get('/ajoutproduit', [ProduitController::class, 'ajoutproduit'])->name('ajoutproduit');
    Route::get('/supprimer/{id}/produit', [ProduitController::class, 'supprimer'])->name('supprimer');
    Route::post('/nouveauproduit', [ProduitController::class, 'nouveauproduit'])->name('nouveauproduit');
    Route::get('/modifierproduit/{id}', [ProduitController::class, 'modifierproduit'])->name('modifierproduit');
    Route::post('/updateproduit/{id}', [ProduitController::class, 'updateproduit'])->name('updateproduit');
    Route::get('/detailproduit/{id}', [ProduitController::class, 'detailproduit'])->name('detailproduit');
});

require __DIR__ . '/auth.php';

Route::get('/accueil', [HomeController::class, 'accueil'])->name('accueil');
