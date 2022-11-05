<?php

namespace Database\Seeders;

use App\Models\Category;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'name'=>'Celulares y tablets',
                'slug'=>Str::slug('Celulares y tablets'),
                'icon'=>'<li class="fas fa-mobile-alt"></li>',
            ],
            [
                'name'=>'TV, audio, video',
                'slug'=>Str::slug('TV, audio, video'),
                'icon'=>'<li class="fas fa-tv"></li>',
            ],
            [
                'name'=>'consola y video juegos',
                'slug'=>Str::slug('Consola y video juegos'),
                'icon'=>'<li class="fas fa-gamepad"></li>',
            ],
            [
                'name'=>'Computacion',
                'slug'=>Str::slug('Computacion'),
                'icon'=>'<li class="fas fa-laptop"></li>',
            ],
            [
                'name'=>'Moda',
                'slug'=>Str::slug('Moda'),
                'icon'=>'<li class="fas fa-tshirt"></li>',
            ],
        ];

        foreach ($categories as $category ) {
            Category::factory()->create($category);
        }
    }
}
