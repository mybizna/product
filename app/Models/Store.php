<?php
namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Models\BaseModel;
use Modules\Core\Models\Branch;

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

        $table->string('name')->nullable();
        $table->unsignedBigInteger('branch_id')->nullable();
    }

    public function post_migration(Blueprint $table): void
    {
        $table->foreign('branch_id')->references('id')->on('core_branch')->onDelete('set null');
    }
}
