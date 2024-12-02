<?php

namespace App\Filament\Admin\Resources;

use App\Models\Category;
use App\Models\Faq;
use CodeIsAwesome\FilamentTinyEditor\TinyEditor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Unique;

class FaqResource extends Resource
{
    protected static ?string $model = Faq::class;

    protected static ?string $navigationGroup = 'Cms';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make([
                    Forms\Components\FileUpload::make('image')
                        ->image()
                        ->uploadingMessage('Uploading Faq image...')
                        ->imageEditor(),
                    Forms\Components\TextInput::make('icon')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(255),
                    TinyEditor::make('body')
                        ->columns(10)
                        ->required()
                        ->toolbarSticky(true)
                        ->setRelativeUrls(false)
                        ->fileAttachmentsDirectory('faq-images')
                        ->columnSpanFull(),
                ]),
                ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->heading(__('A Product category is the high level categorisation of all wurk products'))
            ->description(__('An example a Product Website Pro can reside in a Website Category'))
            ->columns([
                Tables\Columns\ImageColumn::make('image')->square(),
                Tables\Columns\IconColumn::make('icon')->icon(static fn (Model $record): string|null => $record->icon),
                Tables\Columns\TextColumn::make('title')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(config('app.datetime_format')),
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
            'index' => \App\Filament\Admin\Resources\FaqResource\Pages\ListFaq::route('/'),
            'create' => \App\Filament\Admin\Resources\FaqResource\Pages\CreateFaq::route('/create'),
            'edit' => \App\Filament\Admin\Resources\FaqResource\Pages\EditFaq::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('Faq');
    }

    public static function getNavigationLabel(): string
    {
        return __('Faq');
    }
}
