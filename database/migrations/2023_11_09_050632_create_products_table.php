<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('product_name');
            $table->string('product_brand');
            $table->integer('product_price');
            $table->integer('product_size');
            $table->integer('product_quantity');
            $table->string('product_color');
            $table->string('product_category');
            $table->string('product_description');
            $table->json('product_images')->nullable();
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
