<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class GameFilter extends AbstractFilter
{
    public const TITLE = 'title';
    public const GENRE_ID = 'genre_id';
    public const PRICE = 'price';

    protected function getCallbacks(): array
    {
        return [
            self::TITLE => [$this, 'title'],
            self::GENRE_ID => [$this, 'genre_id'],
            self::PRICE => [$this, 'price']
        ];
    }

    public function applay(Builder $builder)
    {
        // TODO: Implement applay() method.
    }

    public function title(Builder $builder, $value) : void
    {
        $builder->whereRaw('LOWER(title) like ?', ['%' . strtolower($value) . '%']);;
    }

    public function genre_id(Builder $builder, $value) : void
    {
        $builder->where('genre_id', $value);
    }

    public function price(Builder $builder, $value) : void
    {
        $minPrice = $value[0];
        $maxPrice = $value[1];

        if ($minPrice !== null) {
            $builder->where('price', '>=', $minPrice);
        }

        if ($maxPrice !== null) {
            $builder->where('price', '<=', $maxPrice);
        }
    }
}
