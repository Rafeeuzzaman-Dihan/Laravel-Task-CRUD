<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/players', function(){

    $players = [
        ["name" => "Cristiano Ronaldo", "position" => "LW", "level" => "90", "id" => "1"],
        ["name" => "Lionel Messi", "position" => "CAM", "level" => "80", "id" => "2"],
    ];

    return view('players.index', ["players" => $players]);
});

Route::get('/players/add', function () {
    return view('players.add');
});

Route::get('/players/{id}', function($id){

    return view('players.details', ["id" => $id]);
});
