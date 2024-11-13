<?php

namespace App\Filament\Admin\Resources\CategoryResource\Pages;

use App\Filament\Admin\Resources\CategoryResource;
use App\Filament\CrudDefaults;
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    use CrudDefaults;

    protected static string $resource = CategoryResource::class;
}
