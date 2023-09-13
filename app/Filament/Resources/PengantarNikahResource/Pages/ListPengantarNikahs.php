<?php

namespace App\Filament\Resources\PengantarNikahResource\Pages;

use Filament\Pages\Actions;
use App\Models\EnvelopeTemplate;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PengantarNikahResource;

class ListPengantarNikahs extends ListRecords
{
    protected static string $resource = PengantarNikahResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getTableQuery(): Builder
    {
        $envelope = EnvelopeTemplate::whereNama('Surat Pengantar Nikah')->first();

        return parent::getTableQuery()
            ->whereBelongsTo($envelope)
            ->withoutGlobalScopes();
    }
}
