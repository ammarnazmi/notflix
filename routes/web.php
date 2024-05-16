<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

Route::name('movies.')->controller(MoviesController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/{movie}', 'show')->name('show');
});
