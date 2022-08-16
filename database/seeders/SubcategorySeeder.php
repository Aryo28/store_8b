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
            [
                'category_id' => 1,
                'name' => 'Cellphones and Smartphones',
                'slug' => Str::slug('Cellphones and Smartphones'),
                'color' => true,
            ],
            [

                'category_id' => 1,
                'name' => 'Cellphones and Accesories',
                'slug' => Str::slug('Cellphones and Accesories'),
                'color' => true,
            ],
            [

                'category_id' => 1,
                'name' => 'Smartwatches',
                'slug' => Str::slug('Smartwatches'),
                'color' => true,
            ],
            [
                'category_id' => 2,
                'name' => 'TV and Audio',
                'slug' => Str::slug('TV and Audio'),
                'color' => true,
            ],
            [
                'category_id' => 2,
                'name' => 'Audio',
                'slug' => Str::slug('Audio'),
                'color' => true,
            ],
            [
                'category_id' => 2,
                'name' => 'Car Audio',
                'slug' => Str::slug('Car Audio'),
                'color' => true,
            ],
            [
                'category_id' => 3,
                'name' => 'Xbox',
                'slug' => Str::slug('Xbox'),
                'color' => false,
            ],
            [
                'category_id' => 3,
                'name' => 'PSP',
                'slug' => Str::slug('PSP'),
                'color' => false,
            ],
            [
                'category_id' => 3,
                'name' => 'Pc Games',
                'slug' => Str::slug('Pc Games'),
                'color' => false,
            ],
            [
                'category_id' => 3,
                'name' => 'Nintendo',
                'slug' => Str::slug('Nintendo'),
                'color' => false,
            ],
            [
                'category_id' => 4,
                'name' => 'Laptop',
                'slug' => Str::slug('Laptop'),
                'color' => true,
            ],
            [
                'category_id' => 4,
                'name' => 'PC Desktop',
                'slug' => Str::slug('PC Desktop'),
                'color' => true,
            ],
            [
                'category_id' => 4,
                'name' => 'Storage',
                'slug' => Str::slug('Storage'),
                'color' => true,
            ],
            [
                'category_id' => 4,
                'name' => 'Computer Accesories',
                'slug' => Str::slug('Computer Accesories'),
                'color' => true,
            ],
            [
                'category_id' => 5,
                'name' => 'Women ',
                'slug' => Str::slug('Women'),
                'color' => true,
                'size' => true,
            ],
            [
                'category_id' => 5,
                'name' => 'Men',
                'slug' => Str::slug('Men'),
                'color' => true,
                'size' => true,
            ],
            [
                'category_id' => 5,
                'name' => 'Watches',
                'slug' => Str::slug('Watches'),
                'color' => true,
                
            ],
            [
                'category_id' => 5,
                'name' => 'Glasses',
                'slug' => Str::slug('Glasses'),
                'color' => true,
            ],

        ];

        foreach ($subcategories as $subcategory) {
            Subcategory::factory(1)->create($subcategory);
        }


    }
}
