<?php

namespace Modules\Product\Filament\Resources\StoreResource\Pages;

use Modules\Base\Filament\Resources\Pages\CreatingBase;
use Modules\Product\Filament\Resources\StockResource;

// Class List that extends ListBase
class Creating extends CreatingBase
{
    protected static string $resource = StockResource::class;
}
