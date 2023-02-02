<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;

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
    return view('portal');
})->name('portal');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/register', [RegisteredUserController::class, 'create'])
->name('register')->name('register');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//CRUD

Route::middleware(['auth'])->group(function(){
    Route::resource('alumnos', AlumnoController::class);
});


/* Route::get('alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');

Route::get('alumnos/create', [AlumnoController::class, 'create'])->name('alumnos.create');

Route::post('alumnos', [AlumnoController::class, 'store'])->name('alumnos.store');

Route::get('alumnos/{alumno}', [AlumnoController::class, 'show'])->name('alumnos.show');

Route::get('alumnos/{alumno}/edit', [AlumnoController::class, 'edit'])->name('alumnos.edit');

Route::put('alumnos/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');

Route::delete('alumnos/{alumno}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy'); */
