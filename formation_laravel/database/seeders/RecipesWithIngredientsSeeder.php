<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipesWithIngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $ingredients = Ingredient::factory()

        ->count(50)

        ->create();


       Recipe::factory()

        ->count(20)

        ->withUser()

        ->create()
        
        ->each(function(Recipe $recipe) use ($ingredients) {

            $ingredientIds = $ingredients->random(random_int(2, 6))->pluck('id');


            $recipe->ingredients()->attach($ingredientIds);


        });
    }
}
