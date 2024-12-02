<?php

namespace App\Filament\Dashboard\Widgets;

use Filament\Widgets\Widget;

class UserStorageWidget extends Widget
{
    protected int | string | array $columnSpan = '1';
    protected static string $view = 'filament.dashboard.widgets.storage-widget';
}
