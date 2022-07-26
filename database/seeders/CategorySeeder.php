<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\models\Category;

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
                'name' => 'Cellphones and tables',
                'slug' => Str::slug('Cellphones and tables'),
                'icon' => '<i class="fa fa-mobile-screen"></i>',
            ],

            [
                'name' => 'Tv, Videop and Audio',
                'slug' => Str::slug('Tv, Videop and Audio'),
                'icon' => '<i class="fa fa-tv"></i>',
            ],

            [
                'name' => 'Console and Videogames',
                'slug' => Str::slug('Console and Videogames'),
                'icon' => '<i class="fa fa-gamepad"></i>',
            ],

            [
                'name' => 'Computing',
                'slug' => Str::slug('Computing'),
                'icon' => '<i class="fa fa-desktop"></i>',
            ],
            [
                'name' => 'Fashion',
                'slug' => Str::slug('Fashion'),
                'icon' => '<i class="fa fa-hat-wizard"></i>',
            ],
        ];

        foreach($categories as $category){
            //Select id from category
            $category = Category::factory(1)->create($category)->first();

            $brands = Brand::factory(4)->create();
            foreach($brands as $brand){
                $brand->categories()->attach($category->id);
            }
        }
    }
}
