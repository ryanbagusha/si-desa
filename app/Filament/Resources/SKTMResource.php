<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\SKTM;
use Filament\Tables;
use App\Models\Envelope;
use Filament\Resources\Form;
use Filament\Resources\Table;
use App\Models\PenanggungJawab;
use App\Models\EnvelopeTemplate;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\TrashedFilter;
use App\Filament\Resources\SKTMResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SKTMResource\RelationManagers;

class SKTMResource extends Resource
{
    protected static ?string $model = Envelope::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Surat';

    protected static ?string $label = 'Surat Keterangan Tidak Mampu';

    protected static ?string $slug = 'SKTM';

    protected static ?int $navigationSort = 12;

    public static function form(Form $form): Form
    {
        $templateForm = [];
        $envelope = EnvelopeTemplate::whereNama('Surat Keterangan Tidak Mampu')->first();
        $metas = $envelope->meta;
        usort($metas, function ($a, $b) {
            return $a['sort'] <=> $b['sort'];
        });

        foreach ($metas as $meta) {
            $templateForm[] = TextInput::make($meta['name'])
                ->label($meta['label'])
                ->helperText($meta['hint'] ?? null)
                ->required();
        }

        return $form
            ->schema([
                Card::make()
                    ->columns(2)
                    ->schema([
                        Grid::make()
                            ->schema([
                                DatePicker::make('tanggal')
                                    ->default(now())
                                    ->required()
                            ]),
                        Hidden::make('envelope_template_id')
                            ->default($envelope->id),
                        TextInput::make('no_surat')
                            ->label('Nomor Surat')
                            ->required(),
                        Select::make('penanggung_jawab_id')
                            ->label('Penanggung Jawab')
                            ->options(PenanggungJawab::all()->pluck('nama', 'id'))
                            ->searchable()
                            ->required()
                    ]),
                Card::make()
                    ->columns(2)
                    ->schema($templateForm)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no_surat')
                    ->searchable(),
                TextColumn::make('tanggal')
                    ->date('j F Y'),
                TextColumn::make('penanggungJawab.nama'),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\Action::make('print')
                    ->label('Cetak')
                    ->color('secondary')
                    ->url(fn(Model $record) => route('filament.print.sktm', ['envelope' => $record]))
                    ->openUrlInNewTab(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListSKTMS::route('/'),
            'create' => Pages\CreateSKTM::route('/create'),
            'edit' => Pages\EditSKTM::route('/{record}/edit'),
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
