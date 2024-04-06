<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'adresse' => $this->faker->address(),
            'name' => fake()->name(),
            'lname' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),        
            'phone' =>$this->faker->e164PhoneNumber,
            'cin' =>$this->faker->numberBetween(100000000,2000000000)
        ];
    }
}
