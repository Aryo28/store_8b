<?php

namespace Database\Factories;

use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        $name = $this->faker->sentence(2);

        //Asign categories randonmly
        $subcategory = Subcategory::all()->random();

        //Get categories
        $category = $subcategory->category;


        //link brand with categories
        $brands = $category->brands->random();

        //If subcategory has color we asign quantyty = null
        if($subcategory->color){
            $quantity = null;
        }else{
            $quantity = 15;
        }


        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomElement(([19.99, 49.99, 99.99])),
            'subcategory_id' => $subcategory->id,
            'brand_id' => $brands->id,
            'quantity' => $quantity,
            'status' => 2
        ];
    }
}
