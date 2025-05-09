<?php

namespace App\Filament\Admin\Resources\PageCategoryResource\Pages;

use App\Filament\Admin\Resources\PageCategoryResource;
use App\Filament\CrudDefaults;
use Filament\Resources\Pages\CreateRecord;

class CreatePageCategory extends CreateRecord
{
    use CrudDefaults;

    protected static string $resource = PageCategoryResource::class;
}
