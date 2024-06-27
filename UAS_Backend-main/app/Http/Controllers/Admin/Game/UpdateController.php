<?php

namespace App\Http\Controllers\Admin\Game;

use App\Http\Requests\GameRequest;
use App\Models\Game;

class UpdateController extends BaseController
{
    public function __invoke(GameRequest $request, Game $game)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($game->image && file_exists(public_path('images/' . $game->image))) {
                unlink(public_path('images/' . $game->image));
            }

            $imageName = time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path('images/'), $imageName);
            $data['image'] = $imageName;
        }

        $this->service->update($game, $data);

        return redirect()->route('admin.game.index');
    }
}
