<?php

namespace App\Filament\Admin\Resources\WurkAppResource\Pages;

use App\Filament\Admin\Resources\WurkAppResource;
use App\Filament\ListDefaults;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWurkApp extends ListRecords
{
    use ListDefaults;

    protected static string $resource = WurkAppResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
