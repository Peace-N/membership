<?php

namespace App\Filament\Admin\Resources\PageCategoryResource\Pages;

use App\Filament\Admin\Resources\PageCategoryResource;
use App\Filament\ListDefaults;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPageCategories extends ListRecords
{
    use ListDefaults;
    protected static string $resource = PageCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
