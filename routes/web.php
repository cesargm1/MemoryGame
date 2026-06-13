<?php

use App\Http\Controllers\MemoryGameController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::prefix('/game')->group(function () {

    Route::get('/selectGame', function () {
        return view('game.selectGame');
    });
    Route::get('/memoryGame', [MemoryGameController::class, 'index']);
});
