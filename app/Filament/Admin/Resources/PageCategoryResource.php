<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PageCategoryResource\Pages;
use App\Models\PageCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PageCategoryResource extends Resource
{
    protected static ?string $model = PageCategory::class;

    protected static ?string $navigationGroup = 'Cms';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make([
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('slug')
                        ->dehydrateStateUsing(function ($state, \Filament\Forms\Get $get) {
                            if (empty($state)) {
                                $name = $get('name');

                                return Str::slug($name);
                            }

                            return Str::slug($state);
                        })
                        ->helperText(__('Leave empty to generate slug automatically name.'))
                        ->maxLength(255),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPageCategories::route('/'),
            'create' => Pages\CreatePageCategory::route('/create'),
            'edit' => Pages\EditPageCategory::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Page Categories');
    }
}
