<?php

namespace App\Filament\Admin\Resources\WurkAppResource\Pages;

use App\Filament\Admin\Resources\WurkAppResource;
use App\Filament\CrudDefaults;
use Filament\Resources\Pages\CreateRecord;

class CreateWurkApp extends CreateRecord
{
    use CrudDefaults;

    protected static string $resource = WurkAppResource::class;
}
