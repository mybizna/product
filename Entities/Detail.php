<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;
use Modules\Core\Classes\Views\FormBuilder;
use Modules\Core\Classes\Views\ListTable;

class Detail extends BaseModel
{

    protected $fillable = ['product_id', 'trn_no', 'stock_in', 'stock_out'];
    public $migrationDependancy = [];
    protected $table = "product_detail";

    public function listTable()
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

    public function filter()
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
     * List of fields for managing postings.
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
