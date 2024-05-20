<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RandomPersonDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "firstname" => $this->faker->name(),
            "lastname" => $this->faker->name(),
            "contact" => $this->faker->phoneNumber(),
            "mail" => $this->faker->unique()->safeEmail(),
            "description" => $this->faker->sentence(),
            "birthyear" => $this->faker->year()

        ];
    }
}
