<?php

namespace App\Filament\Dashboard\Widgets;

use Filament\Widgets\Widget;

class UserAppsWidget extends Widget
{
    protected int | string | array $columnSpan = 'full';
    protected static string $view = 'filament.dashboard.widgets.user-apps-widget';
}
