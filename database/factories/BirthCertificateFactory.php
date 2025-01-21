<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=BirthCertificate>
 */
class BirthCertificateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName,
            'health_status' => fake()->randomElement(['positive', 'negative']),
            'hospital_name' => fake()->text(10),
            'hospital_code' => fake()->unique()->numberBetween(1, 100),
            'parents_surname' => fake()->lastName,
            'birth_date' => fake()->date,
        ];
    }
}
