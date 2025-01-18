<?php

namespace Modules\Product\Models;

use Modules\Base\Models\BaseModel;
use Modules\Core\Models\Branch;
use Illuminate\Database\Schema\Blueprint;

class Store extends BaseModel
{

    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['name', 'branch_id'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "product_store";

    /**
     * Add relationship to Branch
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }


    public function migration(Blueprint $table): void
    {
        $table->id();

        $table->string('name')->nullable();
        $table->foreignId('branch_id')->nullable()->constrained(table: 'core_branch')->onDelete('set null');

    }
}
