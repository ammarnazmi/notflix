<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\ActorsController;


Route::get('/', [MoviesController::class, 'index'])->name('movies.index');

Route::prefix('/movies')->name('movies.')->controller(MoviesController::class)->group(function () {
    Route::get('/{id}', 'show')->name('show');
});

Route::prefix('/actors')->name('actors.')->controller(ActorsController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/{id}', 'show')->name('show');
    Route::get('/page/{page?}', 'index');
});
