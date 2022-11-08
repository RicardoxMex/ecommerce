<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'url'=>'products'.DIRECTORY_SEPARATOR.$this->faker->image(public_path('storage'.DIRECTORY_SEPARATOR.'products'), 640, 480,null, false)
        ];
    }
}
