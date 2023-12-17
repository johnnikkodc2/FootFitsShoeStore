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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('address');
            $table->string('address_2');  
            $table->string('region');
            $table->string('city');
            $table->string('zip');
            $table->string('payment_namecard');
            $table->string('payment_cardnumber');
            $table->string('expiration');
            $table->string('cvv');
            // $table->json('cart_items');
            // $table->json('cart_prices');
            $table->decimal('total_price', 8, 2)->default(0.00);
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
