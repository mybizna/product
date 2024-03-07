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

        $this->fields->increments('id')->html('hidden');
        $this->fields->string('name')->nullable()->html('text');
        $this->fields->integer('description')->nullable()->html('editor');
        $this->fields->integer('category_id')->nullable()->html('recordselect');
        $this->fields->integer('sub_category_id')->nullable()->html('recordselect');
        $this->fields->integer('tags')->nullable()->html('tags');
        $this->fields->integer('sku')->nullable()->html('text');
        $this->fields->integer('discount')->nullable()->html('records');
        $this->fields->integer('size')->nullable()->html('records');
        $this->fields->integer('color')->nullable()->html('records');
        $this->fields->integer('width')->nullable()->html('text');
        $this->fields->integer('height')->nullable()->html('text');
        $this->fields->integer('weight')->nullable()->html('text');
        $this->fields->integer('shipping_cost', 20, 2)->default(0.00)->html('amount');
        $this->fields->decimal('cost_price', 20, 2)->default(0.00)->html('amount');
        $this->fields->decimal('sale_price', 20, 2)->default(0.00)->html('amount');
    }

    /**
     * List of structure for this model.
     */
    public function structure($structure): array
    {

        $structure['table'] = ['name', 'description', 'category_id', 'tax_cat_id', 'vendor', 'cost_price', 'sale_price'];

        $structure['form'] = [
            ['label' => 'Product Name', 'class' => 'col-span-full', 'fields' => ['name']],
            ['label' => 'Product Detail', 'class' => 'col-span-full md:col-span-6ull md:col-span-6ull  md:col-span-6 md:pr-2', 'fields' => ['product_type_id', 'category_id', 'tax_cat_id']],
            ['label' => 'Other Product Setting ', 'class' => 'col-span-full md:col-span-6ull  md:col-span-6 md:pr-2', 'fields' => ['vendor', 'cost_price', 'sale_price']],
            ['label' => '', 'class' => 'col-span-full', 'tabs' => [
                ['label' => 'Size', 'class' => 'col-span-full', 'fields' => ['size']],
                ['label' => 'Color', 'class' => 'col-span-full', 'fields' => ['color']],
            ]], 
            ['label' => '', 'class' => 'col-span-full', 'tabs' => [
                ['label' => 'Discount', 'class' => 'col-span-full', 'fields' => ['discount']],
            ]],
        ];

        $structure['filter'] = ['name', 'product_type_id', 'category_id', 'tax_cat_id'];

        return $structure;
    }
}
