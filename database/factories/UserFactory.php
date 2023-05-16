<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fname' => fake()->name(),
            'lname' => fake()->name(),
            'email' => fake()->email(),
            'country' => fake()->name(),
            'city' => fake()->name(),
            'address' => fake()->name(),
            'zipcode' => fake()->name(),
            'phone' => fake()->name(),
            'password' => fake()->name(),
            'password' => fake()->name(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
