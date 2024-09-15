<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookmarkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $faker->realText($faker->numberBetween(10,25)),
            'url' => $faker->url(),
            'description' => $faker->realText($faker->nuberBetween(50,200))
        ];
    }
};
