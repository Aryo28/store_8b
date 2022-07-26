<?php

namespace Database\Factories;

use App\Models\Subcategory;
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
        $fakerFilesName = $this->faker->image(storage_path("app/public/subcategories"), 640, 480);
        return [
            //
            #'image' => 'categories/'.$this->faker->image('storage/app/public/categories', 640, 480, null, false)
            
            'image' => 'subcategories/'.$this->faker->imageUrl(640, 480), 
            'image' => "subcategories/".basename($fakerFilesName)
           
        ];
    }
}
