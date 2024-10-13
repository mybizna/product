<?php

namespace Modules\Product\Filament\Resources\StoreResource\Pages;

use Modules\Base\Filament\Resources\Pages\EditingBase;
use Modules\Product\Filament\Resources\StockResource;

// Class List that extends ListBase
class Editing extends EditingBase
{
    protected static string $resource = StockResource::class;
}
