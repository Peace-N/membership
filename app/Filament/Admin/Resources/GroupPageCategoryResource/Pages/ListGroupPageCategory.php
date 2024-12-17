<?php

namespace App\Filament\Admin\Resources\GroupPageCategoryResource\Pages;

use App\Filament\Admin\Resources\GroupPageCategoryResource;
use App\Filament\ListDefaults;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGroupPageCategory extends ListRecords
{
    use ListDefaults;

    protected static string $resource = GroupPageCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
