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
            $table->id()->comment('Unique identifier on products');
            $table->string('sku')->unique()->comment('Sku of the product');
            $table->string('name')->comment('Name of the product');
            $table->double('price',10,2)->comment('The price of the product');
            $table->string('product_attribute')->comment('One of the product-specific attributes and its value');
            $table->timestamps();
            $table->softDeletes();
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
