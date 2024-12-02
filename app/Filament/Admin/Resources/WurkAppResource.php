<?php

namespace App\Filament\Admin\Resources;

use App\Models\Category;
use App\Models\WurkApp;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Unique;

class WurkAppResource extends Resource
{
    protected static ?string $model = WurkApp::class;

    protected static ?string $navigationGroup = '3rd Party Apps';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make([
                    Forms\Components\FileUpload::make('image')
                        ->image()
                        ->uploadingMessage('Uploading Product image...')
                        ->imageEditor(),
                    Forms\Components\TextInput::make('icon')
                        ->required(),
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                        Forms\Components\TextInput::make('url')
                        ->required()
                ]),
                ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->heading(__('Wurk Connected Services'))
            ->description(__('A listing of all 3rd Apps connected to wurk'))
            ->columns([
                Tables\Columns\ImageColumn::make('image')->square(),
                Tables\Columns\IconColumn::make('icon')->icon(static fn (Model $record): string|null => $record->icon),
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('url')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(config('app.datetime_format')),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('manage')
                ->label(__('Access App'))
                ->icon('heroicon-s-arrow-right-circle')
                ->color('success')
                ->button(),
                // ->url(fn (Subscription $record): string => SubscriptionResource::getUrl('cancel', ['record' => $record->uuid])),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
            ]);
    }

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => \App\Filament\Admin\Resources\WurkAppResource\Pages\ListWurkApp::route('/'),
            'create' => \App\Filament\Admin\Resources\WurkAppResource\Pages\CreateWurkApp::route('/create'),
            'edit' => \App\Filament\Admin\Resources\WurkAppResource\Pages\EditWurkApp::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('Wurk App');
    }

    public static function getNavigationLabel(): string
    {
        return __('Wurk Apps');
    }
}
