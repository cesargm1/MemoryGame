<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MemoryGameController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [ContactController::class, 'index']);

route::prefix('/game')->group(function () {

    Route::get('/selectGame', function () {
        return view('game.selectGame');
    });
    Route::get('/memory-game', [MemoryGameController::class, 'index']);
});
