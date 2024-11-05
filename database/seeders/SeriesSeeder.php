<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Series;
use Carbon\Carbon;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
        $currentTimeStamp = Carbon::now();
        
        Series::insert([
            
        [
            'title' => 'Stranger Things' , 
            'description' => 'kids battle paranormal entities', 
            'image' => 'stranger-things.jpg',
            'year' => 2016, 
            'created_at' => $currentTimeStamp,
            'updated_at' => $currentTimeStamp
        ],

        [
            'title' => 'Vampire Diaries' , 
            'description' => 'drama with two vampire brothers', 
            'image' => 'vampire-diaries.jpg',
            'year' => 2009, 
            'created_at' => $currentTimeStamp,
            'updated_at' => $currentTimeStamp
        ],

        [
            'title' => 'Rick and Morty' , 
            'description' => 'mad scientist rick brings morty on abnormal adventures', 
            'image' => 'rick-and-morty.jpg',
            'year' => 2013, 
            'created_at' => $currentTimeStamp,
            'updated_at' => $currentTimeStamp
        ],

        [
            'title' => 'Squid Game' , 
            'description' => 'a game of survival of the fittest', 
            'image' => 'squid-game.jpg',
            'year' => 2021, 
            'created_at' => $currentTimeStamp,
            'updated_at' => $currentTimeStamp
        ],

        [
            'title' => 'The Watcher' , 
            'description' => 'a stalker watches a house and its owners every move',  
            'image' => 'the-watcher.jpg',
            'year' => 2022, 
            'created_at' => $currentTimeStamp,
            'updated_at' => $currentTimeStamp
        ]
            
            ]
        );
    }
}
