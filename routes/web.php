<?php

use App\Http\Controllers\MemoryGameController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/game', [MemoryGameController::class, 'index']);
