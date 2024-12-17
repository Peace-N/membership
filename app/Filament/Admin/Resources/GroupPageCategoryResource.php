<?php

namespace App\Filament\Admin\Resources;

use App\Models\GroupPageCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Unique;

class GroupPageCategoryResource extends Resource
{
    protected static ?string $model = GroupPageCategory::class;

    protected static ?string $navigationGroup = 'Cms';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make([
                    Forms\Components\Select::make('category_id')
                        ->relationship('category', 'name')->label('Product Category'),
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('slug')
                        ->helperText(__('Will be used in the URL of the group page'))
                        ->dehydrateStateUsing(function ($state, \Filament\Forms\Get $get) {
                            if (empty($state)) {
                                $title = $get('title');

                                return Str::slug($title);
                            }

                            return Str::slug($state);
                        })
                        ->maxLength(255),
                ]),
                ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->heading(__('A Group Page Category helps in grouping elements of pages together .eg Domains >> [DNS, Transfers]'))
            ->description(__('This section only applies to grouped sections like help & support'))
            ->columns([
                Tables\Columns\TextColumn::make('category.name')
                    ->label(__('Product Category')),
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => \App\Filament\Admin\Resources\GroupPageCategoryResource\Pages\ListGroupPageCategory::route('/'),
            'create' => \App\Filament\Admin\Resources\GroupPageCategoryResource\Pages\CreateGroupPageCategory::route('/create'),
            'edit' => \App\Filament\Admin\Resources\GroupPageCategoryResource\Pages\EditGroupPageCategory::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('Group Page Category');
    }

    public static function getNavigationLabel(): string
    {
        return __('Group Page Categories');
    }
}
