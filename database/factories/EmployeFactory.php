<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'registration_number' => $this->faker->numberBetween(),
            'fullname' => $this->faker->name(),
            'departement' => $this->faker->word(),
            'hiring_date' => $this->faker->date(),
            'phone' => $this->faker->numberBetween(),
            'adresse' => $this->faker->address(),
            'city' => $this->faker->city()
        ];
    }
}
