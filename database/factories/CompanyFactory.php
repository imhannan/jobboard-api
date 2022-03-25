<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fullName' => $this->faker->unique()->company,
            'logo' => $this->faker->imageUrl(640, 480, 'animals', true),
            'website' => $this->faker->domainName,
            'phone' => $this->faker->phoneNumber,
            'location' => $this->faker->address,
            'desc' => $this->faker->sentences(10,true),
            'user_id' => $this->faker->unique()->numberBetween(1,10)
        ];
    }
}
