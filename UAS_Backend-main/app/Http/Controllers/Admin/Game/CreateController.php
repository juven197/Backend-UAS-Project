<?php

namespace App\Http\Controllers\Admin\Game;

use App\Models\Genre;

class CreateController extends BaseController
{

    public function __invoke()
    {
        $genres = Genre::all();

        return view('admin.games.create', compact('genres'));
    }
}
