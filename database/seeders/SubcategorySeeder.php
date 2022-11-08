<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            //celulares y tablets
            [
                'category_id' => 1,
                'name'=>'celulares y Smarphones',
                'slug'=>Str::slug('celulares y Smarphones'),
                'color'=>true
            ],
            [
                'category_id' => 1,
                'name'=>'Accesorios para Celulares',
                'slug'=>Str::slug('Accesorios para Celulares'),
                'color'=>true
            ],
            //Tv, Audio y Video
            [
                'category_id' => 2,
                'name'=>'TV y audio',
                'slug'=>Str::slug('TV y audio'),
            ],
            [
                'category_id' => 2,
                'name'=>'Audio',
                'slug'=>Str::slug('Audio'),
            ],
            [
                'category_id' => 2,
                'name'=>'Audio para Autos',
                'slug'=>Str::slug('Audio para Autos'),
            ],

            //consolas y video juegos
            [
                'category_id' => 3,
                'name'=>'Xbox',
                'slug'=>Str::slug('Xbox'),
            ],
            [
                'category_id' => 3,
                'name'=>'Play Station',
                'slug'=>Str::slug('Play Station'),
            ],
            [
                'category_id' => 3,
                'name'=>'Video juegos Para PC',
                'slug'=>Str::slug('Video juegos Para PC'),
            ],
            [
                'category_id' => 3,
                'name'=>'Nintendo',
                'slug'=>Str::slug('Nintendo'),
            ],
            //Computacion
            [
                'category_id' => 4,
                'name'=>'Laptops',
                'slug'=>Str::slug('Laptops'),
            ],
            [
                'category_id' => 4,
                'name'=>'PC escritorio',
                'slug'=>Str::slug('PC escritorio'),
            ],
            [
                'category_id' => 4,
                'name'=>'Almacenamieto',
                'slug'=>Str::slug('Almacenamieto'),
            ],
            [
                'category_id' => 4,
                'name'=>'Accesorios PC',
                'slug'=>Str::slug('Accesorios PC'),
            ],
            [
                'category_id' => 5,
                'name'=>'Mujeres',
                'slug'=>Str::slug('Mujeres'),
                'color'=>true,
                'size'=>true
            ],
            [
                'category_id' => 5,
                'name'=>'Hombres',
                'slug'=>Str::slug('Hombres'),
                'color'=>true,
                'size'=>true
            ],
            [
                'category_id' => 5,
                'name'=>'Lentes',
                'slug'=>Str::slug('Lentes'),
            ],
            [
                'category_id' => 5,
                'name'=>'Relojes',
                'slug'=>Str::slug('Relojes'),
            ],
        ];
        foreach ($subcategories as $subcategory) {
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
