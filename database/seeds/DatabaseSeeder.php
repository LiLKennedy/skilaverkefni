<?php

use Illuminate\Database\Seeder;
use App\movie;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Movie::create([
            'name' => 'Frozen 2',
            'rating' => 7.3,
            'genre' => "Action, Horror, Thriller",
            'description' => 'Movie about Elsa',
            'poster' => 'temp',
            'release_date' => Carbon\Carbon::now(),
            'slug' => 'frozen-2'
        ]);
        Movie::create([
            'name' => 'Die Hard 2: Die Harder',
            'rating' => 7.4,
            'genre' => "Action, Family, Animated",
            'description' => 'Movie about Elsa',
            'poster' => 'temp',
            'release_date' => Carbon\Carbon::now(),
            'slug' => 'die-hard-2'
        ]);

    }
}
