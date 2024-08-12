<?php

namespace Modules\Product\Filament\Resources\CategoryResource\Pages;

use Modules\Product\Filament\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;
}
