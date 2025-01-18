<?php

namespace Modules\Product\Models;

use Modules\Base\Models\BaseModel;
use Illuminate\Database\Schema\Blueprint;

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


    public function migration(Blueprint $table): void
    {

        $table->string('name')->nullable();
        $table->string('slug')->nullable();

    }
}
