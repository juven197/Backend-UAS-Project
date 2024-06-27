<?php

namespace App\Http\Controllers\Admin\Game;

use App\Models\Game;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $games = Game::paginate(10);
        return view('admin.games.index', compact('games'));
    }
}
