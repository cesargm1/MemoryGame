<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogOutController;
use App\Http\Controllers\Auth\RegisterController as AuthRegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DrawBoxController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MemoryGameController;
use App\Http\Controllers\ScoreController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', [ContactController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/memory-game', [MemoryGameController::class, 'index']);
    Route::get('/memory-game/ranking', [ScoreController::class, 'index']);
    Route::get('/draw-box', [DrawBoxController::class, 'index']);
    Route::get('/draw-box/gallery', [GalleryController::class, 'index']);
});
Route::get('/register', [AuthRegisterController::class, 'create']);
Route::post('/register', [AuthRegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'create']);
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/', [LogOutController::class, 'logout']);
