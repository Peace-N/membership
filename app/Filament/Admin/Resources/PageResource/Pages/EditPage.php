<?php

namespace App\Filament\Admin\Resources\PageResource\Pages;

use App\Filament\Admin\Resources\PageResource;
use App\Filament\CrudDefaults;
use App\Models\Page;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPage extends EditRecord
{
    //    use CrudDefaults;
    protected static string $resource = PageResource::class;

    public static bool $formActionsAreSticky = true;

    protected function getHeaderActions(): array
    {
        return [
            // view the post
            Actions\Action::make('view')
                ->label(__('View Page'))
                ->color('success')
                ->url(
                    fn (Page $resource) => route('page.view', $resource->slug), ///todo::
                    true
                )
                ->icon('heroicon-o-eye'),
            Actions\ActionGroup::make([
                Actions\DeleteAction::make(),
            ]),
        ];
    }

    protected function getFormActions(): array
    {
        return array_merge(parent::getFormActions(), [
            Actions\Action::make('view')
                ->label(__('View Page'))
                ->color('success')
                ->url(
                    fn (Page $resource) => route('page.view', $resource->slug),
                    true
                )
                ->icon('heroicon-o-eye'),
        ]);
    }
}
