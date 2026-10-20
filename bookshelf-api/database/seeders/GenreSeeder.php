<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;



class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            ['name' => 'Fantasy',         'description' => 'Magic, mythical creatures and epic quests.'],
            ['name' => 'Science Fiction', 'description' => 'Futuristic technology, space travel and speculative worlds.'],
            ['name' => 'Romance',         'description' => 'Stories centered on relationships and emotional journeys.'],
            ['name' => 'Mystery',         'description' => 'Crimes, detectives and puzzles waiting to be solved.'],
        ];

        foreach ($genres as $genre) {

            Genre::create($genre);

        }
    }
}
