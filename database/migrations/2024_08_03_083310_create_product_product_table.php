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
        Schema::create('product_product', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('category_id')->constrained('product_category')->onDelete('cascade')->nullable()->index('product_product_category_id');
            $table->foreignId('type_id')->constrained('product_type')->onDelete('cascade')->nullable()->index('product_product_type_id');
            $table->bigInteger('vendor')->nullable();
            $table->string('image')->nullable();
            $table->string('gallery')->nullable();
            $table->string('tags')->nullable();
            $table->string('sku')->nullable();
            $table->bigInteger('discount')->nullable();
            $table->bigInteger('size')->nullable();
            $table->bigInteger('color')->nullable();
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->decimal('shipping_cost', 20, 2)->default(0.00);
            $table->decimal('cost_price', 20, 2)->default(0.00);
            $table->decimal('sale_price', 20, 2)->default(0.00);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_product');
    }
};
