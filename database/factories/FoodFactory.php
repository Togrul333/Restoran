<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'composition_id' => $this->faker->numberBetween($min = 1, $max = 6),
            'name' => $this->faker->name,
            'slug' => Str::slug($this->faker->name),
            'description' => $this->faker->text,
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'price'=>$this->faker->numberBetween($min = 1, $max = 100),
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
    }
}
