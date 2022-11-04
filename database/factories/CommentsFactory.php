<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comments>
 */
class CommentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name' => fake()->name,
            'email'=>fake()->email,
            'ip' => fake()->ipv4(),
            'text'=>fake()->realText(100),
            'commentable_type' => Product::class,
            'commentable_id'=> Product::inRandomOrder()->first()->id,
        ];
    }
}
