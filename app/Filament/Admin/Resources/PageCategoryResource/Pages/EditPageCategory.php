<?php

namespace App\Filament\Admin\Resources\PageCategoryResource\Pages;

use App\Filament\Admin\Resources\PageCategoryResource;
use App\Filament\CrudDefaults;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPageCategory extends EditRecord
{
    use CrudDefaults;
    protected static string $resource = PageCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
