<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(10,true),
            'slug' => $this->faker->slug(10),
            'location' => $this->faker->address,
            'link' => $this->faker->domainName,
            'desc' => $this->faker->sentences(10,true),
            'user_id' => $this->faker->numberBetween(1,10)
        ];
    }
}
