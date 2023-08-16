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
    protected $fillable = ['name', 'product_type_id', 'category_id', 'tax_cat_id', 'vendor', 'cost_price', 'sale_price'];

    /**
     * The fields that are to be render when performing relationship queries.
     *
     * @var array<string>
     */
    public $rec_names = ['name'];

    /**
     * List of tables names that are need in this model during migration.
     *
     * @var array<string>
     */
    public array $migrationDependancy = [];

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

        $this->fields->increments('id')->html('text');
        $this->fields->string('name')->nullable()->html('text');
        $this->fields->integer('product_type_id')->nullable()->html('text');
        $this->fields->integer('category_id')->nullable()->html('text');
        $this->fields->integer('tax_cat_id')->nullable()->html('text');
        $this->fields->integer('vendor')->nullable()->html('text');
        $this->fields->decimal('cost_price', 20, 2)->default(0.00)->html('amount');
        $this->fields->decimal('sale_price', 20, 2)->default(0.00)->html('amount');
    }

    /**
     * List of structure for this model.
     */
    public function structure($structure): array
    {

        $structure = [
            'table' => ['name', 'product_type_id', 'category_id', 'tax_cat_id', 'vendor', 'cost_price', 'sale_price'],
            'form' => [
                ['label' => 'Name', 'class' => 'w-full', 'fields' => ['name']],
                ['label' => 'Product', 'class' => 'w-1/2', 'fields' => ['product_type_id', 'category_id', 'tax_cat_id']],
                ['label' => 'Setting', 'class' => 'w-1/2', 'fields' => ['vendor', 'cost_price', 'sale_price']],
            ],
            'filter' => ['name', 'product_type_id', 'category_id', 'tax_cat_id'],
        ];

        return $structure;
    }
}
