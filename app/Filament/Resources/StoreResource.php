<?php

namespace Modules\Product\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Product\Models\Store;

class StoreResource extends BaseResource
{
    protected static ?string $model = Store::class;

    protected static ?string $slug = 'product/store';

    protected static ?string $navigationGroup = 'Product';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

}
