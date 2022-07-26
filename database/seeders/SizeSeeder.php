<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::whereHas('subcategory', function (Builder $query){
            $query->where('color', true)
            ->where('size', false);
        })->get();    

        $sizes = ['Size S', 'Size M', 'Size L'];

        foreach($products as $product){
            foreach ($sizes as $size){
                $product->size()->create([
                        'name' => $size
                ]);
            }
        }

    }

   
}
