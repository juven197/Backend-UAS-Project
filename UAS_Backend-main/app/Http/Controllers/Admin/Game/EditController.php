<?php

namespace App\Http\Controllers\Admin\Game;

use App\Models\Game;
use App\Models\Genre;

class EditController extends BaseController
{
    public function __invoke(Game $game)
    {
        $genres = Genre::all();

        return view('admin.games.edit', compact('game', 'genres'));
    }
}
