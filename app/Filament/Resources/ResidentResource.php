<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Resident;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ResidentResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ResidentResource\RelationManagers;

class ResidentResource extends Resource
{
    protected static ?string $model = Resident::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Penduduk';

    protected static ?string $label = 'Penduduk';

    protected static ?int $navigationSort = 21;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->required(),
                Select::make('jenis_kelamin')
                    ->options([
                        'Laki-Laki' => 'Laki-Laki',
                        'Perempuan' => 'Perempuan'
                    ])
                    ->required(),
                TextInput::make('tempat_lahir')
                    ->required(),
                DatePicker::make('tanggal_lahir')
                    ->required(),
                Select::make('tingkat_pendidikan')
                    ->options([
                        'Tidak Sekolah' => 'Tidak Sekolah',
                        'SD'            => 'SD',
                        'SMP'           => 'SMP',
                        'SMA/SMK'       => 'SMA/SMK',
                        'D3'            => 'D3',
                        'S1/D4'         => 'S1/D4',
                        'S2'            => 'S2',
                        'S3'            => 'S3',
                        'Lainnya'       => 'Lainnya'
                    ])
                    ->required(),
                TextInput::make('pekerjaan')
                    ->required(),
                TextInput::make('pendapatan')
                    ->numeric()
                    ->mask(
                        fn (TextInput\Mask $mask) => $mask
                            ->numeric()
                            ->thousandsSeparator('.')
                    )
                    ->required(),
                Select::make('status_pernikahan')
                    ->options([
                        'Belum Kawin'   => 'Belum Kawin',
                        'Kawin'         => 'Kawin',
                        'Cerai Hidup'   => 'Cerai Hidup',
                        'Cerai Mati'    => 'Cerai Mati',
                        'Lainnya'       => 'Lainnya'
                    ])
                    ->required(),
                Select::make('agama')
                    ->options([
                        'Islam'     => 'Islam',
                        'Protestan' => 'Protestan',
                        'Katolik'   => 'Katolik',
                        'Hindu'     => 'Hindu',
                        'Buddha'    => 'Buddha',
                        'Khonghucu' => 'Khonghucu',
                        'Lainnya'   => 'Lainnya'
                    ])
                    ->required(),
                TextInput::make('kewarganegaraan')
                    ->required(),
                Textarea::make('alamat')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->searchable(),
                TextColumn::make('jenis_kelamin'),
                TextColumn::make('lahir')
                    ->label('Tempat/Tanggal Lahir')
                    ->formatStateUsing(fn (Model $record) => $record->tempat_lahir . ', ' . $record->tanggal_lahir->isoFormat('DD MMMM Y')),
                TextColumn::make('umur')
                    ->formatStateUsing(fn (Model $record) => $record->tanggal_lahir->age . ' Tahun'),
                TextColumn::make('tingkat_pendidikan')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('pekerjaan')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('pendapatan')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('status_pernikahan')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('agama')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('kewarganegaraan')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('alamat'),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageResidents::route('/'),
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
