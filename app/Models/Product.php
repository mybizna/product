<?php

namespace Modules\Product\Models;

use Modules\Base\Models\BaseModel;
use Modules\Product\Models\Category;
use Modules\Product\Models\Type;

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
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Add relationship to Type
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

}
