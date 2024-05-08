<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portfolio>
 */
class PortfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word,
            'description' => fake()->text($maxNbChars = 100),
            'img' => fake()->url('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.com%2Ffree-photos-vectors%2Fweb-developer&psig=AOvVaw0Em_WWKY1l2DZe0-DlK9mc&ust=1714701129524000&source=images&cd=vfe&opi=89978449&ved=2ahUKEwjviIXP7e2FAxWaSGwGHWBIAxMQjRx6BAgAEBQ')
        ];
    }
}
