<?php

namespace App\Filament\Admin\Resources\GroupPageCategoryResource\Pages;

use App\Filament\Admin\Resources\GroupPageCategoryResource;
use App\Filament\CrudDefaults;
use Filament\Resources\Pages\CreateRecord;

class CreateGroupPageCategory extends CreateRecord
{
    use CrudDefaults;

    protected static string $resource = GroupPageCategoryResource::class;
}
