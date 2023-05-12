<?php

namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class StationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for($i = 0; $i < 10; $i++) {
            $newStation = new Station();
    
            $newStation->name = $faker->city();
    
            $newStation->save();
        }

    }
}
