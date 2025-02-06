<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies', [MoviesController::class, 'index'])->name('movies'); // Movie list
Route::get('/movies/add', [MoviesController::class, 'viewForm'])->name('movies.add'); // Movie form
Route::post('/movies', [MoviesController::class, 'store'])->name('movies.store'); // Handling form submission for movie add

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
