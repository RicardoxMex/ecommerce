<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Celulares y tablets',
                'slug' => Str::slug('celulares y tablets'),
                'icon'=>'<i class="fas fa-mobile-alt"></i>'
            ],
            [
                'name' => 'Tv, Audio y Video',
                'slug' => Str::slug('Tv, Audio y Video'),
                'icon'=>'<i class="fas fa-tv"></i>'
            ],
            [
                'name' => 'Consolas y Video Juegos',
                'slug' => Str::slug('Consolas y Video Juegos'),
                'icon'=>'<i class="fas fa-gamepad"></i>'
            ],
            [
                'name' => 'Computacion',
                'slug' => Str::slug('Computacions'),
                'icon'=>'<i class="fas fa-laptop"></i>'
            ],
            [
                'name' => 'Moda',
                'slug' => Str::slug('Moda'),
                'icon'=>'<i class="fas fa-tshirt"></i>'
            ]
        ];

        foreach ($categories as $category) {
            $category = Category::factory(1)->create($category)->first();
            $brands = Brand::factory(4)->create();
            foreach ($brands as $brand ) {
                $brand->categories()->attach($category->id);
            }
        }
    }
}
