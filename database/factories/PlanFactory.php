<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'plan_name' => $this->faker->sentence,
            // 'trans_type' => $this->faker->sentence,
            'type_id' => Type::all()->random(),
            'departure' => $this->faker->sentence,
            'destination' => $this->faker->sentence,
            'note' => $this->faker->paragraph,
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'user_id' => User::all()->random(),
        ];
    }
}
