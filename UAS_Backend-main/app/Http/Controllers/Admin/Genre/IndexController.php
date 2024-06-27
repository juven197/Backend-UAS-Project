<?php

namespace App\Http\Controllers\Admin\Genre;

use App\Models\Genre;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $genres = Genre::all();
        return view('admin.genres.index', compact('genres'));
    }
}
