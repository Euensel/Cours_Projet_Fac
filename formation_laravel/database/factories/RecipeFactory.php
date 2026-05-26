<?php

namespace Database\Factories;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends Factory<Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

    $title = fake()->words(random_int(3,9), asText: true);

        return [
            'title' => str($title)->title()->toString(),
            'user_id' => fake()->boolean() ? User::factory() : null,
        ];
    }



    public function withUser(): static
    {
        return $this->state(fn () => [
            'user_id' => User::factory(),
        ]);
    }
}
