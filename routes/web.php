<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayersController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/players', [PlayersController::class, 'index'])->name('players.index');
Route::get('/players/add', [PlayersController::class, 'add'])->name('players.add');
Route::get('/players/{id}', [PlayersController::class, 'details'])->name('players.details');
Route::post('/players', [PlayersController::class, 'store'])->name('players.store');