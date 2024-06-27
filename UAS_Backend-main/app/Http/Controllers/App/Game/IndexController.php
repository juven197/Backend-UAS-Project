<?php

namespace App\Http\Controllers\App\Game;

use App\Http\Requests\FilterRequest;
use App\Models\Genre;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validatedAndFormatData();
        $games = $this->service->getFiltredGames($data);;
        $genres = Genre::all();
        return view('app.catalog', compact('games', 'genres', 'data'));
    }
}
