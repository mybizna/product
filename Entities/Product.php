<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;
use Modules\Core\Classes\Views\FormBuilder;
use Modules\Core\Classes\Views\ListTable;

class Product extends BaseModel
{

    protected $fillable = ['name', 'product_type_id', 'category_id', 'tax_cat_id', 'vendor', 'cost_price', 'sale_price'];
    public $migrationDependancy = [];
    protected $table = "product";

    public function listTable()
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

    public function formBuilder()
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

    public function filter()
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
     * List of fields for managing postings.
     *
     * @param Blueprint $table
     * @return void
     */
    public function migration(Blueprint $table)
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
