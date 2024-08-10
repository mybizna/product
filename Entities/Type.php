<?php

namespace Modules\Product\Models;

use Modules\Base\Models\BaseModel;

class Type extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['name', 'slug'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "product_type";

}
