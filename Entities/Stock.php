<?php

namespace Modules\Product\Models;

use Modules\Base\Models\BaseModel;

class Stock extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['product_id', 'store_id', 'stock_in', 'stock_out', 'note'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "product_stock";

}
