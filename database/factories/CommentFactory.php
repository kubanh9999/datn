<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => \App\Models\Product::factory(), 
            'user_id' => \App\Models\User::factory(), 
            'star' => $this->faker->numberBetween(1, 5),  
            'content' => $this->faker->sentence(),  
        ];
    }
}
