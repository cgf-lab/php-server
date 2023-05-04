<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = $this->faker->randomElement(['M', 'F']);
        $status = $this->faker->randomElement(['Active', 'Inactive']);
        $name = $this->faker->name($gender);
        return [
            'name' => $name,
            'gender' => $gender,
            'birthday' => $this->faker->date('Y-m-d'),
            'status' => $status,
            'group' => $this->faker->randomElement(['A', 'B', 'C']),
        ];
    }
}
