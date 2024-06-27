<?php

namespace App\Http\Controllers\Admin\Game;

use App\Http\Requests\GameRequest;

class StoreController extends BaseController
{
    public function __invoke(GameRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->file('image')->extension();  
            $request->file('image')->move(public_path('images/'), $imageName);
            $data['image'] = $imageName;
        }

        $this->service->store($data);

        return redirect()->route('admin.game.index');
    }
}
