<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;
use Modules\Base\Classes\Views\FormBuilder;
use Modules\Base\Classes\Views\ListTable;

class Detail extends BaseModel
{

    /**
     * The fields that can be filled
     * @var array<string>
     */
    protected $fillable = ['product_id', 'trn_no', 'stock_in', 'stock_out'];

    /**
     * List of tables names that are need in this model during migration.
     * @var array<string>
     */
    public array $migrationDependancy = [];

    /**
     * The table associated with the model.
     * @var string
     */
    protected $table = "product_detail";

    public function  listTable(): ListTable
    {
        // listing view fields
        $fields = new ListTable();

        $fields->name('product_id')->type('text')->ordering(true);
        $fields->name('trn_no')->type('text')->ordering(true);
        $fields->name('stock_in')->type('text')->ordering(true);
        $fields->name('stock_out')->type('text')->ordering(true);

        return $fields;

    }

    public function formBuilder()
    {
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('product_id')->type('text')->group('w-1/2');
        $fields->name('trn_no')->type('text')->group('w-1/2');
        $fields->name('stock_in')->type('text')->group('w-1/2');
        $fields->name('stock_out')->type('text')->group('w-1/2');

        return $fields;

    }

    public function filter(): FormBuilder
    {
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('product_id')->type('text')->group('w-1/6');
        $fields->name('trn_no')->type('text')->group('w-1/6');
        $fields->name('stock_in')->type('text')->group('w-1/6');
        $fields->name('stock_out')->type('text')->group('w-1/6');

        return $fields;

    }
    /**
     * List of fields to be migrated to the datebase when creating or updating model during migration.
     *
     * @param Blueprint $table
     * @return void
     */
    public function migration(Blueprint $table)
    {
        $table->increments('id');
        $table->integer('product_id')->nullable();
        $table->integer('trn_no')->nullable();
        $table->integer('stock_in')->nullable();
        $table->integer('stock_out')->nullable();
    }
}
