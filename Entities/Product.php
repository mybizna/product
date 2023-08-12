<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Classes\Views\FormBuilder;
use Modules\Base\Classes\Views\ListTable;
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
     * Function for defining list of fields in table view.
     *
     * @return ListTable
     */
    public function listTable(): ListTable
    {
        // listing view fields
        $fields = new ListTable();

        $fields->name('name')->type('text')->ordering(true);
        $fields->name('product_type_id')->type('text')->ordering(true);
        $fields->name('category_id')->type('text')->ordering(true);
        $fields->name('tax_cat_id')->type('text')->ordering(true);
        $fields->name('vendor')->type('text')->ordering(true);
        $fields->name('cost_price')->type('text')->ordering(true);
        $fields->name('sale_price')->type('text')->ordering(true);

        return $fields;

    }

    /**
     * Function for defining list of fields in form view.
     *
     * @return FormBuilder
     */
    public function formBuilder(): FormBuilder
    {
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('name')->type('text')->group('w-1/2');
        $fields->name('product_type_id')->type('text')->group('w-1/2');
        $fields->name('category_id')->type('text')->group('w-1/2');
        $fields->name('tax_cat_id')->type('text')->group('w-1/2');
        $fields->name('vendor')->type('text')->group('w-1/2');
        $fields->name('cost_price')->type('text')->group('w-1/2');
        $fields->name('sale_price')->type('text')->group('w-1/2');

        return $fields;

    }

    /**
     * Function for defining list of fields in filter view.
     *
     * @return FormBuilder
     */
    public function filter(): FormBuilder
    {
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('name')->type('text')->group('w-1/6');
        $fields->name('product_type_id')->type('text')->group('w-1/6');
        $fields->name('category_id')->type('text')->group('w-1/6');
        $fields->name('tax_cat_id')->type('text')->group('w-1/6');
        $fields->name('vendor')->type('text')->group('w-1/6');

        return $fields;

    }
    /**
     * List of fields to be migrated to the datebase when creating or updating model during migration.
     *
     * @param Blueprint $table
     * @return void
     */
    public function migration(Blueprint $table): void
    {
        $table->increments('id');
        $table->string('name')->nullable();
        $table->integer('product_type_id')->nullable();
        $table->integer('category_id')->nullable();
        $table->integer('tax_cat_id')->nullable();
        $table->integer('vendor')->nullable();
        $table->decimal('cost_price', 20, 2)->default(0.00);
        $table->decimal('sale_price', 20, 2)->default(0.00);
    }
}
