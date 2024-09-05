<?php

namespace Modules\Product\Models;

use Modules\Account\Models\Payment;
use Modules\Base\Models\BaseModel;

class Category extends BaseModel
{

    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['name', 'parent_id'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "product_category";

    /**
     * Add relationship to Parent
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {

        return $this->belongsTo(Payment::class);
    }

}
