<?php

namespace Modules\Product\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Product\Models\Product;

class ProductResource extends BaseResource
{
    protected static ?string $model = Product::class;

    protected static ?string $slug = 'product/product';

    protected static ?string $navigationGroup = 'Product';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


}
