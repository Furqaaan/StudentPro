<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             "name" => $this->faker->name(10),
             "age" =>  $this->faker->numberBetween(1,20),
             "gender" => $this->faker->randomElement(['M', 'F']),
             "teacher_id" => $this->faker->numberBetween(1,10)
        ];
    }
}
