<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventosController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::get('/eventos', [EventosController::class, 'index'])->middleware(['auth', 'verified'])->name('eventos');
Route::get('/eventos-detalle/{id}', [EventosController::class, 'detalles'])->middleware(['auth', 'verified'])->name('eventosdet');
Route::get('/subir-part/{id}', [EventosController::class, 'subir'])->middleware(['auth', 'verified'])->name('subirpart');

Route::get('/pec', function()
{
    return Inertia::render('Pec');
})->middleware(['auth', 'verified'])->name('pec');

Route::get('/continua', function()
{
    return Inertia::render('Continua');
})->middleware(['auth', 'verified'])->name('continua');

Route::get('/becas', function()
{
    return Inertia::render('Becas');
})->middleware(['auth', 'verified'])->name('becas');

Route::get('/soporte', function()
{
    return Inertia::render('Soporte');
})->name('soporte');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
