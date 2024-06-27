<?php

namespace App\Http\Controllers\Admin\Genre;

use App\Http\Requests\GenreRequest;

class StoreController extends BaseController
{
    public function __invoke(GenreRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('admin.genre.index');
    }
}
