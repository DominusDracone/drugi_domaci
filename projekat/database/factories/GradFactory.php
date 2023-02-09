<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grad>
 */
class GradFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       
        return [
            'ime' => $this ->faker->city(),
            'brStanovnika' => $this->faker->numberBetween(1000, 500000),
            'drzava' => $this ->faker->country(),
        ];
    }
}
