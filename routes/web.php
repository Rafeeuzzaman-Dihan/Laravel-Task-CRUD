<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/players', function(){

    $players = [
        ["name" => "Cristiano Ronaldo", "position" => "LW", "id" => "1"],
        ["name" => "Lionel Messi", "position" => "CAM", "id" => "2"],
    ];

    return view('players.players', ["players" => $players]);
});
