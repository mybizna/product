<?php
namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Schema\Blueprint;
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
    public function parent(): BelongsTo
    {

        return $this->belongsTo(Payment::class);
    }

    public function migration(Blueprint $table): void
    {

        $table->string('name')->nullable();
        $table->unsignedBigInteger('parent_id')->nullable();

    }

    public function post_migration(Blueprint $table): void
    {
        $table->foreign('parent_id')->references('id')->on('product_category')->onDelete('set null');
    }

}
