<?php

namespace App\Filament\Resources\SuratKeteranganUsahaResource\Pages;

use Filament\Pages\Actions;
use App\Models\EnvelopeTemplate;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SuratKeteranganUsahaResource;

class ListSuratKeteranganUsahas extends ListRecords
{
    protected static string $resource = SuratKeteranganUsahaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getTableQuery(): Builder
    {
        $envelope = EnvelopeTemplate::whereNama('Surat Keterangan Usaha')->first();

        return parent::getTableQuery()
            ->whereBelongsTo($envelope)
            ->withoutGlobalScopes();
    }
}
