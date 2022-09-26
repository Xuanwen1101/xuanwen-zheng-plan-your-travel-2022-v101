<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Plan;
use App\Models\Place;
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

        User::truncate();
        Plan::truncate();
        Place::truncate();

        
        User::factory()->count(2)->create();
        Plan::factory()->count(3)->create();
        Place::factory()->count(6)->create();
            
    }
}
