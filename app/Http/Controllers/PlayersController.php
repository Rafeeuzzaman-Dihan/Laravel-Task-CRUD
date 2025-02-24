<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VFCA;

class PlayersController extends Controller
{
    public function index(){
        $players = VFCA::orderby('created_at', 'asc')->paginate(10);
        return view('players.index', ['players' => $players]);
    }
    public function details($id){
        $player = VFCA::findorFail($id);
        return view('players.details', ["player" => $player]);
    }
    public function add(){
        return view('players.add');
    }
    public function store(){
        // route --> /players/ (POST)
    }
}
