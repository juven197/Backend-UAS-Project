<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Game;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    private array $genres = ['RPG',
        'Adventure',
        'Action-adventure',
        'Action',
        'Fighting',
        'Platform',
        'Puzzle',
        'Racing',
        'Sports',
        'Strategy',
        'Survival horror',
        'Horror',
        'Simulation',
        'Shooter'
    ];

    public function run(): void
    {
        foreach ($this->genres as $genre) {
            $data = ['title' => $genre];
            Genre::create($data);
        }

        $jsonFilePath = database_path('json/games.json');

        if (file_exists($jsonFilePath)) {
            $jsonContent = file_get_contents($jsonFilePath);

            $data = json_decode($jsonContent, true);

            foreach ($data as $game) {
                Game::create($game);
            }
        }

        User::factory(1)->create();
    }
}
