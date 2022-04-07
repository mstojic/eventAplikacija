<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Location;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::all();
        return [
            'name' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomNumber(3),
            'date' => $this->faker->dateTimeThisYear,
            'location_id' => Location::all()->random()->id,
            'organizer_id' => $users->random()->id
        ];
    }
}
