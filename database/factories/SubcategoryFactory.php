<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subcategory>
 */
class SubcategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image' =>'subcategories'.DIRECTORY_SEPARATOR. $this->faker->image(public_path('storage'.DIRECTORY_SEPARATOR.'subcategories'), 640, 480, null, false)
        ];
    }
}
