<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            //
            'title' => $this->faker->name(),
            'price' => $this->faker->numberBetween($int1 = 5, $int2 = 60),
            'description' => $this->faker->text($maxNbChars = 200) ,
            'image' => $this->faker->imageUrl($width= 300, $height=300 , 'cats') ,

        ];
    }
}
