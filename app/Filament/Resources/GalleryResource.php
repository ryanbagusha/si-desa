<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Gallery;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\GalleryResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\GalleryResource\RelationManagers;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-camera';

    protected static ?string $navigationGroup = 'Galeri';

    protected static ?string $label = 'Galeri';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->columns(2)
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('gallery')
                            ->image()
                            ->label('Foto')
                            ->multiple()
                            ->maxSize(2048)
                            ->maxFiles(5)
                            ->imagePreviewHeight('100')
                            ->loadingIndicatorPosition('left')
                            ->panelLayout('compact')
                            // ->panelAspectRatio('4:1')
                            ->removeUploadedFileButtonPosition('right')
                            ->collection('gallery')
                            ->required()
                            ->columnSpanFull(),
                        TextInput::make('title')
                            ->label('Judul')
                            ->required(),
                        DatePicker::make('date')
                            ->label('Tanggal')
                            ->required()
                            ->default(now()),
                        RichEditor::make('content')
                            ->label('Isi')
                            ->required()
                            ->disableToolbarButtons([
                                'attachFiles',
                                'codeBlock',
                            ])
                            ->columnSpanFull(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('gallery')
                    ->collection('gallery')
                    ->defaultImageUrl(fn () => asset('/images/default.png'))
                    ->circular()
                    ->label('Gambar'),
                TextColumn::make('date')
                    ->sortable()
                    ->date('l, j F y'),
                TextColumn::make('title')
                    ->sortable()
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
                // Tables\Actions\ForceDeleteBulkAction::make(),
                // Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'view' => Pages\ViewGallery::route('/{record}'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
