<?php

use App\Http\Controllers\ScoreController;
use Illuminate\Support\Facades\Route;

Route::post('/scores', [ScoreController::class, 'store'])->middleware('auth:sanctum');
