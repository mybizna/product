<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;

class Product extends BaseModel
{

    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['name', 'type_id', 'category_id', 'vendor', 'cost_price', 'sale_price', 'size', 'color', 'discount', 'width', 'height', 'weight', 'shipping_cost', 'sku', 'tags', 'description', 'image', 'gallery'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "product";

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
        $this->fields->string('name')->nullable()->html('text');
        $this->fields->integer('description')->nullable()->html('editor');
        $this->fields->integer('category_id')->nullable()->html('recordselect')->relation(['product', 'category']);
        $this->fields->integer('type_id')->nullable()->html('recordselect')->relation(['product', 'type']);
        $this->fields->integer('vendor')->nullable()->html('recordselect')->relation(['partner']);
        $this->fields->integer('image')->nullable()->html('image');
        $this->fields->integer('gallery')->nullable()->html('gallery');
        $this->fields->integer('tags')->nullable()->html('tags');
        $this->fields->integer('sku')->nullable()->html('text');
        $this->fields->integer('discount')->nullable()->html('records');
        $this->fields->integer('size')->nullable()->html('records');
        $this->fields->integer('color')->nullable()->html('records');
        $this->fields->integer('width')->nullable()->html('text');
        $this->fields->integer('height')->nullable()->html('text');
        $this->fields->integer('weight')->nullable()->html('text');
        $this->fields->decimal('shipping_cost', 20, 2)->default(0.00)->html('amount');
        $this->fields->decimal('cost_price', 20, 2)->default(0.00)->html('amount');
        $this->fields->decimal('sale_price', 20, 2)->default(0.00)->html('amount');

    }




}
