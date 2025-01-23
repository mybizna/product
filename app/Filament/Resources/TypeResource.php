<?php

namespace Modules\Product\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Product\Models\Type;

class TypeResource extends BaseResource
{
    protected static ?string $model = Type::class;

    protected static ?string $slug = 'product/type';

    protected static ?string $navigationGroup = 'Product';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

}
