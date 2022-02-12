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
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'nis' => $this->faker->numberBetween(00000000, 88888888),
            'photo' => 'avatar/' . strtolower(substr($this->faker->name(), 0, 1)) . '.png'
        ];
    }
}
