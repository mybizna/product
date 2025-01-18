<?php

namespace Modules\Product\Models;

use Modules\Account\Models\Payment;
use Modules\Base\Models\BaseModel;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    public function parent(): BelongsTo
    {

        return $this->belongsTo(Payment::class);
    }


    public function migration(Blueprint $table): void
    {

        $table->string('name')->nullable();
        $table->foreignId('parent_id')->nullable()->constrained(table: 'product_category')->onDelete('set null');

    }
}
