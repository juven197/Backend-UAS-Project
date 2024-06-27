<?php

namespace App\Http\Controllers\App\Game;

use App\Models\Game;

class ShowController extends BaseController
{
    public function __invoke(Game $game)
    {
        return view('app.show', compact('game'));
    }
}
