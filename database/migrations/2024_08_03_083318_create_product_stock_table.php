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
        Schema::create('product_stock', function (Blueprint $table) {
            $table->id();

            $table->string('note')->nullable();
            $table->foreignId('product_id')->constrained('product_product')->onDelete('cascade')->nullable()->index('product_stock_product_id');
            $table->foreignId('store_id')->constrained('product_store')->onDelete('cascade')->nullable()->index('product_stock_store_id');
            $table->integer('stock_in')->nullable();
            $table->integer('stock_out')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_stock');
    }
};
