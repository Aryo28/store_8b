<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->float('price');

            //Subcategory table reference
            $table->unsignedBigInteger('subcategory_id');
            $table->Foreign('subcategory_id')->references('id')->on('subcategories')->onUpdate('cascade');

            //Brand table reference
            $table->unsignedBigInteger('brand_id');
            $table->Foreign('brand_id')->references('id')->on('brands')->onUpdate('cascade');

            $table->integer('quantity')->nullable(); 
            $table->enum('status', [Product::DRAFT, Product::RELEASED])->default(Product::DRAFT);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
