<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CreatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle(),
            'bio' => $this->faker->paragraph()
        ];
    }
}
