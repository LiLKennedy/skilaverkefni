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
            'description' => 'Anna, Elsa, Kristoff, Olaf and Sven leave Arendelle to travel to an ancient, autumn-bound forest of an enchanted land. They set out to find the origin of Elsa\'s powers in order to save their kingdom.',
            'poster' => 'frozen-2',
            'release_date' => '2019-11-22',
            'slug' => 'frozen-2'
        ]);
        Movie::create([
            'name' => 'Die Hard 2: Die Harder',
            'rating' => 7.4,
            'genre' => 'Action, Family, Animated',
            'description' => 'John McClane attempts to avert disaster as rogue military operatives seize control of Dulles International Airport in Washington, D.C.',
            'poster' => 'die-hard-2',
            'release_date' => '1990-08-24',
            'slug' => 'die-hard-2'
        ]);
        Movie::create([
            'name' => 'Elf',
            'rating' => 6.9,
            'genre' => 'Comedy, Adult, Family',
            'description' => 'After discovering he is a human, a man raised as an elf at the North Pole decides to travel to New York City to locate his real father.',
            'poster' => 'elf',
            'release_date' => '2003-11-28',
            'slug' => 'elf'
        ]);
        Movie::create([
            'name' => 'How the Grinch Stole Christmas',
            'rating' => 6.1,
            'genre' => 'Sci-Fi, Horror, Romance',
            'description' => 'On the outskirts of Whoville lives a green, revenge-seeking Grinch (Jim Carrey), who plans to ruin Christmas for all of the citizens of the town.',
            'poster' => 'how-the-grinch-stole-christmas',
            'release_date' => '2001-12-01',
            'slug' => 'how-the-grinch-stole-christmas'
        ]);
        Movie::create([
            'name' => 'A Very Harold & Kumar 3D Christmas',
            'rating' => 6.3,
            'genre' => 'Comedy, Stoner, Romance',
            'description' => 'Six years after their Guantanamo Bay adventure, stoner buds Harold Lee and Kumar Patel cause a holiday fracas by inadvertently burning down Harold\'s father-in-law\'s prize Christmas tree.',
            'poster' => 'a-very-harold-and-kumar-3d-christmas',
            'release_date' => '2011-12-09',
            'slug' => 'a-very-harold-and-kumar-3d-christmas'
        ]);
        Movie::create([
            'name' => '12 Years a Slave',
            'rating' => 3.7,
            'genre' => 'Comedy, Documentary, Murder-Mystery',
            'description' => 'In the antebellum United States, Solomon Northup, a free black man from upstate New York, is abducted and sold into slavery.',
            'poster' => '12-years-a-slave',
            'release_date' => '2014-01-10',
            'slug' => '12-years-a-slave'
        ]);
        Movie::create([
            'name' => 'Evil Bong',
            'rating' => 8.7,
            'genre' => 'Horror, Documentary, Lovecraftian',
            'description' => 'Straight-laced nerd Alistair moves into a college dorm with hardcore marijuana users Brett, Larnell, and Bachman. Larnell orders an old giant bong that proves to have strange magical powers. When smoked said bong sends a person to a bizarre drugged-out alternate realm from which there is no easy escape.',
            'poster' => 'evil-bong',
            'release_date' => '2006-10-31',
            'slug' => 'evil-bong'
        ]);







    }
}
