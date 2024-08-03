<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;

class Stock extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['product_id', 'store_id','stock_in', 'stock_out', 'note'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "product_stock";

    /**
     * List of fields to be migrated to the datebase when creating or updating model during migration.
     *
     * @param Blueprint $table
     * @return void
     */
    public function fields(Blueprint $table = null): void
    {
        $this->fields = $table ?? new Blueprint($this->table);

        $this->fields->increments('id')->html('hidden');
        $this->fields->string('note')->html('text');
        $this->fields->integer('product_id')->nullable()->html('text');
        $this->fields->integer('store_id')->nullable()->html('text');
        $this->fields->integer('stock_in')->nullable()->html('text');
        $this->fields->integer('stock_out')->nullable()->html('text');

    }

 



}
