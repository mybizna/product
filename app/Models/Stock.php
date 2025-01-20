<?php

namespace Modules\Product\Models;

use Modules\Base\Models\BaseModel;
use Modules\Product\Models\Product;
use Modules\Product\Models\Store;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    /**
     * Add relationship to Product
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Add relationship to Store
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }


    public function migration(Blueprint $table): void
    {

        $table->string('note')->nullable();
        $table->unsignedBigInteger('product_id')->nullable();
        $table->unsignedBigInteger('store_id')->nullable();
        $table->integer('stock_in')->nullable();
        $table->integer('stock_out')->nullable();
    }

    public function post_migration(Blueprint $table): void
    {
        $table->foreign('product_id')->references('id')->on('product_product')->onDelete('set null');
        $table->foreign('store_id')->references('id')->on('product_store')->onDelete('set null');
    }
}
