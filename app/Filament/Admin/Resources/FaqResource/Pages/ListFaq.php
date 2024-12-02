<?php

namespace App\Filament\Admin\Resources\FaqResource\Pages;

use App\Filament\Admin\Resources\FaqResource;
use App\Filament\ListDefaults;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFaq extends ListRecords
{
    use ListDefaults;

    protected static string $resource = FaqResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
