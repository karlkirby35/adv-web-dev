<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Director::insert([
            ['name' => 'Pete Michels', 'image' => 'pete-michell.jpg', 'bio' => 'Director of "Rick and Morty".'],
            ['name' => 'Hwang Dong-hyuk', 'image' => 'hwang.jpg', 'bio' => 'Director of "Squid Game".'],
            ['name' => 'Ryan Murphy', 'image' => 'ryanmurphy.jpg', 'bio' => 'Director of "The Watcher".'],
            ['name' => 'John Scott', 'image' => 'johnscott.jpg', 'bio' => 'Director of "You".'],
            ['name' => 'Shawn Levy', 'image' => 'levy.jpg', 'bio' => 'Director of "Stranger Things".'],

        ]);
    }
}
