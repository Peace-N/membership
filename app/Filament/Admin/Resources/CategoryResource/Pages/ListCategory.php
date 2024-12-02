<?php

namespace App\Filament\Admin\Resources\CategoryResource\Pages;

use App\Filament\Admin\Resources\CategoryResource;
use App\Filament\ListDefaults;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategory extends ListRecords
{
    use ListDefaults;

    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
