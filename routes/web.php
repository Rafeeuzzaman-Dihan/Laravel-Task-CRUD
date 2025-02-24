<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayersController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/players', [PlayersController::class, 'index']);
Route::get('/players/add', [PlayersController::class, 'add']);
Route::get('/players/{id}', [PlayersController::class, 'details']);