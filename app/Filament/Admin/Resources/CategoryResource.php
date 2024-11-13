<?php

namespace App\Filament\Admin\Resources;

use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Unique;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationGroup = 'Product Categories';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make([
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                        Forms\Components\TextInput::make('portal')
                        ->required()
                ]),
                ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->heading(__('A Product category is the high level categorisation of all wurk products'))
            ->description(__('An example a Product Website Pro can reside in a Website Category'))
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('portal')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(config('app.datetime_format')),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('manage')
                ->label(__('Access Service'))
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
            'index' => \App\Filament\Admin\Resources\CategoryResource\Pages\ListCategory::route('/'),
            'create' => \App\Filament\Admin\Resources\CategoryResource\Pages\CreateCategory::route('/create'),
            'edit' => \App\Filament\Admin\Resources\CategoryResource\Pages\EditCategory::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('Product Category');
    }

    public static function getNavigationLabel(): string
    {
        return __('Product Categories');
    }
}
