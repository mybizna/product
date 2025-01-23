<?php

namespace Modules\Product\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Product\Models\Category;

class CategoryResource extends BaseResource
{
    protected static ?string $model = Category::class;

    protected static ?string $slug = 'product/category';

    protected static ?string $navigationGroup = 'Product';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


}
