<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $roll = \App\Game::all();
        return view('game1', compact('roll'));
    }

    public function yeah($id)
    {
        $roll = \App\Game::find($id);
        return view('gameid', compact('roll'));
    }
}
