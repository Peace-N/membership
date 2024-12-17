<?php

namespace App\Filament\Admin\Resources\GroupPageCategoryResource\Pages;

use App\Filament\Admin\Resources\GroupPageCategoryResource;
use App\Filament\CrudDefaults;
use Filament\Actions\DeleteAction;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditGroupPageCategory extends EditRecord
{
    use CrudDefaults;

    protected static string $resource = GroupPageCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\DeleteAction::make()
        ];
    }
}
