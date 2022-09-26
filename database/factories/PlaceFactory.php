<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Plan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'place_name' => $this->faker->sentence,
            'address' => $this->faker->sentence,
            'google_id' => $this->faker->sentence,
            'note' => $this->faker->paragraph,
            'user_id' => User::all()->random(),
            'plan_id' => Plan::all()->random(),
        ];
    }
}
