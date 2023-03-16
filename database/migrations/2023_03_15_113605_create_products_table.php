<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->text('product_short_desc');
            $table->text('product_long_desc');
            $table->integer('product_price');
            $table->integer('product_quantity');
            $table->integer('product_category_id');
            $table->integer('product_subcategory_id');
            $table->text('product_category_name');
            $table->text('product_subcategory_name');
            $table->string('product_image');
            $table->text('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
