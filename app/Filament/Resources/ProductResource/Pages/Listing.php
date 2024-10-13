<?php

namespace Modules\Product\Filament\Resources\ProductResource\Pages;

use Modules\Base\Filament\Resources\Pages\ListingBase;
use Modules\Product\Filament\Resources\ProductResource;

// Class List that extends ListBase
class Listing extends ListingBase
{
    protected static string $resource = ProductResource::class;
}
