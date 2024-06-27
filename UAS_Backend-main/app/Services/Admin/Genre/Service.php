<?php

namespace App\Services\Admin\Genre;

use App\Models\Genre;

class Service
{
    public function store($data): void
    {
        Genre::firstOrCreate($data);
    }

    public function delete(Genre $genre): void
    {
        $genre->delete();
    }
}
