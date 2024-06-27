<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Game;

class AppController extends Controller
{
    public function index()
    {
        $randomIds = Game::inRandomOrder()->take(3)->pluck('id')->toArray();
        $games = Game::whereIn('id', $randomIds)->get();
        return view('app.home', compact('games'));
    }
}
