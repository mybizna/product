<?php

namespace Modules\Product\Filament\Resources\StockResource\Pages;

use Modules\Base\Filament\Resources\Pages\ListingBase;
use Modules\Product\Filament\Resources\StockResource;

// Class List that extends ListBase
class Listing extends ListingBase
{
    protected static string $resource = StockResource::class;
}
