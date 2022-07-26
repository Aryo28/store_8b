<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_category', function (Blueprint $table) {
            $table->id();

            //Brand table reference
            $table->unsignedBigInteger('brand_id');
            $table->Foreign('brand_id')->references('id')->on('brands')->onUpdate('cascade');

            //Category table reference
            $table->unsignedBigInteger('category_id');
            $table->Foreign('category_id')->references('id')->on('categories')->onUpdate('cascade');

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
        Schema::dropIfExists('brand_category');
    }
};
