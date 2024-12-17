<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PageResource\Pages;
use App\Models\Page;
use CodeIsAwesome\FilamentTinyEditor\TinyEditor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationGroup = 'Cms';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make([
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(1000),
                    Forms\Components\Textarea::make('description')
                        ->maxLength(1000)
                        ->helperText(__('A short description of the post (will be used in meta tags).'))
                        ->label('Description')
                        ->rows(2),
                    TinyEditor::make('body')
                        ->columns(10)
                        ->required()
                        ->toolbarSticky(true)
                        ->setRelativeUrls(false)
                        ->fileAttachmentsDirectory('page-images')
                        ->columnSpanFull(),
                ])->columnSpan(2),
                Forms\Components\Section::make([
                    Forms\Components\TextInput::make('slug')
                        ->helperText(__('Will be used in the URL of the post. Leave empty to generate slug automatically from title.'))
                        ->dehydrateStateUsing(function ($state, \Filament\Forms\Get $get) {
                            if (empty($state)) {
                                $title = $get('title');

                                return Str::slug($title);
                            }

                            return Str::slug($state);
                        })
                        ->maxLength(255),
                    Forms\Components\Select::make('category_id')
                        ->relationship('category', 'name')->label('Product Category'),
                    Forms\Components\Select::make('group_page_category_id')
                        ->relationship('groupPageCategory', 'name')->label('Sub Grouping Category'),
                    Forms\Components\Select::make('page_category_id')
                        ->relationship('pageCategory', 'name'),
                    Forms\Components\SpatieMediaLibraryFileUpload::make('image')
                        ->collection('page-images')
                        ->image(),
                    Forms\Components\Toggle::make('is_published')
                        ->required(),
                    Forms\Components\DateTimePicker::make('published_at')
                        ->required(function ($state, \Filament\Forms\Get $get) {
                            return $get('is_published');
                        }),
                ])->columnSpan(1),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category.name')
                    ->label(__('Product Category')),
                Tables\Columns\TextColumn::make('groupPageCategory.name')
                    ->label(__('Grouping Sub Category')),
                Tables\Columns\TextColumn::make('pageCategory.name')
                    ->label(__('Page Category')),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_published')
                    ->boolean(),
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Pages');
    }
}
