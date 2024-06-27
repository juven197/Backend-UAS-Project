<?php

namespace App\Http\Controllers\Admin\Game;

use App\Models\Game;

class DestroyController extends BaseController
{

    public function __invoke(Game $game)
    {
        $this->service->delete($game);

        return redirect()->route('admin.game.index');
    }
}
