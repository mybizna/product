<?php
namespace Modules\Product\Models;

use Base\Casts\Money;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Models\BaseModel;
use Modules\Product\Models\Category;
use Modules\Product\Models\Type;

class Product extends BaseModel
{

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'total' => Money::class, // Use the custom MoneyCast
    ];
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

        $table->string('name')->nullable();
        $table->text('description')->nullable();
        $table->unsignedBigInteger('category_id')->nullable();
        $table->unsignedBigInteger('type_id')->nullable();
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
        $table->integer('shipping_cost')->default(0);
        $table->integer('cost_price')->default(0);
        $table->integer('sale_price')->default(0);
        $table->string('currency')->default('USD');

    }

    public function post_migration(Blueprint $table): void
    {
        $table->foreign('category_id')->references('id')->on('product_category')->onDelete('set null');
        $table->foreign('type_id')->references('id')->on('product_type')->onDelete('set null');
    }
}
