<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VFCA;

class PlayersController extends Controller
{
    public function index(){
        $players = VFCA::orderby('created_at', 'desc')->paginate(5);
        return view('players.index', ['players' => $players]);
    }
    public function details($id){
        $player = VFCA::findorFail($id);
        return view('players.details', ["player" => $player]);
    }
    public function add(){
        return view('players.add');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
        ]);

        VFCA::create($validated);

        return redirect()->route('players.index');
    }

    public function destroy($id) {
        $player = VFCA::findorFail($id);
        $player -> delete();

        return redirect() -> route('players.index');
    }
}
