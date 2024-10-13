<?php

namespace Modules\Product\Filament\Resources\CategoryResource\Pages;

use Modules\Base\Filament\Resources\Pages\ListingBase;
use Modules\Product\Filament\Resources\CategoryResource;

// Class List that extends ListBase
class Listing extends ListingBase
{
    protected static string $resource = CategoryResource::class;
}
