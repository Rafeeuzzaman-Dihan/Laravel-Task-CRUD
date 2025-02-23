<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayersController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/players', [PlayersController::class, 'index']);

Route::get('/players/add', function () {
    return view('players.add');
});

Route::get('/players/{id}', function($id){

    return view('players.details', ["id" => $id]);
});
