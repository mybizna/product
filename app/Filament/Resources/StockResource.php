<?php

namespace Modules\Product\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Product\Models\Stock;

class StockResource extends BaseResource
{
    protected static ?string $model = Stock::class;

    protected static ?string $slug = 'product/stock';

    protected static ?string $navigationGroup = 'Product';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


}
