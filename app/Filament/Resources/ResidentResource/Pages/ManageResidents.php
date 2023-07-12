<?php

namespace App\Filament\Resources\ResidentResource\Pages;

use Carbon\Carbon;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;
use App\Filament\Resources\ResidentResource;
use Konnco\FilamentImport\Actions\ImportField;
use Konnco\FilamentImport\Actions\ImportAction;
use Filament\Tables\Actions\Modal\Actions\Action;

class ManageResidents extends ManageRecords
{
    protected static string $resource = ResidentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
            ImportAction::make()
                ->extraModalActions([
                    Action::make('download_template')
                        ->url(asset('/templates/template_import.csv'))
                ])
                ->color('secondary')
                ->fields(
                    [
                        ImportField::make('nama')
                            ->required(),
                        ImportField::make('jenis_kelamin')
                            ->required(),
                        ImportField::make('tempat_lahir')
                            ->required(),
                        ImportField::make('tanggal_lahir')
                            ->mutateBeforeCreate(fn ($value) => Carbon::parse($value))
                            ->required(),
                        ImportField::make('tingkat_pendidikan')
                            ->required(),
                        ImportField::make('pekerjaan')
                            ->required(),
                        ImportField::make('pendapatan')
                            ->required(),
                        ImportField::make('status_pernikahan')
                            ->required(),
                        ImportField::make('agama')
                            ->required(),
                        ImportField::make('kewarganegaraan')
                            ->required(),
                        ImportField::make('alamat')
                            ->required(),
                    ],
                    columns: 2
                )
        ];
    }
}
