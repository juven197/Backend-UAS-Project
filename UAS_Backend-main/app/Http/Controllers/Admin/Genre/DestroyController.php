<?php

namespace App\Http\Controllers\Admin\Genre;

use App\Models\Genre;

class DestroyController extends BaseController
{
    public function __invoke(Genre $genre)
    {
        $this->service->delete($genre);

        return redirect()->route('admin.genre.index');
    }
}
