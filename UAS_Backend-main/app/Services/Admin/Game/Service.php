<?php

namespace App\Services\Admin\Game;

use App\Http\Requests\GameRequest;
use App\Models\Game;

class Service
{
    public function store($data) : void
    {
        Game::firstOrCreate($data);
    }

    public function update(Game $game, $data) : void
    {
        $defaultPathImg = asset('images/image.jpg');
        if ($data['image'] == $defaultPathImg) {
            $data['image'] = $game['image'];
        }

        $game->update($data);
    }

    public function delete(Game $game) : void
    {
        $game->delete();
    }
}
