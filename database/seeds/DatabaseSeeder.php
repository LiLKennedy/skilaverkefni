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
            'genre' => 'Action, Horror, Thriller',
            'description' => 'Movie about Elsa',
            'poster' => 'temp',
            'release_date' => Carbon\Carbon::now(),
            'slug' => 'frozen-2'
        ]);
        Movie::create([
            'name' => 'Die Hard 2: Die Harder',
            'rating' => 7.4,
            'genre' => 'Action, Family, Animated',
            'description' => 'Movie about Elsa',
            'poster' => 'temp',
            'release_date' => Carbon\Carbon::now(),
            'slug' => 'die-hard-2'
        ]);
        Movie::create([
            'name' => 'Elf',
            'rating' => 6.9,
            'genre' => 'Comedy, Adult, Family',
            'description' => 'Movie about Elsa',
            'poster' => 'temp',
            'release_date' => Carbon\Carbon::now(),
            'slug' => 'elf'
        ]);
        Movie::create([
            'name' => 'How the Grinch Stole Christmas',
            'rating' => 6.1,
            'genre' => 'Sci-Fi, Horror, Romance',
            'description' => 'Elsa steals the grinch\'s heart ',
            'poster' => 'temp',
            'release_date' => Carbon\Carbon::now(),
            'slug' => 'how-the-grinch-stole-christmas'
        ]);
        Movie::create([
            'name' => 'A Very Harold & Kumar 3D Christmas',
            'rating' => 6.3,
            'genre' => 'Comedy, Stoner, Romance',
            'description' => 'Elsa steals the grinch\'s heart ',
            'poster' => 'temp',
            'release_date' => Carbon\Carbon::now(),
            'slug' => 'a-very-harold-and-kumar-3d-christmas'
        ]);
        Movie::create([
            'name' => '12 Years a Slave',
            'rating' => 3.7,
            'genre' => 'Comedy, Documentary, Murder-Mystery',
            'description' => 'Elsa steals the grinch\'s heart ',
            'poster' => 'temp',
            'release_date' => Carbon\Carbon::now(),
            'slug' => '12-years-a-slave'
        ]);
        Movie::create([
            'name' => 'Evil Bong',
            'rating' => 8.7,
            'genre' => 'Horror, Documentary, Lovecraftian',
            'description' => 'Elsa steals the grinch\'s heart ',
            'poster' => 'temp',
            'release_date' => Carbon\Carbon::now(),
            'slug' => 'evil-bong'
        ]);







    }
}
