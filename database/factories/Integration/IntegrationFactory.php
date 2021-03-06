<?php

namespace Database\Factories\Integration;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Integration\Integration>
 */
class IntegrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'marketplace' => $this->faker->sentences(4, true),
            'usernam' => $this->faker->username(),
            'password' => $this->faker->password(),
        ];
    }
}
