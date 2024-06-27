<?php

namespace App\Services\App\Game;

use App\Http\Filters\GameFilter;
use App\Models\Game;

class Service
{
    public function getFiltredGames($data)
    {
        $filter = app()->make(GameFilter::class, ['queryParams' => array_filter($data)]);
        return Game::filter($filter)->paginate(5);
    }
}
