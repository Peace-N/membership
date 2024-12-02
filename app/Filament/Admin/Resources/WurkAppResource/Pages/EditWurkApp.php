<?php

namespace App\Filament\Admin\Resources\WurkAppResource\Pages;

use App\Filament\Admin\Resources\WurkAppResource;
use App\Filament\CrudDefaults;
use Filament\Actions\DeleteAction;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditWurkApp extends EditRecord
{
    use CrudDefaults;

    protected static string $resource = WurkAppResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\DeleteAction::make()
        ];
    }
}
