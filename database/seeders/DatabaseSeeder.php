<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Plan;
use App\Models\Place;
use App\Models\Type;
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

        Plan::truncate();
        Place::truncate();
        Type::truncate();
        User::truncate();

        
        User::factory()->count(2)->create();
        Type::factory()->count(5)->create();
        Plan::factory()->count(3)->create();
        Place::factory()->count(6)->create();
            
    }
}
