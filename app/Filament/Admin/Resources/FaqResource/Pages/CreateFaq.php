<?php

namespace App\Filament\Admin\Resources\FaqResource\Pages;

use App\Filament\Admin\Resources\FaqResource;
use App\Filament\CrudDefaults;
use Filament\Resources\Pages\CreateRecord;

class CreateFaq extends CreateRecord
{
    use CrudDefaults;

    protected static string $resource = FaqResource::class;
}
