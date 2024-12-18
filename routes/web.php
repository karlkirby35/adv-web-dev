<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\ReviewController;

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

//Route::get('/series/{series}', [SeriesController::class, 'show'])->name('series.show');

Route::get('/series', [SeriesController::class, 'index'])->name('series.index');
Route::get('/series/create', [SeriesController::class, 'create'])->name('series.create');
Route::get('/series/{id}', [SeriesController::class, 'show'])->name('series.show');
Route::post('/series', [SeriesController::class, 'store'])->name('series.store');
Route::get('/series/{series}/edit', [SeriesController::class, 'edit'])->name('series.edit');
Route::put('/series/{series}', [SeriesController::class, 'update'])->name('series.update');
Route::delete('/series{series}', [SeriesController::class, 'destroy'])->name('series.destroy');

//Routes for reviews
Route::resource('reviews', ReviewController::class);

//This will accept a series parameter and overwrite the usual store route
//also route for reviews
Route::post('series/{series}/reviews', [ReviewController::class, 'store'])->name('reviews.store');

Route::resource('directors', DirectorController::class)->middleware('auth');

require __DIR__.'/auth.php';





