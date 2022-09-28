<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MarkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "student_id" => $this->faker->numberBetween(1,10),
            "term" =>  $this->faker->randomElement(['one', 'two']),
            "maths" =>  $this->faker->numberBetween(1,100),
            "science" => $this->faker->numberBetween(1,100),
            "history" => $this->faker->numberBetween(1,100)
        ];
    }
}
