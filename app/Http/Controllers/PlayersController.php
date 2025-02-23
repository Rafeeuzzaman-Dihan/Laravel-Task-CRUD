<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VFCA;

class PlayersController extends Controller
{
    public function index(){
        // route --> /players/

        $players = VFCA::orderby('created_at', 'desc')->get();
        return view('players.index', ['players' => $players]);
    }
    public function details(){
        // route --> /players/{id}
    }
    public function create(){
        // route --> /players/create
    }
    public function store(){
        // route --> /players/ (POST)
    }
}
