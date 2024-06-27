<?php

namespace App\Models;

use App\Models\Traits\Filterble;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    use Filterble;

    protected $table = 'games';
    protected $guarded = false;

    public function genres()
    {
        return $this->belongsTo(Genre::class, 'genre_id', 'id');
    }
}
