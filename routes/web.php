<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VjuegoController;
use App\Http\Controllers\ConsolaController;

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

Route::get('/vjuegos', [VjuegoController::class, 'index'])->name('vjuegos.index');
Route::get('/vjuegos/create', [VjuegoController::class, 'create'])->name('vjuegos.create');
Route::post('/vjuegos', [VjuegoController::class, 'store'])->name('vjuegos.store');
Route::get('/vjuegos/{vjuego}', [VjuegoController::class, 'show'])->name('vjuegos.show');
Route::get('/vjuegos/{vjuego}/edit', [VjuegoController::class, 'edit'])->name('vjuegos.edit');
Route::put('/vjuegos/{vjuego}', [VjuegoController::class, 'update'])->name('vjuegos.update');
Route::delete('/vjuegos/{vjuego}', [VjuegoController::class, 'destroy'])->name('vjuegos.destroy');

Route::get('/consolas', [ConsolaController::class, 'index'])->name('consolas.index');
Route::get('/consolas/create', [ConsolaController::class, 'create'])->name('consolas.create');
Route::post('/consolas', [ConsolaController::class, 'store'])->name('consolas.store');
Route::get('/consolas/{consola}', [ConsolaController::class, 'show'])->name('consolas.show');
Route::get('/consolas/{consola}/edit', [ConsolaController::class, 'edit'])->name('consolas.edit');
Route::put('/consolas/{consola}', [ConsolaController::class, 'update'])->name('consolas.update');
Route::delete('/consolas/{consola}', [ConsolaController::class, 'destroy'])->name('consolas.destroy');

require __DIR__ . '/auth.php';
