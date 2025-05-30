<?php

namespace Filament\Widgets;

class AccountWidget extends Widget
{
    protected static ?int $sort = -3;

    protected static bool $isLazy = false;

    /**
     * @var view-string
     */

     protected int | string | array $columnSpan = 'full';

    protected static string $view = 'filament-panels::widgets.account-widget';
}
