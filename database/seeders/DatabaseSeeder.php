<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // bisogna chiamare tutti gli altri seeder che vogliamo eseguire
        // vanno messi dentro un array
        $this->call([
            TrainsSeeder::class,
            StationsSeeder::class
        ]);
    }
}
