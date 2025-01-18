<?php

namespace Modules\Product\Models;

use Modules\Base\Models\BaseModel;
use Modules\Product\Models\Category;
use Modules\Product\Models\Type;
use Illuminate\Database\Schema\Blueprint;

class Product extends BaseModel
{

    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['name', 'type_id', 'category_id', 'vendor', 'cost_price', 'sale_price', 'size', 'color', 'discount', 'width', 'height', 'weight', 'shipping_cost', 'sku', 'tags', 'description', 'image', 'gallery'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "product_product";

    /**
     * Add relationship to Category
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Add relationship to Type
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }


    public function migration(Blueprint $table): void
    {
        $table->id();

        $table->string('name')->nullable();
        $table->text('description')->nullable();
        $table->foreignId('category_id')->nullable()->constrained(table: 'product_category')->onDelete('set null');
        $table->foreignId('type_id')->nullable()->constrained(table: 'product_type')->onDelete('set null');
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

    }
}
