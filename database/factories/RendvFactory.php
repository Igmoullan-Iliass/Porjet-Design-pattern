<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rendv>
 */
class RendvFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "email" => $this->faker->unique()->safeEmail(),
            "username" => $this->faker->unique()->userName(),
            "telephone"=>$this->faker->unique()->phoneNumber(),
            "ville"=>$this->faker->unique()->city,
            "event_start"=>$this->faker->unique()->dateTime,
         
        ];
    }
}
