<?php

namespace Modules\Product\Entities;

use Modules\Base\Entities\BaseModel;

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
    protected $table = "product";

}
